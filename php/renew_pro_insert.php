<?php
  $renew_pro_cate = $_POST['renew_pro_select'];
  $renew_pro_tit = addslashes($_POST['renew_pro_name']);
  $renew_pro_desc = addslashes($_POST['renew_pro_desc']);
  $renew_pro_pri = $_POST['renew_pro_pri'];
  $renew_pro_reg = date("Y-m-d");

  $renew_proimg_name = $_FILES['renew_pro_img']['name'];
  $renew_proimg_tmp = $_FILES['renew_pro_img']['tmp_name']; //컴퓨터의 임시이름
  $renew_proimg_error = $_FILES['renew_pro_img']['error'];
  
  $renew_upload_dir=$_SERVER["DOCUMENT_ROOT"]."/renewal/img/product_image/"; //폴더 디렉토리 설정

  
  //사진 폴더에 업로드하는 로직
  if($renew_proimg_name && !$renew_proimg_error){
    $img_upload = $renew_upload_dir.$renew_proimg_name; //폴더에 파일을 저장하는 변수
    if(!move_uploaded_file($renew_proimg_tmp,$img_upload)){
      die("파일을 지정한 디렉토리에 업로드를 실패했습니다.");
    }
  } else {
    $renew_proimg_name ="";
  }

  //echo $renew_proimg_name;

  include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
  $sql = "INSERT INTO renew_pro (
    renew_cate,
    renew_name,
    renew_desc,
    renew_pri,
    renew_img,
    renew_reg
  ) VALUES (
    '{$renew_pro_cate}',
    '{$renew_pro_tit}',
    '{$renew_pro_desc}',
    '{$renew_pro_pri}',
    '{$renew_proimg_name}',
    '{$renew_pro_reg}'
  )";
  
  mysqli_query($dbConn, $sql);

  echo "
    <script>
      alert('상품 입력이 완료 되었습니다.');
      location.href='/renewal/pages/renew_pro_insert_form.php';
    </script>
  ";
  
?>