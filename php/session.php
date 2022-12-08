<?php

  //세션은 쿠키와 비슷하나 정보를 사용자 컴퓨터가 아닌 서버에 저장한다
  //웹브라우저 설정 시 쿠키를 차단하면 쿠키는 무용지물이 된다
  //따라서 로그인 정보와 같은 민감한 정보를 저장할 때는 세션으로 저장하는 것이 일반적이다
  //세션을 저장하려면 먼저 session_start() 함수를 작성해야 한다

  session_start();
  $_SESSION['userid'] = 'marshall';

  if(isset($_SESSION['userid'])){
    $userid = $_SESSION['userid'];
  } else {
    echo "세션 없음";
  }

  // echo $userid;

?>

<p><?=$userid?>님 안녕하세요</p>

<button onclick='goLogout()'>go to logout</button>
<script>
  function goLogout(){
    location.href='logout.php';
  }
</script>