<?php
class Conectar{
  public static function connection(){
    $connection = mysql_connect("localhost", "root","");
    mysql_select_db("SoundClub");
    return $connection;
  }
}
 ?>
