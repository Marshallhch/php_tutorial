<?php

  $host = 'localhost'; // 서버 호스트 예)www.abc.com
  $db_id = 'root'; // 데이터베이스 가입 시 등록된 아이디
  $pass = ''; // 데이터베이스 가입 시 등록된 비밀번호
  $db_name = 'soaply'; // 생성한 데이터베이스 이름

  $db_conn = mysqli_connect($host, $db_id, $pass, $db_name); // mysql 데이터 접속 : 작성 순서를 지켜야 한다

?>