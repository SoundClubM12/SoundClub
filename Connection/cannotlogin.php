<?php

$error = false;

if(isset($_REQUEST['login'])){

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  if(trim($username)==""){
    $error = true;
    $loginstat = true;
    $erroraccount = "&#x26A0; Set your username";

  }

  if(trim($password)==""){
    $error = true;
    $loginstat = true;
    $erroraccount = "&#x26A0; Set your password";
  }

  if(trim($password)=="" && trim($username)==""){
    $loginstat = true;
    $erroraccount = "&#x26A0; Set your username and password";
  }

}

 ?>
