<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>I'm watching you</title>

  <!-- Icon Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/renewal/lib/ionicons/css/ionicons.min.css">


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
      <?php

        include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
        $sql = "SELECT * FROM renew_pro ORDER BY renew_idx DESC";

        $detail_result = mysqli_query($dbConn, $sql);

        while($detail_row = mysqli_fetch_array($detail_result)){
          $detai_row_idx = $detail_row['renew_idx'];
          $detail_row_tit = $detail_row['renew_name'];
          $detail_row_desc = $detail_row['renew_desc'];
          $detail_row_pri = $detail_row['renew_pri'];
          $detail_row_img = $detail_row['renew_img'];
        }
      ?>
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
                  <a href="/renewal/pages/detail_page.php?renew_idx=<?=$detai_row_idx?>"><img src="/renewal/img/<?=$detail_row_img?>" alt="best-item"></a>
                  <span><p class="eng">BEST1</p></span>
                </div>
                <h2 class="eng"><?=$detail_row_tit?></h2>
                <h4><?=$detail_row_desc?></h4>
                <h3><?=$detail_row_pri?>원</h3>
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
    
    <?php
      include $_SERVER['DOCUMENT_ROOT']."/renewal/include/footer.php";
    ?>
      
  
  </div>

  <!-- jQuery Framework Load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="/renewal/js/index.js"></script>
  <!--Main jQuery File Load-->
  <script src="/renewal/js/jq.index.js"></script>
</body>
</html>