class Loader{
    constructor(){
        this.initialize()
        this.event()
    }

    initialize(){
        this.loader = document.querySelector('.loader')
    }

    event(){
        window.addEventListener('load', () => {
        {
            console.log("lo")
        }
    })
    }
}