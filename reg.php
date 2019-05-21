<?php
  require('db.php');
  require('database.php');
  session_start();
  if(isset($_SESSION['username']))
  {
  $username = $_SESSION['username'];
?>




<?php
session_start();
include "database.php";

if(isset($_POST['reg']))
{
	session_start();
	$username = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string($_POST['email']);
	$subject = mysql_real_escape_string($_POST['subject']);
	$comment = mysql_real_escape_string($_POST['comment']);

	$sql = "insert into users(username,email,subject,comment) values ('$username','$email','$subject','$comment')";
	mysql_query($sql);
	
}

header('Location:home.php');



?>

<?php
}
else
{
  header("Location: index.php");
}?>