<?php
require_once('lib/bootstrap.php');
require_once('lib/functions.php');
//check if user wants to Login
if (isset($_REQUEST['action']) && $_REQUEST['action']=="login")
{
  if (check_login($_REQUEST['user'],$_REQUEST['psw']))
  {
  $_SESSION['uid']=1;
  header('location: index_protect.php');
  exit();
  }else {
  //credenziali sbagliate
  $msg="incorrect user/password";
  //possible implements user not found
  }
}




if (isset($msg)) echo $msg . "<br />";
?>

<!-- Display link to login-->

<form action="?action=login" method="POST">
  User: <input type="text" name="user" placeholder="user/email"><br />
  Password: <input type="password" name="psw" placeholder="password">
  <input type="submit" value="submit">
