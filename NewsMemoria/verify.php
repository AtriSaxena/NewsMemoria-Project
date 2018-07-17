<?php
$email=$_GET["email"];
$hash=$_GET["hash"];

include("db.php");
$sql="select username from user where email='".$email."'AND BINARY hash='".$hash."'";
//$sql="update user set status='1' where email='".$email."'AND hash='".$hash."'";
 
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_NUM);
if(!$row[0])
{

echo "<br><br><h2 style='font-family:Gill Sans'><center>Unable to process the Request!<br>Something Went Wrong...";
echo "<br>Redirecting to HomePage.";
echo "<br><img src='images/process.gif' alt='process'>";
echo "</center>";
header('Location:index.php');

}
else
{
$sql="update user set status='1' where email='".$email."'AND hash='".$hash."'";
$result=mysqli_query($conn,$sql);
echo "<br><br><h2 style='font-family:Gill Sans'><center>You E-mail ".$email." Verified Successfully.";
echo "<br>You will be Redirected to Your Profile.Please wait...";
echo "<br><img src='images/process.gif' alt='process'>";
echo "</center>";
echo "<form id='myform' action='profile.php' method='post'> <input type='hidden' name='username' value='".$row[0]."'/></form>";
echo "<script>document.getElementById('myform').submit();</script>";

}


?>