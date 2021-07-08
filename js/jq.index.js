$(function(){

  $(".menu_icon").click(function(){
    $(".mobile_nav").animate({left:0},300);
  });

  $(".header .menu_icon").on("mouseenter",function(){
    $(".header .mobile_nav").css({display:"block"});
    // $(".topnav li a").css({color:"#000"});
    // $(".hidden_sub").stop().animate({height:"480px"},300);
  });

});