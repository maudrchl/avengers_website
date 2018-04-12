class ScrollPop{
    constructor(){
        this.initialize()
        this.wheel()
    }

    initialize(){
        const $elements = document.querySelectorAll('.js-scrollpop')
        this.elements = []

        for(const $element of $elements){
            const element = {
                element : $element,
                posY : $element.offsetTop,
            }
            this.elements.push(element)
        }

        this.windowHeight = window.innerHeight;

    }

    wheel(){
        window.addEventListener('mousewheel', ()=>{
            const scrollTop = window.scrollY
            for(const element of this.elements){
                if(element.posY<scrollTop+this.windowHeight-100){
                    element.element.style.transform = 'translateX(0)'
                    element.element.style.opacity = 1
                }
            }
        })
    }
}