
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
// let current = 0;
const slidebox = document.querySelector('.slide-img');
const slideImg = document.querySelectorAll('.slide-img a');
const dots = document.querySelectorAll('.dot li');

//2.어떻게? : 자동 가로/세로 슬라이드 + 도트 클릭 시 해당 이미지로 슬라이드
//자동으로 가로로 100%, 세로로 100%씩 움직여야함

function slider(values){
  slidebox.animate (
    [{left: -100 * values + "%"}] , {duration:400, iterations:1, fill:"forwards"}
  );
  // current = values;
}

// % 나머지 연산자  % 3 0,1,2
// for(let i = 0; i < dots.length; i++){
//   console.log(dots[i]);
// }
//slider(current);

for(let i = 0; i < dots.length; i++){
  //console.log(values);
  dots[i].addEventListener ('click',function(){
    let values = dots[i].getAttribute("value");
    // dots.classList.add('dot-click')
    slider(values);
  });
}
slider(current);