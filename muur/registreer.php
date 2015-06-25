<html>

<head>
<title> Index </title>
<link rel="stylesheet" type="text/css" href="images_style/style.css">
</head>



<body>

  <div id="container">
    <?php include "menu.php"; ?>


<?php
  // is er een formulier ingestuurd?
  // controleer of alle velden goed zijn ingevuld
  // geef zo nodig een foutbericht
  // als er iets is foutgegaan, zet dan wel even de ingevulde waarden terug in het formulier

  if ( isset ($_POST['submit']))
  {
    // er is iets opgestuurd.
    $username = mysql_real_escape_string($_POST['username']);
    $email = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['password']);
    $password2 = mysql_real_escape_string($_POST['password2']);
    $passwordmd5 = md5($password);
    $error = false;

    if ( empty($username) )
    {
      echo "<span style='color:red;'>Fout: geen gebruikersnaam ingevuld!</span><br>";
      $error = true;
    }
    if ( empty($email) )
    {
      echo "<span style='color:red;'>Fout: geen e-mail adres ingevuld!</span><br>";
      $error = true;
    }
    if ( empty($password) )
    {
      echo "<span style='color:red;'>Fout: geen wachtwoord ingevuld!</span><br>";
      $error = true;
    }
    if ( empty($password2) )
    {
      echo "<span style='color:red;'>Fout: geen herhaald wachtwoord ingevuld!</span><br>";
      $error = true;
    }
    if ( $password != $password2 )
    {
      echo "<span style='color:red;'>Fout: wachtwoorden zijn niet gelijk!</span><br>";
      $error = true;
    }

    // er is niks fout gegaan, dus bewaar de nieuwe user in de database.
    if ( $error == false )
    {
      // create mysql connection or show error
      $link = mysql_connect('localhost', 'root', 'usbw');
      if (!$link) {
          die('<br>Could not connect: ' . mysql_error());
      }

      // connect to database
      mysql_select_db('loginsysteem', $link);

      // voer de query uit of toon een foutbericht
      $query = "INSERT INTO users (username, userpassword) VALUES ('$username', '$password') ";
      $result = mysql_query($query, $link);
      if (!$result) {
          die('<br>Invalid query: [' . $query . '] error: ' . mysql_error());
      }

      // close link
      mysql_close($link);

      // decide what to do
      if ( $result == true )
      {
        echo 'alert("user saved.")';
      }
      else
      {
        echo 'alert("something went wrong; user not saved.")';
      }
    }
  }


  ?>
<div id="login">
  <form method="POST" >
    <p>Gebruikersnaam:</p>
    <center><input type="text" autofocus="autofocus" name="username" value="<?php echo (isset($username)?$username:""); ?>"></center>
    <p>E-mail adres:</p>
    <center><input type="text" name="email" value="<?php echo (isset($email)?$email:""); ?>"></center>
    <p>Wachtwoord:</p>
    <center><input type="password" name="password" value=""></center>
    <p>Herhaal het wachtwoord:</p>
    <center><input type="password" name="password2" value=""></center>

    <br><br>
    <center><input type="submit" name="submit" value="Verzend" class="mybutton"></center>
  </form>
  </div>



</div>

</body>
</html>