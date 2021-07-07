


//Scroll Menu Fixed Code

function fixNav() {
  const nav = document.querySelector('.header');
  const midTxt = document.querySelector('.mid-txt');
  const midCon = document.querySelector('.mid-con');
  const bestItem = document.querySelector('.best-item');
  const magaZine = document.querySelector('.magazine');
  const videoBox = document.querySelector('.video');
  const nav1 = window.pageYOffset; //스크롤값 알려줌
  //console.log(nav1);

  if (nav1 > 0) {
    nav.classList.add('fixed-nav'); 
  } else if(window.scrollY == 0) {
    nav.classList.remove('fixed-nav'); 
  }

  if (nav1 >= 200) {
    midTxt.classList.add('fade-in');
  } else {
    return;
  }
  
  if (nav1 >= 600){
    midCon.classList.add('fade-in');
  } else {
    return;
  }
  
  if (nav1 >= 1200){
    bestItem.classList.add('fade-in');
  } else {
    return;
  }
  
  if (nav1 >= 2200){
    magaZine.classList.add('fade-in');
  } else {
    return;
  }
  
  if (nav1 >= 2900){
    videoBox.classList.add('fade-in');
  } else {
    return;
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

slider(current);


let timer;

function startSlide(){
  timer = setInterval(function(){
    slider((current + 1) % 3); //다시 1로 돌아가도록
  }, 7000);
}
startSlide();

// false 전역설정
// 스크롤이벤트 false값 할당
// if조건 실행 시 스크롤이벤트를 true로 바꿔주고
// 이벤트가 true일 때만 이벤트 실행, 아니면 멈추는걸로

