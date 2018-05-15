<?php
error_reporting(0);
session_start();

$conn = mysql_connect("localhost","root","") or die(mysql_error());
$dbconn = mysql_select_db("tax_db",$conn) or die(mysql_error());

?>