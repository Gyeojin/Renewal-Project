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

      <section class="join_insert">
        <div class="center max-width">
          <div class="mid-txt">
            <p class="eng">회원가입</p>
          </div>
          <form action="/renewal/php/join.php" method="post" class="renew_join_insertform" name="join_insertform">
            <div>
              <b>아이디</b>
              <div class="input_box">
                <input type="text" name="renew_join_id" class="join_id">
              </div>
              <button type="button" class="join_id_check">중복체크</button>
            </div>
            <div>
              <b>비밀번호</b>
              <div class="input_box">
                <input type="password" name="renew_join_pass">
              </div>
            </div>
            <div>
              <b>이름</b>
              <div class="input_box">
                <input type="text" name="renew_join_name">
              </div>
            </div>
            <div>
              <b>이메일</b>
              <div class="input_box">
                <input type="text" name="renew_join_email">
              </div>
            </div>
            <button type="button" class="join_button">회원가입</button>
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

  <script src="/renewal/js/fixheader.js"></script>
  <!--Main jQuery File Load-->
  <script src="/renewal/js/jq.index.js"></script>
  
  <script>
    //ajex(비동기)로 데이터베이스에서 id 중복체크하는 로직
    $(function(){
      $(".join_id_check").click(function(){
        const id_value = $(".join_id").val();
        $.ajax({
          url : '/renewal/php/join_id_check.php',
          type : 'get',
          data : {id_value : id_value},
          success : function(data){
            alert(data);
          }
        });
      });
    });
  </script>

  <script>
    const submitBtn = document.querySelector(".join_button");
    const idCheck = document.querySelector(".join_id_check");
    let checkId = false;

    idCheck.addEventListener('click',function(){
      checkId = true;
    });

    submitBtn.addEventListener('click',function(){
      if(!document.join_insertform.renew_join_id.value){
        alert('아이디를 입력해 주세요.');
        return;
      }
      if(!document.join_insertform.renew_join_pass.value){
        alert('비밀번호를 입력해 주세요.');
        return;
      }
      if(!document.join_insertform.renew_join_name.value){
        alert('이름을 입력해 주세요.');
        return;
      }
      if(!document.join_insertform.renew_join_email.value){
        alert('이메일을 입력해 주세요.');
        return;
      }
      if(!checkId == true){
        alert('아이디 중복체크를 눌러주세요.');
        return;
      }
      document.join_insertform.submit();
    });

  </script>

</body>