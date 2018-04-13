<?php
function getZipcode()
{
    if(!empty($_POST))
        {
            if(isset($_POST['sumbit'])){
                $zip = $_POST['zip'];
        }
    }
}

function parseTime($time)
{
    $time = str_split($time);

    $day = $time[8].$time[9];
    $month = $time[5].$time[6];
    $hour = $time[11].$time[12];
    $min = $time[14].$time[15];

    return [$day.'/'.$month, $hour.':'.$min];
}

function getPlaceId($zip_code)
{
    //find place id
    $place_request_url = 'http://www.allocine.fr/_/localization/'.$zip_code.'?v=v1.2.5.42'; 

    $place_request = file_get_contents($place_request_url);
    $place_request = json_decode($place_request);

    return $place_request[0]->id;
}

function getShowtimes($day, $zip_code)
{
    $showtimes_results = '';
    while($showtimes_results == '')
    {
        //find showtimes
        $place_id = getPlaceId($zip_code) ;
        $showtimes_request_url = 'http://www.allocine.fr/_/showtimes/movie-218265/near-'.$place_id.'/?date='.$day.'&v=v1.2.5.42';
        $path = 'components/cache/'.md5($showtimes_request_url);
        if(file_exists($path) && time() - filemtime($path) < 3600) // check cache
        {
            $showtimes_results = file_get_contents($path);
        } else
        {
            $showtimes_results = file_get_contents($showtimes_request_url);
            file_put_contents($path, $showtimes_results); // create cache
        }
    }
    $showtimes_results = json_decode($showtimes_results);

    $result = [];

    // parse results   
    $theatres_result = (array)$showtimes_results->theaters;
    $theatres_ids = array_keys($theatres_result);

    foreach($theatres_ids as $id){
        $showtimes = [];

        
        if(property_exists((object)$showtimes_results->showtimes, $id)){

            $showtimes_result = (array)$showtimes_results->showtimes->$id;
            $showtimes_ids = array_keys($showtimes_result);
        
            foreach($showtimes_ids as $show_id){
                foreach($showtimes_result[$show_id]->{'218265'} as $show){
                    foreach($show->showtimes as $real_show){
                        $showtime_datas = [
                            'time' => parseTime($real_show->showStart),
                            'ticket' => $real_show->urlTicketing,
                        ];
                        array_push($showtimes, $showtime_datas);
                    }
                }
            }

            $theatre_datas = [
                'name' => $theatres_result[$id]->name,
                'address' => $theatres_result[$id]->address->address,
                'city' => $theatres_result[$id]->address->city,
                'showtimes' => $showtimes,
            ];
            
            array_push($result, $theatre_datas);
        }   
    }
    
    return $result;
}
?>