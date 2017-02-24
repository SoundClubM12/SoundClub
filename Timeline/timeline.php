<?php
  session_start();
  if(!isset($_SESSION["username"]) || empty($_SESSION["username"])){
    header("Location:../Connection/Login.php");
  }
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>SoundClub</title>
    <link rel="stylesheet" type="text/css" href="\SoundClub\bootstrap-3.3.7-dist\css\bootstrap.css" />
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#notificationLink").click(function(){
          $("#notificationContainer").fadeToggle(300);
          $("#notification_count").fadeOut("slow");
          return false;
        });
      //Document Click hiding the popup
      $(document).click(function(){
        $("#notificationContainer").hide();
      });
      //Popup on click
      //$("#notificationContainer").click(function(){
      //  return false;
      //});
    });
    </script>
  </head>
  <body id="timeline">
    <!--Cabecera-->
      <div id="cabecera">
        <div class="container">
            <div class="col-lg-2">
              <a href class="headericonsleft"><img src="../bootstrap-3.3.7-dist/css/Icons/Home.png"/></a>
              <a href class="headericonsleft"><img href src="../bootstrap-3.3.7-dist/css/Icons/Message.png"/></a>
              <a href class="headericonsleft"><img href src="../bootstrap-3.3.7-dist/css/Icons/Notification.png"/></a>
            </div>
            <div class="col-lg-8">
              <p class="headertitle">Soundclub</p>
            </div>

            <div class="col-lg-2">
              <form id="headerform">
                  <ul id="nav">
                    <li id="notification_li">
                      <a href="#" id="notificationLink"><img src="../bootstrap-3.3.7-dist/css/Icons/User.png"/></a>
                      <div id="notificationContainer">
                      <a class="notificationsBody"><img src="../bootstrap-3.3.7-dist/css/Icons/User.png"/>Profile</a>
                      <a class="notificationsBody"><img src="../bootstrap-3.3.7-dist/css/Icons/Settings.png"/>Settings</a>
                      <a class="notificationsBody" href="../Timeline/logout.php"><img src="../bootstrap-3.3.7-dist/css/Icons/Logout.png"/>Logout</a>
                      </div>
                    </li>
                  </ul>
                <input class="headersearch" type="search" />
              </form>
            </div>
        </div>
      </div>

      <!--Body-->
      <div class="containertimeline">
        <!--Body Left-->
        <div class="col-lg-1"></div>
        <div id="contenttimeline" class="col-lg-10">
            <div class="col-lg-3">
              <div class="profileimagetimeline">
                <img src="../bootstrap-3.3.7-dist/css/Images/vinil.jpg" />
              </div>
              <div class="profileusernametimeline">
                <?php require_once("../Connection/Class/loginstatus.php");
                  echo $_SESSION['username'];
                 ?>
              </div>
              <div class="profiletimeline">
                <p>Followers: 2k</p>
                <p>Reputation: Gold</p>
                Fav. Instrument: Electric Guitar
              </div>
              <div class="trendingtimeline">
                Most viewed
              </div>
              <div class="trendingposttimeline">
                <div class="trendingusertimeline">
                  <p>@Avenged Sevenfold #NewSong2017</p>
                  <p>3M views</p>
                </div>
                <div class="trendingusertimeline">
                  <p>@Avenged Sevenfold #NewSong2017</p>
                  <p>3M views</p>
                </div>
                <div class="trendingusertimeline">
                  <p>@Avenged Sevenfold #NewSong2017</p>
                  <p>3M views</p>
                </div>
                <div class="trendingusertimeline">
                  <p>@Avenged Sevenfold #NewSong2017</p>
                  <p>3M views</p>
                </div>
                <div class="trendingusertimeline">
                  <p>@Avenged Sevenfold #NewSong2017</p>
                  <p>3M views</p>
                </div>
              </div>
            </div>

            <!--Parte central timeline-->
            <div class="col-lg-6-timeline">
              <center>
              <!--Cuadro de publicaciones-->
              <div id="totalpost">
              <div class="posttimelinesoundclub">
                <img src="../bootstrap-3.3.7-dist/css/Icons/Soundclub.png"/>
              </div>
              <form class="posttimeline">
                <textarea class="writetimeline" cols="50" rows="4" placeholder="Write something..."></textarea><br />
                <a href class="posticonsleft"><img src="../bootstrap-3.3.7-dist/css/Icons/Camera.png"/></a>
                <a href class="posticonsleft"><img href src="../bootstrap-3.3.7-dist/css/Icons/Link.png"/></a>
                <a href class="posticonsleft"><img href src="../bootstrap-3.3.7-dist/css/Icons/Location.png"/></a>
                <input type="submit" class="submittimeline" value="Send..." />
              </form>
                </div>
              <div id="timelinenews">
                <!--Publicaciones-->
                <div id="newposttimeline">
                  <div class="photonewposttimeline">
                    <img src="../bootstrap-3.3.7-dist/css/Images/vinil.jpg"/>
                  </div>
                  <p class="usertitleposttimeline"> @Danybo95 Nightmare Cover </p>
                  <p class="timelocationposttimeline"> 8 mins ago - Tarragona </p>
                  <div class="finalposttimeline">
                    Acabo de grabar una cover de Nightmare - Avenged Sevenfold. Editaré el video y en unas horas estará disponible.
                  </div>
                  <a href class="finalposticonsleft"><img src="../bootstrap-3.3.7-dist/css/Icons/Soundclub.png"/></a>
                  <a href class="finalposticonsleft"><img href src="../bootstrap-3.3.7-dist/css/Icons/Comment.png"/></a>
                  <a href class="finalposticonsleft"><img href src="../bootstrap-3.3.7-dist/css/Icons/Share.png"/></a>
                  <a href class="finalposticonsright"><img href src="../bootstrap-3.3.7-dist/css/Icons/Report.png"/></a>
                </div>
                <!--Publicaciones-->
                <div id="newposttimeline">
                  <div class="photonewposttimeline">
                    <img src="../bootstrap-3.3.7-dist/css/Images/vinil.jpg"/>
                  </div>
                  <p class="usertitleposttimeline"> @Danybo95 Nightmare Cover </p>
                  <p class="timelocationposttimeline"> 8 mins ago - Tarragona </p>
                  <div class="finalposttimeline">
                    Acabo de grabar una cover de Nightmare - Avenged Sevenfold. Editaré el video y en unas horas estará disponible.
                  </div>
                  <a href class="finalposticonsleft"><img src="../bootstrap-3.3.7-dist/css/Icons/Soundclub.png"/></a>
                  <a href class="finalposticonsleft"><img href src="../bootstrap-3.3.7-dist/css/Icons/Comment.png"/></a>
                  <a href class="finalposticonsleft"><img href src="../bootstrap-3.3.7-dist/css/Icons/Share.png"/></a>
                  <a href class="finalposticonsright"><img href src="../bootstrap-3.3.7-dist/css/Icons/Report.png"/></a>
                </div>
                <div id="newposttimeline">
                  <div class="photonewposttimeline">
                    <img src="../bootstrap-3.3.7-dist/css/Images/vinil.jpg"/>
                  </div>
                  <p class="usertitleposttimeline"> @Danybo95 Nightmare Cover </p>
                  <p class="timelocationposttimeline"> 8 mins ago - Tarragona </p>
                  <div class="finalposttimeline">
                    Acabo de grabar una cover de Nightmare - Avenged Sevenfold. Editaré el video y en unas horas estará disponible.
                  </div>
                  <a href class="finalposticonsleft"><img src="../bootstrap-3.3.7-dist/css/Icons/Soundclub.png"/></a>
                  <a href class="finalposticonsleft"><img href src="../bootstrap-3.3.7-dist/css/Icons/Comment.png"/></a>
                  <a href class="finalposticonsleft"><img href src="../bootstrap-3.3.7-dist/css/Icons/Share.png"/></a>
                  <a href class="finalposticonsright"><img href src="../bootstrap-3.3.7-dist/css/Icons/Report.png"/></a>
                </div>
                <div id="newposttimeline">
                  <div class="photonewposttimeline">
                    <img src="../bootstrap-3.3.7-dist/css/Images/vinil.jpg"/>
                  </div>
                  <p class="usertitleposttimeline"> @Danybo95 Nightmare Cover </p>
                  <p class="timelocationposttimeline"> 8 mins ago - Tarragona </p>
                  <div class="finalposttimeline">
                    Acabo de grabar una cover de Nightmare - Avenged Sevenfold. Editaré el video y en unas horas estará disponible.
                  </div>
                  <a href class="finalposticonsleft"><img src="../bootstrap-3.3.7-dist/css/Icons/Soundclub.png"/></a>
                  <a href class="finalposticonsleft"><img href src="../bootstrap-3.3.7-dist/css/Icons/Comment.png"/></a>
                  <a href class="finalposticonsleft"><img href src="../bootstrap-3.3.7-dist/css/Icons/Share.png"/></a>
                  <a href class="finalposticonsright"><img href src="../bootstrap-3.3.7-dist/css/Icons/Report.png"/></a>
                </div>
                <div id="newposttimeline">
                  <div class="photonewposttimeline">
                    <img src="../bootstrap-3.3.7-dist/css/Images/vinil.jpg"/>
                  </div>
                  <p class="usertitleposttimeline"> @Danybo95 Nightmare Cover </p>
                  <p class="timelocationposttimeline"> 8 mins ago - Tarragona </p>
                  <div class="finalposttimeline">
                    Acabo de grabar una cover de Nightmare - Avenged Sevenfold. Editaré el video y en unas horas estará disponible.
                  </div>
                  <a href class="finalposticonsleft"><img src="../bootstrap-3.3.7-dist/css/Icons/Soundclub.png"/></a>
                  <a href class="finalposticonsleft"><img href src="../bootstrap-3.3.7-dist/css/Icons/Comment.png"/></a>
                  <a href class="finalposticonsleft"><img href src="../bootstrap-3.3.7-dist/css/Icons/Share.png"/></a>
                  <a href class="finalposticonsright"><img href src="../bootstrap-3.3.7-dist/css/Icons/Report.png"/></a>
                </div>
              </div>
            </center>
            </div>

            <!--Parte derecha del timeline-->
            <div class="col-lg-3">
              <div class="Titlereputationtimeline">
                Friends who rise on reputation
              </div>
              <div class="Reputationtimeline">
                <div class="Repusertimeline">
                  <p>@AvengedSevenfold</p>
                  <p>Band - Platinum</p>
                </div>
                <div class="Repusertimeline">
                  <p>@Er3ku</p>
                  <p>Kazoo - Diamond</p>
                </div>
                <div class="Repusertimeline">
                  <p>@Ivange</p>
                  <p>Vocalista - Platinum</p>
                </div>
              </div>

              <div class="Titlerecommendedtimeline">
                Recommended
              </div>
              <div class="Recommendedtimeline">
                <div class="Recousertimeline">
                  <img href src="../bootstrap-3.3.7-dist/css/Images/vinil.jpg"/>
                  <p>@AvengedSevenfold</p>
                  <button >Follow</button>
                </div>
                <div class="Recousertimeline">
                  <img href src="../bootstrap-3.3.7-dist/css/Images/vinil.jpg"/>
                  <p>@AvengedSevenfold</p>
                  <button >Follow</button>
                </div>
                <div class="Recousertimeline">
                  <img href src="../bootstrap-3.3.7-dist/css/Images/vinil.jpg"/>
                  <p>@AvengedSevenfold</p>
                  <button >Follow</button>
                </div>
              </div>
              <div class="footertermstimeline">
                SoundClub Copyright © 2017 Copyright Holder All Rights Reserved.
                Contact - News - FAQ - Privacity - Cookies - About Us
              </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
      </div>
  </body>
</html>
