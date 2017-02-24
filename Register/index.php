<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php require_once 'Class/registerstatus.php';

require_once("Class/cannotregister.php");
$register = new Register();

if(isset($_REQUEST['register']) && cannotregister::checkfields()==""){
  $register->nuevo_usuario();
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SoundClub</title>
        <link rel="stylesheet" type="text/css" href="\SoundClub\bootstrap-3.3.7-dist\css\bootstrap.css"/>
    </head>
    <body id="register">
      <div id="contenedor">
        <div id="cabecera">
            <a href class="izquierda">Soundclub</a>
            <a href="../Connection/Login.php" class="login">Login</a>
            <a href class="derecha">Terms</a>
            <a href class="derecha">Contact</a>
            <a href="index.php" class="derecha">Sign Up</a>
        </div>
        <h1>SoundClub</h1>
        <h2>Listen, Create, Share</h2>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div id="registro">
              <a>Already have an account?</a>
              <a href="../Connection/Login.php" id="login">Login</a>
              <br /><br /><hr />
              <form method="post" enctype="multipart/form-data" action="index.php">
                <input type="text" name="username" placeholder="Username" class="field" value="<?php echo $_REQUEST['username']; ?>"/><br />
                <input type="email" name="email" placeholder="Email" class="field" value="<?php echo $_REQUEST['email']; ?>"/><br />
                <input type="password" name="password" placeholder="Password" class="field"/><br />
                <input type="password" name="cpassword" placeholder="Confirm Password" class="field"/><br />
                <input type="submit" name="register" value="Register" class="register"/>
              </form>
            </div>
            <div id="<?php if(cannotregister::checkfields()!=""){echo 'loginstat';}?>">
              <a><?php echo cannotregister::checkfields(); ?></a>
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
