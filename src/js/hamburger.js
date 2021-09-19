const hamburger = document.querySelector('.navigation__button--js');
const menu = document.querySelector('.navigation__list--js');
const main = document.querySelector('.main--js');

const handleHamburgerClick = () => {
    if(hamburger.classList.contains('navigation--active')) {
        hamburger.classList.remove('navigation--active');
    } else {
        hamburger.classList.add('navigation--active');
    }
}

const handleMenuClick = () => {
    menu.classList.add('navigation__list--animation');
    if(menu.classList.contains('navigation__list--visible')) {
        menu.classList.remove('navigation__list--visible');
    } else {
        menu.classList.add('navigation__list--visible');
    }
}

const handleMainClick = () => {
    if(menu.classList.contains('navigation__list--visible')) {
        menu.classList.remove('navigation__list--visible');
        hamburger.classList.remove('navigation--active');
    }
}

hamburger.addEventListener('click', handleHamburgerClick);

hamburger.addEventListener('click', handleMenuClick);

main.addEventListener('click', handleMainClick);