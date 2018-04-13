class Audio{
    constructor(){
        this.initialize()
        this.event()
    }

    initialize(){
        this.audio = document.querySelector('audio')
        this.equalizer = document.querySelector('.equalizer')
        this.bar = Array.from(this.equalizer.querySelectorAll('.bar'))
    }

    event(){
        this.equalizer.addEventListener('click', () =>
        {
            console.log('huiubiufz')
            if (this.audio.paused)
            {
            this.audio.play()
            this.equalizer.classList.remove('stop')
            } else 
            {
            this.audio.pause()
            this.equalizer.classList.add('stop')
            }
        })
    }
}