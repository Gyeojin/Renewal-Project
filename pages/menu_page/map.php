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
  <div class="map-wrapper">
    <section class="detail-page">
      <?php
        include $_SERVER['DOCUMENT_ROOT']."/renewal/include/header.php";
      ?>
      <div class="map-center">
        <div class="mid-txt map-padding">
          <p class="eng">Baraboda Map</p>
          <p class="eng">오시는 길</p>
          <p>
          바라보다는 나무가 있고, 바람이 기분 좋게 부는 이 곳에 있어요.
          </p>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.3267843487215!2d127.29395881537845!3d37.52379337980585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357cb332a11e3c9b%3A0x83c763487046d484!2z7Lm07Y6YIOuwlOudvOuztOuLpA!5e0!3m2!1sko!2skr!4v1627286637042!5m2!1sko!2skr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </section>
  </div>

  <?php
    include $_SERVER['DOCUMENT_ROOT']."/renewal/include/footer.php";
  ?>

  <!-- jQuery Framework Load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="/renewal/js/fixheader.js"></script>
  <!--Main jQuery File Load-->
  <script src="/renewal/js/jq.index.js"></script>
</body>