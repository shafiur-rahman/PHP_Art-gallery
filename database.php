<?php
$con = mysql_connect("localhost","root","");
// Check connection
if ($con)
  {
  mysql_select_db("contact",$con);
  }
?>