<?php

//visualizza il tasto logout oppure il link per andare alla pagina login
if (isset($_SESSION['uid']) && $_SESSION['uid'])
{
  echo "<a href='logout.php'>Logout</a>";
}else{
  echo "<a href='login.php'>Login</a>";
}
 ?>
