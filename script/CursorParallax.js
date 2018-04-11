class CursorParallax
{
    constructor()
    // pour que les fonctions se lancent
    {
        // tu utilises this quand tu sais que tu vas le réutiliser
        this.setItems()
        this.setMouse()
        this.setRAF()
    }

    // récupérer les éléments
    setItems()
    {
        const $elements = document.querySelectorAll('.js-cursor-parallax')
        console.log($elements)

        this.items = []
        
        for(const $element of $elements)
        {
            const item = {}

            item.$element = $element
            item.amplitude = parseFloat($element.dataset.amplitude)
            item.offsetX = 0
            item.offsetY = 0

            this.items.push(item)
        }
    }

    // récupérer la position de la souris 
    setMouse()
    {
        this.mouse = {}
        this.mouse.x = 0
        this.mouse.y = 0

        let windowWidth = window.innerWidth
        let windowHeight = window.innerHeight

        window.addEventListener('resize', () =>
        {
            windowWidth = window.innerWidth
            windowHeight = window.innerHeight
        })

        window.addEventListener('mousemove', (event) =>
        {
            this.mouse.x = event.clientX / windowWidth - 0.5
            this.mouse.y = event.clientY / windowHeight - 0.5
        })

        window.addEventListener('mousewheel', (event) =>
        {
            this.mouse.x = event.deltaX / windowWidth - 0.5
            this.mouse.y = event.deltaY / windowHeight - 0.5
        })
    }

    // RequestAnimationFrame
    setRAF()
    {
        const loop = () =>
        {
            window.requestAnimationFrame(loop)

            for(const item of this.items)
            {
                const targetOffsetX = - this.mouse.x * 100 * item.amplitude
                const targetOffsetY = - this.mouse.y * 100 * item.amplitude

                item.offsetX += (targetOffsetX - item.offsetX) * 0.1
                item.offsetY += (targetOffsetY - item.offsetY) * 0.1

                const roundedOffsetX = Math.round(item.offsetX * 100) / 100
                const roundedOffsetY = Math.round(item.offsetY * 100) / 100

                item.$element.style.transform = `
                    translateX(${roundedOffsetX}px)
                    translateY(${roundedOffsetY}px)
                `
            }
        }
        loop()
    }
}