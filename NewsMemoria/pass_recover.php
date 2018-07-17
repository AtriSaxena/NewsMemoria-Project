<?php


include("db.php");


$mail=trim($_POST['mail']);


$sql="select username, pass from user where email='".$mail."'";
 
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_NUM);

if(!$row[0])
{
echo "<h5 style='color:red'> E-Mail doesn't exist.Try Again!</h5>";
 /*$result = array(
        'result' => 0,
            );
*/
}
else
{
	$username=$row[0];
	$password=$row[1];
	$subject=trim("Email Verification-NewsMemoria");


$headers="From: donotreply@fmt.com"."\r\n".
"CC: somebodyelse@example.com";
$headers.="MIME-Version: 1.0\r\n";
$headers.="Content-Type: text/html; charset=ISO-8859-1\r\n";

$message='<html><head>
<title>Password Recovery</title>
</head>
<body>';

$message.='<h1 style="color:blue">Hi '.$username.'! Welcome to NewsMemoria.</h1><br><h3>Username:'.$username.'</h3><br><h3>Password:'.$password.'</h3>';
$message.="</body></html>";

mail($mail,$subject,$message,$headers);



echo "success";



	
	
	
		
}



?>