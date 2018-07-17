<?php 

include("db.php");
session_start();

$username=trim($_POST['username']);
$pass=trim($_POST['pass']);



$sql="select username, pass from user where username='".$username."' and pass='".$pass."'";
 
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_NUM);

if(!$row[0])
{
echo "<h5 style='color:red'> Username or password is incorrect.Try Again!</h5>";
 /*$result = array(
        'result' => 0,
            );
*/
}
else
{
	$_SESSION['login_status']=1;
	$_SESSION['username']=$username;
	 echo "correct";
	 /*$result = array(
        'result' => 1,
            );
		*/	
//header("Location:profile.php");	
	//$_SESSION['ad']=$a;	
}



?>