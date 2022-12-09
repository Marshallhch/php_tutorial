<?php

session_start();
// $userid = $_SESSION['userid'] = 'marshall';
unset($_SESSION['user']);

echo "
  <script>
    location.href='/php_lecture/index.php';
  </script>
"

?>