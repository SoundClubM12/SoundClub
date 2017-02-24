<?php
class cannotlogin{
  public static function checkfields(){
    $errorfield = "";

    if(isset($_REQUEST['login'])){

      $username = $_REQUEST['username'];
      $password = $_REQUEST['password'];

      if(trim($username)==""){
        $errorfield = "&#x26A0; Set your username";
      }

      if(trim($password)==""){
        $errorfield = "&#x26A0; Set your password";
      }

      if(trim($password)=="" && trim($username)==""){
        $errorfield = "&#x26A0; Set your username and password";
      }

    }
    return $errorfield;
  }
}
 ?>
