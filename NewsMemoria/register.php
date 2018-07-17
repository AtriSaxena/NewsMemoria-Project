<?php 



$username=trim($_POST['username']);
$pass=trim($_POST['pass']);
$email=trim($_POST['mail']);
$hash=md5(rand(0,1000));

include("db.php");

$sql="insert into user (username,email,pass,hash)
VALUES(
'".mysqli_real_escape_string($conn,$username)."',
'".mysqli_real_escape_string($conn,$email)."',
'".mysqli_real_escape_string($conn,$pass)."',
'".mysqli_real_escape_string($conn,$hash)."')";
$result=mysqli_query($conn,$sql);

if(!$result)
{echo "<h3 style='color:white'>Username or E-mail already exist.Try Again!</h3>";

die();

}
else 





$subject=trim("Email Verification-NewsMemoria");


$headers="From: donotreply@fmt.com"."\r\n".
"CC: somebodyelse@example.com";
$headers.="MIME-Version: 1.0\r\n";
$headers.="Content-Type: text/html; charset=ISO-8859-1\r\n";

$message='<html><head>
<title>Email Verification</title>
</head>
<body>';

$message.='<h1 style="color:blue">Hi '.$username.'! Welcome to NewsMemoria.</h1><br><h3>You are just one step away from us.</h3><br><h3>Please verify your Email and connect to NewsMemoria.</h3>';
$message.='<p><a href="http:\\localhost\verify.php?email='.$email.'&hash='.$hash.'">Click to activate your account</a>';
$message.="</body></html>";


mail($email,$subject,$message,$headers);



echo "success";



?>