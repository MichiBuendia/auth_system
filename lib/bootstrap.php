<?php
require "config.php";

try
{
  $db= new PDO($database,$userdb,$pass);
}catch (PDOException $e) {
  echo "Database connect failed!";
  die();
}

session_start();
