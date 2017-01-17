<?php

require_once("connection.php");

class Register{
  public function nuevo_usuario(){
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $cpassword = $_REQUEST['cpassword'];

    $searchuser = "select * from users where username ='$username' or email='$email'";
    $query = mysql_query($searchuser, Conectar::connection());

    if($password==$cpassword){
      if(mysql_num_rows($query)==1){
        $errorregister = "&#x26A0; This username or email already exists";
        header("Location:index.php?errorregister=".urlencode($errorregister));
      }
      else{
        $insertar = "insert into users (username, email, password, typeuser) values ('$username', '$email', '$password', 'user')";
        mysql_query($insertar, Conectar::connection());
      }
    }
    else{
      $errorregister = "&#x26A0; Passwords do not match";
      header("Location:index.php?errorregister=".urlencode($errorregister));
    }
  }
}
 ?>
 Warning: mysql_num_rows() expects parameter 1 to be resource, boolean given in C:\xampp\htdocs\SoundClub\Register\Class\registerstatus.php on line 14
