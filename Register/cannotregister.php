<?php

$error = false;

if(isset($_REQUEST['register'])){

  $username = $_REQUEST['username'];
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];
  $cpassword = $_REQUEST['cpassword'];

  if(trim($username)==""){
    $error = true;
    $registerstat = true;
    $erroraccount = "&#x26A0; Set your username";

  }

  if(trim($email)==""){
    $error = true;
    $registerstat = true;
    $erroraccount = "&#x26A0; Set your email";
  }

  if(trim($password)==""){
    $error = true;
    $registerstat = true;
    $erroraccount = "&#x26A0; Set your password";
  }

  if(trim($password)==""){
    $error = true;
    $registerstat = true;
    $erroraccount = "&#x26A0; Confirm your password";
  }

  if(trim($password)=="" && trim($username)==""){
    $registernstat = true;
    $erroraccount = "&#x26A0; Set your username and password";
  }

}

 ?>
