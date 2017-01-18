<?php
class Conectar{
  public static function connection(){
    $connection = mysql_connect("mysql.hostinger.es", "u590849717_sound","patatafrita");
    mysql_select_db("u590849717_sound");
    return $connection;
  }
}
 ?>
