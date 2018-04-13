class Mobile{
    constructor(){
        this.isMobile = window.innerWidth<850

        this.initialize()

        this.resize()
    }

    initialize(){
        if(this.isMobile && document.querySelector('.disclaimer') == undefined){
            const $body = document.querySelector('body')

            const $disclaimer = document.createElement('div')
            const $logo = document.createElement('img')
            const $text = document.createElement('p')
            $text.innerText="Sorry, this experience is not available for your resolution."
            $logo.src = './images/logo.svg'
            $disclaimer.appendChild($logo)
            $disclaimer.appendChild($text)

            $disclaimer.classList.add('disclaimer')

            $body.appendChild($disclaimer)
        } else if(!this.isMobile && document.querySelector('.disclaimer')){
            document.querySelector('.disclaimer').remove();
        }
    }

    resize(){
        window.addEventListener('resize', ()=>{
            this.isMobile = window.innerWidth<850
            this.initialize()
        })
    }
}