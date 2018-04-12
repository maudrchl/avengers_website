class Scroller{
    constructor(){
        this.initialize()
        this.onresize()
        
        this.wheel()
        this.mouse()

        this.raf()
    }

    initialize(){
        const $elements = document.querySelectorAll('.js-parallax');
        this.elements = []
        this.offsetX = 0
        this.offsetY = 0
        this.currentColor = 0

        for(const $element of $elements){
            const element = {
                element: $element,
                width : $element.getBoundingClientRect().width,
                amplitude: $element.dataset.amplitude,
                offsetX: 0,
                offsetY: 0,
            }

            this.elements.push(element)
        }


        this.$sliding = document.querySelector('.sliding')
        this.$slidingSize = this.$sliding.getBoundingClientRect().width
        this.windowWidth = window.innerWidth
        this.windowHeight = window.innerHeight

        window.onbeforeunload = function () {
            window.scrollTo(0, 0);
        }
    }

    wheel(){
        window.addEventListener('mousewheel', (e)=>{
            const leftOffset = this.$sliding.getBoundingClientRect().left;

            if(e.deltaY>0 && Math.abs(this.offsetX*20) < this.$slidingSize - this.windowWidth){
                this.offsetX -= 1;
            } else if(e.deltaY<0 && this.offsetX < 0){
                this.offsetX += 1;
            }
            this.$sliding.style.transform='translateX('+this.offsetX*20+'px)'

        })
    }

    mouse(){
        window.addEventListener('mousemove', (e)=>{
            
            const ratioX = e.clientX/this.windowWidth - 0.5
            const ratioY = e.clientY/this.windowHeight - 0.5
            
            this.offsetX += ratioX/10;
            this.offsetY += ratioY/10;
        })
    }

    setFilter(element){
        const offset = element.element.getBoundingClientRect().left
        if(offset<this.windowWidth/2-element.width/2){
            element.element.style.filter='grayscale(0%)'
        } else{
            element.element.style.filter='grayscale(100%)'
        }

    }

    middle(){
        let offsets = []
        let min = 0

        for(let i=0; i<this.elements.length; i++){
            const offset = Math.abs(this.elements[i].element.getBoundingClientRect().left-this.windowWidth/4);
            offsets.push(offset)
            if(offset<offsets[min]){
                min = i;
            }
        }

        for(let i=0; i<this.elements.length; i++){
            if(i != min){
                this.elements[i].element.style.filter='grayscale(100%)'
            } else{
                this.elements[i].element.style.filter='grayscale(0%)'
            }
        }
    }

    raf(){
        this.actualX = 0
        this.actualY = 0

        const loop = ()=>{

            this.actualX += 0.1*(this.offsetX-this.actualX)
            this.actualY += 0.1*(this.offsetY-this.actualY)
            window.requestAnimationFrame(loop)

            for(const element of this.elements){
                element.offsetX = this.actualX*5*element.amplitude
                element.offsetY = this.actualY*5*element.amplitude
                element.element.style.transform='translateX('+element.offsetX+'px) translateY('+element.offsetY+'px)'
            }
            this.middle()
        }

        loop()
        
    }

    onresize(){
        window.addEventListener('resize', ()=>{
            this.initialize()
        })
    }
}
