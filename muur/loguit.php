<html>

<head>
<title> Uitgelogd </title>
<link rel="stylesheet" type="text/css" href="images_style/style.css">
</head>



<body>

	<div id="container">
    <?php include "menu.php"; ?>
    <div id="rules">

<center><img src="images_style/totziens.gif" alt="Mountain View"></center>

<?php
  session_start();

  session_destroy();

  echo "<center><h1>Je bent uitgelogd & tot ziens!</h1></center>";


?>
</div>


</div>

</body>
</html>