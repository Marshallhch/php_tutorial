<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
  <style>
    *{margin:0; padding:0; box-sizing:border-box;}
    .wrapper{width:100%; height:auto; max-width:1200px; margin:auto;}

    .detail-box{display:flex;}
    .detail-box > div{display:flex; align-items:center; justify-content:center; flex-direction:column; padding:3rem;}
    .detail-box > div.right{align-items:flex-start; row-gap:1rem;}
  </style>
</head>
<body>

  <?php
    // 주소의 get 변수값 저장
    $pro_idx = $_GET['pro_idx'];
    // echo $pro_idx;
    // 데이터베이스 접속코드 연결
    include_once $_SERVER['DOCUMENT_ROOT'].'/php_lecture/connect/dbconn.php';

    // sql 쿼리문 작성
    $sql = "SELECT * FROM spl_products WHERE pro_idx = $pro_idx";

    // 쿼리를 데이터베이스로 전달
    $res = mysqli_query($db_conn, $sql);
    $row = mysqli_fetch_array($res);
    // echo $row;
    // var_dump($row);

    // 각각 배열로 추출된 데이터를 변수에 저장
    $detail_title = $row['pro_name'];
    $detail_desc = $row['pro_desc'];
    $detail_pri = $row['pro_pri'];
    $detail_reg = $row['pro_reg'];
    $detail_img = $row['pro_img'];

    echo $detail_title, $detail_desc, $detail_pri, $detail_reg, $detail_img;
  ?>

  <div class="wrapper">
    <div class="detail-box">
      <div class="left">
        <img src="/php_lecture<?=$detail_img?>" alt="">
      </div>
      <div class="right">
        <h2><?=$detail_title?></h2>
        <p><?=$detail_desc?></p>
        <em>&#8361; <?=$detail_pri?></em>
        <strong><?=$detail_reg?></strong>
        <a href="/php_lecture/products.php">Home</a>
      </div>
    </div>
  </div>
  <script>
    fetch('https://jsonplaceholder.typicode.com/todos/1')
    .then(response => response.json())
    .then(json => console.log(json))
  </script>
</body>
</html>