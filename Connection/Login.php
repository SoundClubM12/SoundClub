<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
  <?php require_once 'Class/loginstatus.php';


    //Identifica si todos los campos se han rellenado
    require_once("Class/cannotlogin.php");
    //Crea un nuevo objeto para iniciar sesión
    $login = new login();
    if(isset($_REQUEST['login']) && cannotlogin::checkfields()==""){
      $login->nueva_sesion();
    }
   ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>SoundClub</title>
        <link rel="stylesheet" type="text/css" href="\SoundClub\bootstrap-3.3.7-dist\css\bootstrap.css" />
    </head>
    <body id="register">
      <div id="contenedor">
        <div id="cabecera">
            <a href class="izquierda">Soundclub</a>
            <a href="Login.php" class="login">Login</a>
            <a href class="derecha">Terms</a>
            <a href class="derecha">Contact</a>
            <a href="../Register/index.php" class="derecha">Sign Up</a>
        </div>
        <h1>SoundClub</h1>
        <h2>Listen, Create, Share</h2>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div id="registro">
              <a>Or register now for free!</a>
              <a href="../Register/index.php" id="login">Register</a>
              <br /><br /><hr />
              <form method="post" enctype="multipart/form-data" action="Login.php">
                <input type="text" name="username" placeholder="Username" class="field" value="<?php echo $_REQUEST['username']; ?>"/><br />
                <input type="password" name="password" placeholder="Password" class="field"/><br />
                <input type="submit" name="login" value="Login" class="register"/>
              </form>
            </div>
            <div id="<?php if(cannotlogin::checkfields()!=""){echo 'loginstat';}?>">
              <a><?php echo cannotlogin::checkfields();?></a>
            </div>
            <div id="<?php if($erroraccount=$_GET["erroraccount"]!=""){echo 'loginstat';}?>">
              <a><?php
              $erroraccount=$_GET["erroraccount"];
              echo $erroraccount; ?></a>
            </div>
            <div id="<?php if($alertregister=$_GET["alertregister"]!=""){echo 'loginstat';}?>">
              <a><?php
              $alertregister=$_GET["alertregister"];
              echo $alertregister; ?></a>
            </div>
          </div>
        </div>
        <div id="pie">
          Copyright (c) 2016 Copyright Holder All Rights Reserved.
        </div>
      </div>
    </body>
</html>
