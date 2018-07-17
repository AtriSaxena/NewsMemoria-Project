
<?php
$host1="localhost";
$user1="root";
$pass1="";
$dbname="newsmemoria";
$conn=mysqli_connect($host1,$user1,$pass1,$dbname);
if(!$conn)
{
	echo "connection failed";
}
else
{
	mysqli_select_db($conn,$dbname);
}
?>

