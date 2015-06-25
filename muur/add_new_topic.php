<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="usbw"; // Mysql password 
$db_name="loginsysteem"; // Database name 
$tbl_name="fquestions"; // Table name 
 
// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
 
// get data that sent from form 
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];
 
$datetime=date_default_timezone_set('Europe/Amsterdam');//or change to whatever timezone you want

date_default_timezone_set('Africa/Lagos');//or change to whatever timezone you want
 
$sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result=mysql_query($sql);
 
if($result){
echo "Successful<BR>";
echo "<a href=main_forum.php>View your topic</a>";
}
else {
echo "ERROR";
}
mysql_close();
?>