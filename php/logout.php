<?php

session_start();
// $userid = $_SESSION['userid'] = 'marshall';
unset($_SESSION['userid']);

echo "
  <script>
    location.href='session.php';
  </script>
"

?>

<p>넘어온 세션 : <?=$userid?> 입니다</p>