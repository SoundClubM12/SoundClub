<?php
class cannotregister{
  public static function checkfields(){
    $errorfield = array("","","","");
    $totalerrorfield = "";
    $counterrorfield = 0;

    if(isset($_REQUEST['register'])){

      $username = $_REQUEST['username'];
      $email = $_REQUEST['email'];
      $password = $_REQUEST['password'];
      $cpassword = $_REQUEST['cpassword'];

        if(trim($username)==""){
          $errorfield[0] = "|username| ";
          $counterrorfield++;
        }

        if(trim($email)==""){
          $errorfield[1] = "|email| ";
          $counterrorfield++;
        }

        if(trim($password)==""){
          $errorfield[2] = "|password| ";
          $counterrorfield++;
        }

        if(trim($password)==""){
          $errorfield[3] = "|pass confirm| ";
          $counterrorfield++;
        }

        if($counterrorfield > 0){
            $totalerrorfield = "&#x26A0; You must set your ".$errorfield[0]."".$errorfield[1]."".$errorfield[2]."".$errorfield[3];
        }
      }
      return $totalerrorfield;
    }
  }

 ?>
