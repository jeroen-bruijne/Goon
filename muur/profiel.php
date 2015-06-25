<?php

    session_start();
  if (!isset($_SESSION['loggedinuser']))
  {
    header("Refresh: 0; url='main_forum.php'");
  }

?>
<html>

<head>
<title> Profiel </title>
<link rel="stylesheet" type="text/css" href="images_style/style.css">
</head>



<body>
<div id="container">
<?php include "menu1.php"; ?>
<center><h1> Profiel </h1></center>

<div id="content">

<?php

  // haal opgestuurde user/pass op
  if ( isset($_POST['username']) && isset($_POST['password']))
  {
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);
  }
  else
  {
    $username = '';
    $password = '';
  }

  // create mysql connection or show error
  $link = mysql_connect('localhost', 'root', 'usbw');
  if (!$link) {
      die('<br>Could not connect: ' . mysql_error());
  }

  // connect to database
  mysql_select_db('loginsysteem', $link);

  // voer de query uit of toon een foutbericht
  $query = "SELECT * FROM users WHERE username = '$username' AND userpassword = '$password' ";
  $result = mysql_query($query, $link);
  if (!$result) {
      die('<br>Invalid query: ' . mysql_error());
  }

  // print het aantal rijen dat is gevonden
  $num_rows = mysql_num_rows($result);

  // decide what to do
  if ( $num_rows == 1 )
  {
    // onthou de ingelogde user
    // ga naar de volgende pagina

    // get row
    $row = mysql_fetch_assoc($result);
    $_SESSION['userid'] = $row['userid'];
    $_SESSION['username'] = $row['username'];
    $userid = $row['userid'];
    $_SESSION['loggedinuser'] = $row['userid'];
   }
  else
  {
    // toon foutmelding dat user/password niet voorkomt
    // stuur terug naar inlogscherm
  }
  echo "<div id='profielcont'>";
  echo "<div id='profiel'> Welkom, " . $_SESSION['username'] . "</div";
  


  
  echo "</div>";
?>
  

</div>
</div>
</body>
</html>