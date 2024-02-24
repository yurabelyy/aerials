//adaptive menu
const burger = document.querySelector('.header-burger');
const headerMenu = document.querySelector('.header-menu-wrapper');

burger.addEventListener('click', function () {
  headerMenu.classList.toggle('active');
  burger.classList.toggle('active');
});

//preloader
let mask = document.querySelector('.mask');

window.addEventListener('load', () => {
  mask.classList.add('hide');
  setTimeout(() => {
    mask.remove();
  }, 600);
});

//timer
document.addEventListener('DOMContentLoaded', function () {
  const deadline = new Date(2026, 2, 6);

  let timerId = null;

  function declensionNum(num, words) {
    return words[
      num % 100 > 4 && num % 100 < 20 ? 2 : [2, 0, 1, 1, 1, 2][num % 10 < 5 ? num % 10 : 5]
    ];
  }

  function countdownTimer() {
    const diff = deadline - new Date();
    if (diff <= 0) {
      clearInterval(timerId);
    }
    const days = diff > 0 ? Math.floor(diff / 1000 / 60 / 60 / 24) : 0;
    const hours = diff > 0 ? Math.floor(diff / 1000 / 60 / 60) % 24 : 0;
    const minutes = diff > 0 ? Math.floor(diff / 1000 / 60) % 60 : 0;
    const seconds = diff > 0 ? Math.floor(diff / 1000) % 60 : 0;
    $days.textContent = days < 10 ? '0' + days : days;
    $hours.textContent = hours < 10 ? '0' + hours : hours;
    $minutes.textContent = minutes < 10 ? '0' + minutes : minutes;
    $seconds.textContent = seconds < 10 ? '0' + seconds : seconds;
    $days.dataset.title = declensionNum(days, ['день', 'дня', 'дней']);
    $hours.dataset.title = declensionNum(hours, ['час', 'часа', 'часов']);
    $minutes.dataset.title = declensionNum(minutes, ['минута', 'минуты', 'минут']);
    $seconds.dataset.title = declensionNum(seconds, ['секунда', 'секунды', 'секунд']);
  }
  const $days = document.querySelector('.timer__days');
  const $hours = document.querySelector('.timer__hours');
  const $minutes = document.querySelector('.timer__minutes');
  const $seconds = document.querySelector('.timer__seconds');
  countdownTimer();
  timerId = setInterval(countdownTimer, 1000);
});

//slider
const images = document.querySelectorAll('.slider-item');
const controlls = document.querySelectorAll('.controlls');
let imageIndex = 0;

function show(index) {
  images[imageIndex].classList.remove('active');
  images[index].classList.add('active');
  imageIndex = index;
}

controlls.forEach((e) => {
  e.addEventListener('click', () => {
    if (event.target.classList.contains('prev')) {
      let index = imageIndex - 1;

      if (index < 0) {
        index = images.length - 1;
      }

      show(index);
    } else {
      if (event.target.classList.contains('next')) {
        let index = imageIndex + 1;
        if (index >= images.length) {
          index = 0;
        }
        show(index);
      }
    }
  });
});

show(imageIndex);
