<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>I'm watching you</title>

  <!-- Icon Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="lib/ionicons/css/ionicons.min.css">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700&family=Noto+Serif+KR:wght@200;300;400;500;700;900&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <!-- Style Frameworks -->

  <!-- Custom Styles -->
  <link rel="stylesheet" href="/renewal/css/reset.css">
  <link rel="stylesheet" href="/renewal/css/style.css">
  <link rel="stylesheet" href="/renewal/css/media/media.css">
</head>
<body>
  <div class="wrapper">
    <section>
      <?php
        include $_SERVER['DOCUMENT_ROOT']."/renewal/include/header.php";
      ?>
      <div class="banner">
        <div class="slide">
          <div class="slide-img">
            <a href="#">
              <img src="/renewal/img/banner1.png" alt="slide-banner">
              <div class="bannertxt1">
                <h2 class="eng">바라보다 스페셜티 커피와 함께<br>좀 더 여유롭고 설레는<br>하루를 바라보게 되기를</h2>
                <h4 class="eng">Baraboda Coffee and Roaster</h4>
              </div>
            </a>
            <a href="#">
              <img src="/renewal/img/banner2.png" alt="slide-banner">
              <div class="bannertxt2">
                <h2 class="eng">바라보다 스페셜티 커피와 함께<br>좀 더 여유롭고 설레는<br>하루를 바라보게 되기를</h2>
                <h4 class="eng">Baraboda Coffee and Roaster</h4>
              </div>
            </a>
            <a href="#">
              <img src="/renewal/img/banner3.png" alt="slide-banner">
              <div class="bannertxt3">
                <h2 class="eng">바라보다 스페셜티 커피와 함께<br>좀 더 여유롭고 설레는<br>하루를 바라보게 되기를</h2>
                <h4 class="eng">Baraboda Coffee and Roaster</h4>
              </div>
            </a>
          </div>
          <div class="dot">
            <li value="0" class="dot-click"></li>
            <li value="1"></li>
            <li value="2"></li>
          </div>
        </div>
      </div>
      <!-- <div class="four-layout">
        <div>4</div>
        <div>5</div>
        <div>6</div>
        <div>7</div>
      </div> -->
    </section>
    <section class="mid">
      <div class="center">
        <div class="mid-txt">
          <p class="eng">Baraboda Brand Story</p>
          <p class="eng">사람과 기억<br>그리고 커피, 모두가<br>추억이 되는 곳</p>
          <p>
            커피와 일상이 만나는 방법에 대해 오랫동안 고민해 온 우리는<br>2016년 어느 날, 나무가 있고 바람이 기분좋게 부는 곳에서 시작되었습니다.<br>그리고 더 가까이에서 바라보기 위해 바라보다 스페셜티를 온라인에서 선보입니다.<br>처음 시작했던 설레는 그 마음을 담아 오늘도 당신을 만나러 갑니다.
          </p>
          <p><a href="#" class="eng">view more &#62;</a></p>
        </div>
        <div class="mid-con">
          <div class="each-mid">
            <a href="#" class="con1">
              <img src="/renewal/img/middle_img1.png" alt="midcontent">
              <div>
                <h2 class="eng">MEET BARABODA</h2>
                <h4>카페 바라보다의 위치를 확인하세요.</h4>
                <a href="#" class="eng">view more &#62;</a>
              </div>
            </a>
          </div>
          <div class="each-mid">
            <a href="#" class="con2">
              <img src="/renewal/img/middle_img2.png" alt="midcontent">
              <div>
                <h2 class="eng">BARABODA AT HOME</h2>
                <h4>바라보다의 스페셜티를 집에서 즐겨보세요.</h4>
                <a href="#" class="eng">view more &#62;</a>
              </div>
            </a>
          </div>
          <div class="each-mid">
            <a href="#" class="con3">
              <img src="/renewal/img/middle_img3.png" alt="midcontent">
              <div>
                <h2 class="eng">MORE SPECIAL</h2>
                <h4>스페셜 맞춤 로스팅을 해드립니다.</h4>
                <a href="#" class="eng">view more &#62;</a>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="best-item">
      <div class="center">
        <div class="best-txt">
          <p class="eng">Baraboda Specialty Coffee</p>
          <p class="eng">커피를 바라보다</p>
        </div>
        <div class="line"></div>
        <div class="best-con">
          <div class="best-btn eng">
            <span class="btns" onclick="currentSlide(1)">#스페셜티 베스트</span>
            <span class="btns" onclick="currentSlide(2)">#커피용품</span>
          </div>
          <div class="best-detailbox">
            <div class="best-detail">
              <div class="detail-con">
                <div class="detail-img">
                  <a href="#"><img src="/renewal/img/best-con1.jpg" alt="best-item"></a>
                  <span><p class="eng">BEST1</p></span>
                </div>
                <h2 class="eng">상품이름</h2>
                <h4>상품설명</h4>
                <h3>00,000원</h3>
              </div>
              <div class="detail-con">
                <div class="detail-img">
                  <a href="#"><img src="/renewal/img/best-con2.jpg" alt="best-item"></a>
                  <span><p class="eng">BEST2</p></span>
                </div>
                <h2 class="eng">상품이름</h2>
                <h4>상품설명</h4>
                <h3>00,000원</h3>
              </div>
              <div class="detail-con">
                <div class="detail-img">
                  <a href="#"><img src="/renewal/img/best-con3.jpg" alt="best-item"></a>
                  <span><p class="eng">BEST3</p></span>
                </div>
                <h2 class="eng">상품이름</h2>
                <h4>상품설명</h4>
                <h3>00,000원</h3>
              </div>
            </div>
            <!-- <div class="best-detail">
              <div class="detail-con">
                <div class="detail-img">
                  <a href="#"><img src="/renewal/img/best-con4.jpg" alt="best-item"></a>
                  <span><p class="eng">BEST1</p></span>
                </div>
                <h2 class="eng">상품이름</h2>
                <h4>상품설명</h4>
                <h3>00,000원</h3>
              </div>
              <div class="detail-con">
                <div class="detail-img">
                  <a href="#"><img src="/renewal/img/best-con5.jpg" alt="best-item"></a>
                  <span><p class="eng">BEST2</p></span>
                </div>
                <h2 class="eng">상품이름</h2>
                <h4>상품설명</h4>
                <h3>00,000원</h3>
              </div>
              <div class="detail-con">
                <div class="detail-img">
                  <a href="#"><img src="/renewal/img/best-con6.jpg" alt="best-item"></a>
                  <span><p class="eng">BEST3</p></span>
                </div>
                <h2 class="eng">상품이름</h2>
                <h4>상품설명</h4>
                <h3>00,000원</h3>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>
    <section class="magazine">
      <div class="center">
        <div class="magazine-txt">
          <p class="eng">Braboda Coffee Magazine</p>
          <p class="eng">바라보다 커피 매거진</p>
        </div>
        <div class="line"></div>
        <div class="magazine-con">
          <ul class="con-detail">
            <li class="con-detailbox">
              <a href="#"></a>
              <div class="con-detail-txt">
                <a href="#" class="eng">비와 커피 이야기</a>
                <a href="#" class="eng">view more &#62;</a>
              </div>
            </li>
            <li class="con-detailbox">
              <a href="#"></a>
              <div class="con-detail-txt">
                <a href="#" class="eng">비와 커피 이야기</a>
                <a href="#" class="eng">view more &#62;</a>
              </div>
            </li>
            <li class="con-detailbox">
              <a href="#"></a>
              <div class="con-detail-txt">
                <a href="#" class="eng">비와 커피 이야기</a>
                <a href="#" class="eng">view more &#62;</a>
              </div>
            </li>
            <li class="con-detailbox">
              <a href="#"></a>
              <div class="con-detail-txt">
                <a href="#" class="eng">비와 커피 이야기</a>
                <a href="#" class="eng">view more &#62;</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="video">
      <div class="center">
        <div class="video-txt">
          <p class="eng">Baraboda Coffee Review</p>
          <p class="eng">마주보다</p>
          <p class="eng">우리는 커피를 사랑하는 사람들과 함께 성장합니다.<br>바라보다와 함께한 당신의 이야기를 들려주세요.</p>
          <a href="#" class="eng">view more &#62;</a>
        </div>
        <div class="video-box">
          <div class="vbox-detail">
            <iframe src="https://www.youtube.com/embed/YaiaVsAUZ5M?controls=0&autoplay=1&loop=1&mute=1&playlist=YaiaVsAUZ5M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <section class="bankinfo">
        <div class="center">
          <div class="top">
            <ul class="footermenu">
              <li class="menulist eng">
                <a href="#">홈</a>
                <a href="#">회사소개</a>
                <a href="#">이용약관</a>
                <a href="#">개인정보 처리방침</a>
                <a href="#">이용안내</a>
              </li>
            </ul>
            <div class="phone">
              <h3 class="eng">문의 및 안내</h3>
              <h2 class="eng">031-000-0000</h2>
              <p>평일 10:00 ~ 16:00 / 점심 12:00 ~ 13:00<br>(토, 일, 공휴일 휴무)</p>
              <a href="#"><i class="ion-social-instagram"></i></a>
              <a href="#"><i class="ion-social-facebook"></i></a>
            </div>
            <div class="bank">
              <h3 class="eng">입금계좌정보</h3>
              <p>하나 102-910032-53404<br>국민 807501-04-253019<br>농협 355-0039-6724-13</p>
              <a>예금주 : 주식회사 미스터콩</a>
            </div>
          </div>
        </div>
      </section>
      <section class="corp-info">
        <div class="ft-center">
          <p>
            <span class="tit">상호명</span>
            <span class="subtxt">주식회사 미스터콩</span> 
          </p>
          <p>
            <span class="tit">대표자</span>
            <span class="subtxt">권영석</span>
          </p>
          <p>
            <span class="tit">사업자등록번호</span>
            <span class="subtxt">000-00-00000</span>
          </p>
          <p>
            <span class="tit">통신판매업신고번호</span>
            <span class="subtxt">제2018-진건퇴계원-0185호</span>
            <a href="#">[사업자정보확인]</a>
          </p>
          <p>
            <span class="tit">고객센터</span>
            <span class="subtxt">000-000-0000</span>
          </p>
          <p>
            <span class="tit">주소</span>
            <span class="subtxt">12139 경기도 남양주시 진건읍 진건우회로19번길 11 미스터콩</span>
          </p>
          <p>
            <span class="tit">개인정보보호책임자</span>
            <a href="#">고여진(koyeo5725@naver.com)</a>
          </p>
          <p>
            <span class="tit">
              ※ 바라보다에서 제공하는 모든 컨텐츠는 저작권법에 보호받는 저작물로서, 무단으로 복제, 배포하는 경우에는 저작권법에 의하여 처벌을 받을 수 있습니다.
            </span>
          </p>
          <p>
            <span class="tit">Copyright © 2020 바라보다. All rights reserved.</span>
          </p>
        </div>
      </section>
    </footer>
      
  
  </div>
  <script src="/renewal/js/index.js"></script>
</body>
</html>