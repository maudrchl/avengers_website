const nav = document.querySelector('nav')
const nav_menu = document.querySelector('.nav')

nav_menu.style.transform = "translateX(-3000px)";

nav.addEventListener('click', () =>
{
    if (nav.classList.contains("active")){
        nav.classList.remove("active")
        nav_menu.style.transform = "translateX(-3000px)";
        nav_menu.style.transition = "transform 0.8s ease-in-out";
    } else {
        nav.classList.add("active")
        nav_menu.style.transform = "translateX(0px)";
        nav_menu.style.transition = "transform 0.8s  ease-in-out";
    }
})
