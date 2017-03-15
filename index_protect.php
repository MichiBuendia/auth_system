<?php
require_once ("lib/bootstrap.php");
require_once ("lib/auth.php");
require_once ("view/header.php");
 ?>

<DOCTYPE!>
<html>
<head>
  <title>index_protected</title>
</head>
<body>
  <h1>Benvenuto nella home page, caro utente :<?php echo $_SESSION['uid'] ?> nome utente</h1>
</body>
</html>
