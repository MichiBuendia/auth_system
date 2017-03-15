<?php

function check_login($user,$psw)
{
global $db;
  //verifico utente e password

$stmt = $db->prepare("SELECT * from 'users' WHERE 'username' LIKE :user AND password LIKE PASSWORD(:psw)
AND active = 1");
$stmt->bindParam(':user',$user);
$stmt->bindParam(':psw',$psw);
$stmt->execute();
$stmt->debugDumpParams();

print_r ($stmt);

if ($stmt->RowCount()) {
  return true;
}else{
  return false;
}
}
