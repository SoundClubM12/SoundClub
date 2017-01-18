<?php

class Validation{
  public static function gen_idvalidated_code($length=10){
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
  }
  public function send_idvalidated_code($to, $code){
    mail ($to, "SoundClub account activation", $code );
  }
}

?>
