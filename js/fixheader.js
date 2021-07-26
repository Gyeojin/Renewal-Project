function fixNav() {
  const nav = document.querySelector('.header');
  const nav1 = window.pageYOffset; //스크롤값 알려줌
  //console.log(nav1);

  if (nav1 > 0) {
    nav.classList.add('fixed-nav'); 
  } else if(window.scrollY == 0) {
    nav.classList.remove('fixed-nav'); 
  }
}
window.addEventListener('scroll', fixNav);