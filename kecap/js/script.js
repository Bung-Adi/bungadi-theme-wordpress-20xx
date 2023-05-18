const body = document.querySelector('body');
const btnHamburger = document.querySelector('#btnBurger');
const header = document.querySelector('.navbar');
const fadeElems = document.querySelectorAll('.has-fade');

const loader = document.querySelector('.loader');
const main = document.querySelector('.main');

function init() {
  //for loader
  setTimeout(() => {
    loader.style.opacity = 0;
    loader.style.display = 'none';

    main.style.display = 'block';
    setTimeout(() => (main.style.opacity = 1), 50);
  }, 3000);
}

init();

setTimeout(aosRuner, 3000);

function aosRuner() {
  AOS.init({
    offset: 200, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 1000, // values from 0 to 3000, with step 50ms
    disable: function() {
      var maxWidth = 800;
      return window.innerWidth < maxWidth;
    }
  });
  
  // AOS.refresh();
}

btnHamburger.addEventListener('click', function(){
    console.log('click hamburger');
    if(header.classList.contains('open')){//close burger
        body.classList.remove('noscroll');
        header.classList.remove('open');
        fadeElems.forEach(function(element){
            element.classList.remove('fade-in');
            element.classList.add('fade-out');
          }); 
    }else{
        header.classList.add('open');
        body.classList.add('noscroll');
        fadeElems.forEach(function(element){
            element.classList.remove('fade-out');
            element.classList.add('fade-in');
          });
    }
});

const debounce = (fn) => {
    let frame;
    return (...params) => {
      if (frame) { 
        cancelAnimationFrame(frame);
      }
      frame = requestAnimationFrame(() => {
        
        fn(...params);
      });
    } 
  };

const storeScroll = () => {
  document.documentElement.dataset.scroll = window.scrollY;
}

document.addEventListener('scroll', debounce(storeScroll), { passive: true });

storeScroll();

