<?php
  $renew_m_id = $_POST['renew_join_id'];

  //중복회원 걸러주는 코드
  include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
  $id_check = "SELECT * FROM renew_mem WHERE RENEW_mem_id='{$renew_m_id}'";
  $check_result = mysqli_query($dbConn, $id_check);
  $check_result_row = mysqli_num_rows($check_result);

  if($check_result_row > 0){
    echo "
      <script>
        alert('이미 가입한 회원입니다.');
        location.href='/renewal/pages/login_form.php';
      </script>
    ";
  } else {

    $renew_m_pass = $_POST['renew_join_pass'];
    $renew_m_name = $_POST['renew_join_name'];
    $renew_m_email = $_POST['renew_join_email'];
    $renew_m_reg = date("Y-m-d H:i:s");

    $sql = "INSERT INTO renew_mem(
      RENEW_mem_id,
      RENEW_mem_pass,
      RENEW_mem_name,
      RENEW_mem_email,
      RENEW_mem_reg
    ) VALUE (
      '{$renew_m_id}',
      '{$renew_m_pass}',
      '{$renew_m_name}',
      '{$renew_m_email}',
      '{$renew_m_reg}'
    )";

    mysqli_query($dbConn, $sql);

    echo "
      <script>
        alert('회원가입이 완료되었습니다.');
        location.href='/renewal/index.php';
      </script>
    ";
  }
?>