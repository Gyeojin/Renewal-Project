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
    </section>
    <div class="center">
      <section class="detail-box-top">
        <div class="product-image">
          <img src="/renewal/img/product_01.jpg" alt="">
        </div>
        <div class="product-txt">
          <h2>[칼리타] FP 102 필터 브라운</h2>
          <h4>2~4인용 100매</h4>
          <div class="line"></div>
          <h3 class="price">4,900원</h3>
          <div class="choice-box">
            <span class="icon"></span>
            <p>수량을 선택해주세요.</p>
            <div class="checkbox">
              <span class="checkbox">[칼리타] FP 102 필터 브라운</span>
              <span class="quantity">
                <form>
                  <input type="text" value="1" name="quantity"></input>
                  <span class="quantity-btns">
                    <a href="#"><img src="/renewal/img/btn_count_up.gif" alt="수량증가"></a>
                    <a href="#"><img src="/renewal/img/btn_count_down.gif" alt="수량감소"></a>
                  </span>
                  <span>9,800원</span>
                </form>
              </span>
            </div>
            <div class="total-price">
              <span><strong>총 상품금액</strong>(수량)</span>
              <span class="total-price-detail">
                <strong>9,800원</strong>
                <span class="amount">(2개)</span>
              </span>
            </div>
            <div class="total-btns">
              <button type="button">바로 구매하기</button>
              <button type="button">장바구니</button>
              <button type="button">관심상품</button>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
