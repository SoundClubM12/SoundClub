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
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css" />
    </head>
    <body>
      <div id="contenedor">
        <div id="cabecera">
            <a href class="izquierda">Soundclub</a>
            <a href class="login">Login</a>
            <a href class="derecha">Terms</a>
            <a href class="derecha">Contact</a>
            <a href class="derecha">Sign Up</a>
        </div>
        <h1>SoundClub</h1>
        <h2>Listen, Create, Share</h2>
        <div id="registro">
          <a>Already have an account?</a>
          <a href id="login">Login</a>
          <br /><br /><hr />
          <form method="post" enctype="multipart/form-data" action="index.php">
            <input type="text" class="field"/><br />
            <input type="text" class="field"/><br />
            <input type="password" class="field"/><br />
            <input type="password" class="field"/><br />
          </form>
        </div>
        <?php
        ?>
      </div>
    </body>
</html>
