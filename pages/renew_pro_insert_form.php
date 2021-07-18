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
    <section class="pro-insert">

      <?php
        include $_SERVER['DOCUMENT_ROOT']."/renewal/include/header.php";
      ?>

      <section class="pro_insert">
        <div class="center">
          <form action="/renewal/php/renew_pro_insert.php" method="post" class="renew_pro_insertform" enctype="multipart/form-data">
            <p>
              <select name="renew_pro_select" id="">
                <option value="coffee">coffee</option>
                <option value="acc">acc</option>
              </select>
            </p>
            <p>상품 이름 : <input type="text" name="renew_pro_name"></p>
            <p>상품 요약 : <textarea name="renew_pro_desc"></textarea></p>
            <p>상품 가격 : <input type="text" name="renew_pro_pri"></p>
            <p>상품 이미지 : <input type="file" name="renew_pro_img"></p>
            <button type="submit">상품 입력</button>
          </form>
        </div>
      </section>
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