class Nav{
    constructor(){
        this.initialize()
        this.event()
    }

    initialize(){
        this.nav = document.querySelector('nav')
        this.nav_menu = document.querySelector('.nav')
        this.nav_menu.style.transform = "translateX(-3000px)"
    }

    event(){
        this.nav.addEventListener('click', () =>
        {
            if (this.nav.classList.contains("active")){
                this.nav.classList.remove("active")
                this.nav_menu.style.transform = "translateX(-3000px)";
                this.nav_menu.style.transition = "transform 0.8s ease-in-out";
            } else {
                this.nav.classList.add("active")
                this.nav_menu.style.transform = "translateX(0px)";
                this.nav_menu.style.transition = "transform 0.8s  ease-in-out";
            }
        })
    }
}