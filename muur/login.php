 <html>

<head>
<title> login </title>
<link rel="stylesheet" type="text/css" href="images_style/style.css">
</head>



<body>
<div id="container">
<?php include "menu.php"; ?>
<div id="login">



  <form action="profiel.php" method="POST">
    <p>Gebruikersnaam:</p>
     <center><input type="text" name="username" autofocus="autofocus">  	</center>
<br>
   <p>Wachtwoord:</p>
     <center><input type="password" name="password">  	</center>
    <br>
    <center><input type="submit" value="Submit" class="mybutton">  	</center>
</center>
  </form>
</div>




</div>

</body>
</html>