<?php
session_start();

//check if user wants to Login
if (isset($_REQUEST['action']) && $_REQUEST=="login")
{
  $_SESSION['uid']=1;
  header('location: index_protect.php');
}

?>

<!-- Display link to login-->

<a href="?action=login"> Link to system </a>
