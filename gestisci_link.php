<?php

//conferma utente che ricevendo un token fa un update nel db
/*
http://localhost/gestisi_link.php?token=sauvasfvòafhlòvash&action=activationID
http://localhost/gestisi_link.php?token=sauvasfvòafhlòvash&action=LOSTpASSWORD

*/
$token = $_GET['token'];

switch($_GET['action']){

  case "activationID":

  if (update_user_by_token($token) )
  header=('location: login.php');
  exit;
  }else{
  echo "invalid token";
  }
  break;

  case "lostPassword":
  //cambia psw: ricevendo un token deve consentire all'utente di cambiare psw
  break;

  default:

    echo "invalid action";

}





 ?>
