<?php

require_once("connection.php");

$idv = $_GET['idv'];
$searchidv = "insert into users (validated) values (1) where idvalidated='$idv'";
$query = mysql_query($searchidv, Conectar::connection());
header("Location:../Connection/Login.php");

 ?>
