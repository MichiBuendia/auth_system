<?php
require_once('lib/bootstrap.php');
unset($_SESSION['uid']);
header ('location: home.php');
exit();
 ?>
