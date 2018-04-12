class GalleryFilter{
    constructor(){
        this.initialize()
    }

    initialize(){
        this.galleryHero = document.querySelectorAll('.gallery_hero')
        this.galleryBody = document.querySelector('.background-gallery')
        this.body = document.querySelector('.gallery-test')

        this.event()
    }

    event(){
        for (let i = 0; i < this.galleryHero.length; i++){
            window.addEventListener('scroll', () => {
                let scroll = window.scrollX


                if (scroll <= 50){
                    this.galleryHero[0].style.filter =  "none"
                    if (i != 0){
                        this.galleryHero[8].style.filter = "grayscale(100%)"
                        }
                }

                if (scroll >= 50)
                {
                    this.galleryHero[8].style.filter = "none"
                    if (i != 8){
                        this.galleryHero[i].style.filter = "grayscale(100%)"
                    }
                }
                if (scroll >= 250)
                {
                    this.galleryHero[1].style.filter = "none"
                    this.galleryHero[1].style.width = "600px"
                    this.galleryHero[1].style.transition = "width 0.7s"

                    if (i != 1){
                        this.galleryHero[8].style.filter = "grayscale(100%)"
                        }
                    }
                
                if (scroll >= 500)
                {
                    this.galleryHero[2].style.filter = "none"
                    this.galleryHero[1].style.width = "480px"
                    if (i != 2){
                        this.galleryHero[1].style.filter = "grayscale(100%)"
                        }
                }
                if (scroll >= 940)
                {
                    this.galleryHero[3].style.filter = "none"
                    if (i != 3){
                        this.galleryHero[2].style.filter = "grayscale(100%)"
                        }
                }
                if (scroll >= 1300)
                {
                    this.galleryHero[4].style.filter = "none"
                    if (i != 4){
                        this.galleryHero[3].style.filter = "grayscale(100%)"
                        }
                }
                if (scroll >= 1700)
                {
                    this.galleryHero[5].style.filter = "none"
                    if (i != 5){
                        this.galleryHero[4].style.filter = "grayscale(100%)"
                        }
                }
                if (scroll >= 2100)
                {
                    this.galleryHero[6].style.filter = "none"
                    if (i != 6){
                        this.galleryHero[5].style.filter = "grayscale(100%)"
                        }
                }
                if (scroll >= 2400)
                {
                    this.galleryHero[7].style.filter = "none"
                    if (i != 7){
                        this.galleryHero[6].style.filter = "grayscale(100%)"
                        }
                }
                if (scroll >= 3100)
                {
                    this.galleryHero[9].style.filter = "none"
                    if (i != 9){
                        this.galleryHero[7].style.filter = "grayscale(100%)"
                        }
                }
                if (scroll >= 3400)
                {
                    this.galleryHero[10].style.filter = "none"
                    if (i != 10){
                        this.galleryHero[9].style.filter = "grayscale(100%)"
                        }
                }
                
            })
        }
    }

    // switchToActor(){
    //     for(const $element of this.characterElements){
    //         $element.classList.add('hidden')
    //     }
    //     for(const $element of this.actorElements){
    //         $element.classList.remove('hidden')
    //     }
    //     this.actorButton.classList.add('active')
    //     this.characterButton.classList.remove('active')
    // }
}