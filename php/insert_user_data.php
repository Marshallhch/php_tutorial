<?php

  //CRUD : Create, Read, Update, Delete

  // $_POST 변수에서 받는 키워드는 input 태그의 name값이다

  $name = $_POST['name'];
  $id = $_POST['id'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];

  // echo $name.':'.$id.':'.$email.':'.$pwd;

  // include_once : 다른 파일을 현재 파일로 연결시킬때 사용하는 키워드
  include_once $_SERVER['DOCUMENT_ROOT'].'/php_lecture/connect/dbconn.php';
  // echo var_dump($db_conn);

  // ------- sql 문법 위추로 파악 --------
  // 1. 데이터 삽입 : INSERT INTO [tablename] (column1, column2...) VALUES (column value1, column value2...);
  // - 첫번째 괄호 안과 두번째 괄호 안의 개수와 순서가 모두 맞아야 한다
  // $sql = "INSERT INTO spl_user (
  //   user_name,
  //   user_id,
  //   user_email,
  //   user_pass
  // ) VALUES (
  //   '$name',
  //   '$id',
  //   '$email',
  //   '$pwd'
  // )";

  // 2. 데이터 조회 : SELECT field name(* : 전체조회 시) FROM table name;
  // - 첫번째 괄호 안과 두번째 괄호 안의 개수와 순서가 모두 맞아야 한다
  // 데이터 조회 시 특정 필드만 조회하는 경우 필드명을, 전체 조회할 경우 *를 사용한다.
  // $sql = "SELECT * FROM spl_user";

  // 3. 데이터 조회 필터링 : SELECT [field name] FROM [table name] WHERE [field name] = [feild value];
  // $sql = "SELECT * FROM spl_user WHERE user_idx = 2";

  // 4. 데이터 정렬 : SELECT [field name] FROM [table name] ORDER BY [field name] DESC(역순) or ASC(정순)
  // $sql = "SELECT * FROM spl_user ORDER BY user_idx DESC";

  // 5. 데이터 갯수 지정 조회 : SELECT [field name] FROM [table name] LIMIT [number][start index], [number][length]]
  // $sql = "SELECT * FROM spl_user LIMIT 1, 3";
  // $sql = "SELECT * FROM spl_user WHERE user_name='aa' ORDER BY user_idx DESC";

  // 6. 데이터 값 변경(update) : UPDATE [table name] SET [field name] = [field value] WHERE [field name] = [field value]
  // WHERE 필터링 조건 없이 업데이트만 한다면 업데이트 대상 필드의 모든 값이 지정 값으로 변경된다. 따라서 어떠한 데이터를 업데이트 하는지에 대한 필터링이 반드시 있어야 한다.
  // $sql = "UPDATE spl_user SET user_name = '한창호' WHERE user_idx = 1";

  // 7. 데이터 삭제(delete) : DELETE FROM [table name] WHERE [field name] = [field value];
  $sql = "DELETE FROM spl_user WHERE user_idx = 1 and user_name = '한창호'";

  // mysqli_query() : 데이터베이스테 작업을 요청하는 함수 : 첫번째 파라미터에는 접속정보, 두번째 파라미터에는 요청 작업을 전달
  $result = mysqli_query($db_conn, $sql);

  // echo var_dump($result);
  // echo $result;

  // echo "
  //   <script>
  //     location.href='/php_lecture/insert_user.php';
  //   </script>
  // ";
  // $row = mysqli_fetch_array($result);
  // echo $row;
  // var_dump($row);

  while($row = mysqli_fetch_array($result)){
    $user_idx = $row['user_idx'];
    $user_id = $row['user_id'];
  
?>

    <p>회원번호 : <?=$user_idx?></p>
    <p>아이디 : <?=$user_id?></p>

<?php
  }
?>