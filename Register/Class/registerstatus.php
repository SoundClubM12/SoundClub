<?php

require_once("connection.php");
require_once("validation.php");

class Register{
  public function nuevo_usuario(){
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $cpassword = $_REQUEST['cpassword'];
    $passwordhash = password_hash($password, PASSWORD_DEFAULT);
    $searchuser = "select * from users where username ='$username' or email='$email'";
    $query = mysql_query($searchuser, Conectar::connection());

    if($password==$cpassword){
      if(mysql_num_rows($query)==1){
        $alertregister = "&#x26A0; This username or email already exists";
        header("Location:index.php?alertregister=".urlencode($alertregister));
      }
      else{
        $idv = Validation::gen_idvalidated_code();
        $sendemail = Validation::send_idvalidated_code($email, $idv);
        $alertregister = "&#x26A0; We have sent you an email to validate your account";
        $insertar = "insert into users (username, email, password, typeuser, idvalidated) values ('$username', '$email', '$passwordhash', 'user', '$idv')";
        mysql_query($insertar, Conectar::connection());
        header("Location:../Connection/Login.php?alertregister=".urlencode($alertregister));
      }
    }
    else{
      $alertregister = "&#x26A0; Passwords do not match";
      header("Location:index.php?alertregister=".urlencode($alertregister));
    }
  }
}
 ?>
