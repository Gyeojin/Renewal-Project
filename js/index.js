
//Scroll Menu Fixed Code

function fixNav() {
  const nav = document.querySelector('.header');
  const nav1 = window.pageYOffset; //스크롤값 알려줌
  console.log(nav1);
  if (nav1 > 0) {
    nav.classList.add('fixed-nav'); 
  } else if(window.scrollY == 0) {
    nav.classList.remove('fixed-nav'); 
  }
}

window.addEventListener('scroll', fixNav);


//Main Banner Slide Code//

//1.움직여야 하는 것 : 이미지 + 도트 컬러
let current = 0;
const slidebox = document.querySelector('.slide-img');
const slideImg = document.querySelectorAll('.slide-img a');
const dots = document.querySelectorAll('.dot li');
//console.log(slideImg);

for(let i = 0; i < dots.length; i++){
  //console.log(values);
  dots[i].addEventListener ('click',function(){
    let values = dots[i].getAttribute("value");
    slider(values);
  });
}

function slider(values){
  slidebox.animate (
    [{left: -100 * values + "%"}] , {duration:400, iterations:1, fill:"forwards"}
  );
  for(let i = 0; i < dots.length; i++){
    dots[i].classList.remove('dot-click');
    dots[values].classList.add('dot-click');
  }
  current=values;
}

  

// % 나머지 연산자  % 3 0,1,2
// for(let i = 0; i < dots.length; i++){
//   console.log(dots[i]);
// }
// slider(current);

slider(current);


let timer;

function startSlide(){
  timer = setInterval(function(){
    slider((current + 1) % 3); //다시 1로 돌아가도록
  }, 7000);
}
startSlide();


//Scroll fadeIn Code
//true, false -> 스크롤 내렸을 때 false 로 바뀌게 하는 법

let result = 

function midFadein() {
  const midTxt = document.querySelector('.mid-txt');
  const midCon = document.querySelector('.mid-con');
  const midScroll = window.pageYOffset; //스크롤값 알려줌
  //console.log(midScroll);
  if (midScroll >= 400) {
    midTxt.classList.add('fade-in'); 
  } else {
    return false;
  }
}
midFadein();
