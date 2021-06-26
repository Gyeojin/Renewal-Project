
//Scroll Menu Fixed Code

function fixNav() {
  const nav = document.querySelector('.header');
  const nav1 = window.pageYOffset; 
  if (nav1 > 0) {
    nav.classList.add('fixed-nav'); 
  } else if(window.scrollY == 0) {
    nav.classList.remove('fixed-nav'); 
  }
}

window.addEventListener('scroll', fixNav);


//1.움직여야 하는 것 : 이미지 + 도트 컬러
const slideImg = document.querySelectorAll('.slide-img');
const dots = document.querySelectorAll('.dot');
console.log(slideImg);
console.log(dots);


//2.어떻게? : 자동 가로/세로 슬라이드 + 도트 클릭 시 해당 이미지로 슬라이드

//자동으로 가로로 100%, 세로로 100%씩 움직여야함
