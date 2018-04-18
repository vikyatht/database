<?php
session_start();
 include 'connect.php';
 $myusername = $_POST['username'];
 $mypassword = $_POST['password'];
 $query = "select password from login where section="."\"$_SESSION['sec']\"";
 $result = mysqli_query($dbh,$query)
		or die ('Error executing the query'.mysqli_error($dbh));
 $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 if($row['password'] == $mypassword)
 {
	header('Location:vote.html');
 }
 else
 {
	header('Location:login1.html?err=1');
 }
?> 
