<?php

  $id_value = $_GET['id_value'];
  //echo $id_value;

  if(!$id_value){
    echo "아이디를 입력해 주세요.";
  } else {
    include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";//디비 접속
    $sql_id_check = "SELECT * FROM renew_mem WHERE 	RENEW_mem_id='{$id_value}'";
    $idcheck_result = mysqli_query($dbConn, $sql_id_check);
    $idcheck_record = mysqli_num_rows($idcheck_result); //아이디가 없으면 0, 아이디가 있으면 1로 값 반환

    //echo $idcheck_record;

    if($idcheck_record == 1){
      echo $id_value."은(는) 존재하는 아이디 입니다. 다른 아이디를 사용해 주세요.";
    } else {
      echo $id_value."은(는) 사용할 수 있는 아이디 입니다.";
    }
  }

?>