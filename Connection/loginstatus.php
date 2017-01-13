<?php
  error_reporting(0);

  include("connection.php");
  $searchuser = ("Select username, password from users")
  or die("No se ha podido encontrar la tabla en la BBDD.");
  $validateuser = mysql_query($searchuser, $connection);
  //Número de usuarios en la base de datos
  $numusers = mysql_num_rows($validateuser);

  //Recorremos un bucle con el tamaño de $numusers
  for($x=0; $x<$numusers; $x++){
    //Establecemos en la var $finduser el resultado del comando $validatelogin
    $finduser = mysql_fetch_array($validateuser);
    //Si coincide la búsqueda con el usuario y la contraseña accedemos a la web
    if($username==$finduser['username'] && $password==$finduser['password']){
      header("location:../Register/index.php");
    }
    //Establecemos el mensaje de error y activamos el error de logueo
    else{
      $erroraccount = "&#x26A0; Incorrect username or password, try again.";
      $loginstat = true;
    }
  }
?>
