<?php
class Conectar{
  public static function connection(){
    $connection = mysql_connect("mysql.hostinger.es", "u136999244_sound","patatafrita");
    mysql_select_db("u136999244_sound");
    return $connection;
  }
}
 ?>
