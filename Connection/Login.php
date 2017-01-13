<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SoundClub</title>
        <link rel="stylesheet" type="text/css" href="\SoundClub\bootstrap-3.3.7-dist\css\bootstrap.css" />
    </head>
    <body>
      <?php
        $erroraccount = "";
        $loginstat = false;
        include("cannotlogin.php");
        if(isset($_REQUEST['login'])&& $error==false){
          include("loginstatus.php");
        }
       ?>
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
                <input type="text" name="username" placeholder="Username" class="field"/><br />
                <input type="password" name="password" placeholder="Password" class="field"/><br />
                <input type="submit" name="login" value="Login" class="register"/>
              </form>
            </div>
            <div id="<?php if($loginstat==true){echo 'loginstat';}?>">
              <a><?php echo $erroraccount;?></a>
            </div>
          </div>
        </div>
        <div id="pie">
          Copyright (c) 2016 Copyright Holder All Rights Reserved.
        </div>
      </div>
    </body>
</html>
