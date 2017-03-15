<?php

if (!isset($_SESSION['uid']) || $_SESSION['uid']===0)
{
  header('location: login.php');
  exit();
}
