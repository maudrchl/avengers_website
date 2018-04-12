$(document).ready(function(){
    var $win = $(window);

    $('div.background').each(function(){
        var scroll_speed = 13;
        var $this = $(this);
        $(window).scroll(function() {
            var bgScroll = -(($win.scrollLeft() - $this.offset().left)/ scroll_speed);
            var bgPosition = 'center '+ bgScroll + 'px';
            $this.css({ backgroundPosition: bgPosition });
        });
    });
});