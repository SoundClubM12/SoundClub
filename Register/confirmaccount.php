<?php

require_once("Class/connection.php");

$idv = $_GET['idv'];
$searchidv = "update users set validated=1 WHERE idvalidated='$idv'";
$query = mysql_query($searchidv, Conectar::connection());
$alertregister = "Your account has been validated";
header("Location:../Connection/Login.php?alertregister=".urlencode($alertregister));

 ?>
