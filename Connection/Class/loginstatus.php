<?php
  session_start();
  require_once("connection.php");

class login{
    public function nueva_sesion(){
      $username = $_REQUEST['username'];
      $password = $_REQUEST['password'];

      $searchuser = "select password,validated from users where username='".$username."';";
      $validateuser = mysql_query($searchuser, Conectar::connection());
      $hash = mysql_fetch_row($validateuser);

      if(password_verify($password, $hash[0])){

          if($hash[1]==1){
            $_SESSION['username'] = $username;
            header("Location:../Timeline/timeline.php");
          }
          else{
            $erroraccount = "&#x26A0; Account not activated";
            header("Location:Login.php?erroraccount=".urlencode($erroraccount));
          }
      }

      else{
        $erroraccount = "&#x26A0; Incorrect username or password";
        header("Location:Login.php?erroraccount=".urlencode($erroraccount));
      }
    }
  }
?>
