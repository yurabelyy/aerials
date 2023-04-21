const burger = document.querySelector('.header-burger');
const headerMenu = document.querySelector('.header-menu-wrapper');

burger.addEventListener('click', function () {
  headerMenu.classList.toggle('active');
  burger.classList.toggle('active');
});

