const nav = document.querySelector('nav');
const nav_window = document.querySelector('.nav');
console.log(nav_window);

nav.addEventListener('click', () =>
{
    nav_window.transform.translate("3000px");
})

