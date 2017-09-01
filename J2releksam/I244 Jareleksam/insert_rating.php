<?php
if(isset($_POST['submit_rating']))
{
 
 function connect_db(){
	global $connection;
	$host="localhost";
	$user="test";
	$pass="t3st3r123";
	$databasename="test";
	$connection = mysqli_connect($host, $user, $pass, $databasename) or die("ei saa ühendust mootoriga- ".mysqli_error());
	mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));

  
  $php_rating=$_POST['phprating'];
  $asp_rating=$_POST['asprating'];
  $jsp_rating=$_POST['jsprating'];
  $insert=mysqli_query("insert into jlatte_rating values('','$php_rating','$asp_rating','jsp_rating')");
}
}
?>