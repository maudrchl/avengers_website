class ScrollParallax{
    constructor(){
        this.initialize()

        this.wheel()
    }

    initialize(){
        
    }

    wheel(){
        window.addEventListener('mousewheel', (e)=>{
            const leftOffset = this.$sliding.getBoundingClientRect().left;

            if(e.deltaY>0 && Math.abs(this.offsetX) < this.$slidingSize - this.windowSize){
                this.offsetX -= 1
            } else if(e.deltaY<0 && this.offsetX < 0){
                this.offsetX += 1
            }
        })
    }
}