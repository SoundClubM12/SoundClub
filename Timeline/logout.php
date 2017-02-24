<?php
  session_start();
  session_destroy();
  header("Location:../Connection/Login.php");
?>
