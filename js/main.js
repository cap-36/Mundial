const burguerMenu = document.querySelector('.menu');
const mobileMenu = document.querySelector('.mobile-menu');

burguerMenu.addEventListener('click', toggleMobileMenu);

function toggleMobileMenu() {
    mobileMenu.classList.toggle('inactive');
}