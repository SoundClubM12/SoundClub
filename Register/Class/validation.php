<?php

require_once("connection.php");

class Validation{
  public static function gen_idvalidated_code($length=10){
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
  }
  public function send_idvalidated_code($to, $idv){
    mail ($to, "SoundClub account activation", "Pulsa en el siguiente enlace para activar tu cuenta: http://soundclubm12.esy.es/SoundClub/Register/confirmaccount.php?idv=$idv");
  }
  public function check_idvalidated_code($idv){
    $searchidv = "insert into users (validated) values (1) where idvalidated='$idv'";
    $query = mysql_query($searchidv, Conectar::connection());
    header("Location:../Connection/Login.php");
  }
}

?>
