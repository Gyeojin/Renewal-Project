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

      <section class="renew_mem_insert">
        <div class="center max-width">
          <div class="renew_mem_tit">
            <p class="eng">로그인</p>
          </div>
          <form action="/renewal/php/login.php" method="post" class="renew_mem_insertform">
            <div class="id_pass">
              <div>
                <h2>아이디</h2><input type="text" name="renew_mem_id" placeholder="아이디">
              </div>
              <div>
                <h2>비밀번호</h2><input type="password" name="renew_mem_pass" placeholder="비밀번호">
              </div>
            </div>
            <button type="button">로그인</button>
          </form>
          <div class="search_idpw">
            <a href="#">아이디 찾기</a>
            <a href="#">비밀번호 찾기</a>
          </div>
          <div class="join">
            <p class="join_tit">아직 바라보다의 회원이 아니신가요?</p>
            <p class="join_sub">회원가입하고 다양한 혜택과 서비스를 이용해 보세요!</p>
            <a href="#">회원가입</a>
          </div>
        </div>
      </section>
    </section>

    <?php
      include $_SERVER['DOCUMENT_ROOT']."/renewal/include/footer.php";
    ?>
      
  </div>    
  <!-- jQuery Framework Load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="/renewal/js/fixheader.js"></script>
  <!--Main jQuery File Load-->
  <script src="/renewal/js/jq.index.js"></script>

</body>