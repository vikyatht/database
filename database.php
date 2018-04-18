<?php
$host="localhost";
$dbname="2015cse142";
$user="root";
$password="tiger";
$dbh= mysqli_connect($host,$user,$password,$dbname) or die("Error connecting to database".mysqli_connect($dbh));
$query="select * from vote";
$result= mysqli_query($dbh,$query) or die("Error querying the database");
echo '<form id="myform">';
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo '<input type="radio" name="candidate" id="name1" value="'.$row['cand_name'].'"/>'.$row['cand_name'].'<br/>';
}
echo '</form>';
?>
