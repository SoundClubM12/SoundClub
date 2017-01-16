<?php
  session_start();
  require_once("connection.php");

class login{
    public function nueva_sesion(){
      $username = $_REQUEST['username'];
      $password = $_REQUEST['password'];

      $searchuser = "select * from users where username='".$username."' and password='".$password."';";
      $validateuser = mysql_query($searchuser, Conectar::connection());

      if($reg = mysql_fetch_array($validateuser)){
        $_SESSION['username'] = $reg['username'];
        header("Location:logueado.php");
      }
      else{
        $erroraccount = "&#x26A0; Incorrect username or password";
        header("Location:Login.php?erroraccount=".urlencode($erroraccount));
      }
    }
  }
?>
