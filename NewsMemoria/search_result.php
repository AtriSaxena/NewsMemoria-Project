<?php


$keyw=$_GET["keyword"];
include("db.php");

$sql="select title,image,date from rss_data where MATCH(title) AGAINST ('".$keyw."')";
 
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_NUM);



?>

<!DOCTYPE HTML>
<html>
<head>
<title>NewsMemoria</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/jquery1.min.js"></script>

<!-- start menu -->


<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--start slider -->
    <link rel="stylesheet" href="css/fwslider.css" media="all">
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <script src="js/fwslider.js"></script>
<!--end slider -->
<script src="js/jquery.easydropdown.js"></script>



 <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>


</head>
<body>
     <div class="header-top">
	   <div class="wrap"> 
			  <div class="header-top-left">
			  	   <div class="box">
   				      <select tabindex="4" class="dropdown">
							<option value="" class="label" value="">Language :</option>
							<option value="1">English</option>
							<option value="2">French</option>
							<option value="3">German</option>
					  </select>
   				    </div>
   				    
   				    <div class="clear"></div>
   			 </div>
			 <div class="cssmenu">
				<ul>
	<li class="active"><a href="#" class="account1" ><?php if(isset($_SESSION["name"])) echo "Welcome ".$name; ?></a></li> |
					
					<li><a href="logout.php" ><?php if(isset($_SESSION["name"])) {echo "LogOut"; }?></a></li> |
					
				</ul>
			</div>
                 
			<div class="clear"></div>
 		</div>
	</div>
            
     <div class="header-bottom">
	    <div class="wrap">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt=""/></a>
				</div>
				<div class="menu">
	            <ul class="megamenu skyblue">
			<li class="active grid"><a href="index.php">Home</a></li>
			<li><a class="color4" href="#">City</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Main Cities</h4>
								<ul>
									<li><a href="womens.html">Mumbai</a></li>
									<li><a href="womens.html">Delhi</a></li>
									<li><a href="womens.html">Banglore</a></li>
									<li><a href="womens.html">Hyderabad</a></li>
                                    									<li><a href="womens.html">Chennai</a></li>
                                                                        									<li><a href="womens.html">Ahemdabad</a></li>
                                                                                                            									<li><a href="womens.html">Kolkata</a></li>
                           									<li><a href="womens.html">Pune</a></li>
                                     
                                     <li><a href="womens.html">Goa</a></li>


								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
				<h4>More Cities</h4>												<ul>
									<li><a href="womens.html">Patna</a></li>
									<li><a href="womens.html">Lucknow</a></li>
									<li><a href="womens.html">Pune</a></li>
									<li><a href="womens.html">Jaipur</a></li>
                                    <li><a href="womens.html">Allahabad</a></li>
                                    <li><a href="womens.html">Surat</a></li>
								</ul>	
							</div>							
						</div>
					
					  </div>
					</div>
				</li>				
				<li><a class="color5" href="#">More Stories</a>
				<div class="megapanel">
					<div class="col1">
							<div class="h_nav">
								<h4></h4>
								<ul>
									<li><a href="mens.html">Top Stories</a></li>
									<li><a href="mens.html">India</a></li>
									<li><a href="mens.html">World </a></li>
									<li><a href="mens.html">Business</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4></h4>
								<ul>
									<li><a href="mens.html">Sports</a></li>
									<li><a href="mens.html">Tech</a></li>
									<li><a href="mens.html">Science</a></li>
									<li><a href="mens.html">Health</a></li>
								</ul>	
							</div>							
						</div>
						
					</div>
				</li>
				<li><a class="color6" href="about_us.php">About US</a></li>
				<li><a class="color7" href="contact.php">Contact Us</a></li>
			</ul>
			</div>
		</div>
	   <div class="header-bottom-right">
         <div class="search">	  
				<input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="Subscribe" id="submit" name="submit">
				<div id="response"> </div>
		 </div>
	  <div class="tag-list">
	    <ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c1" href="#"> </a>
				<ul class="sub-icon1 list">
					<li><h3>BookMarks</h3><a href=""></a></li>
					<li><p>Can Bookmark pages <a href=""></a></p></li>
				</ul>
			</li>
		</ul>
	  </div>
    </div>
     <div class="clear"></div>
     </div>
	</div>       
           

<div class="main">
	<div class="wrap">
		<div class="section group">
		  <div class="cont span_2_of_3">
        <a href="all_politics.php" ><h2 class="head">Search Result</h2></a>
			<div class="top-box">

<?php
$i=0;
while($row=mysqli_fetch_array($result))
 {

?>



<div class="col_1_of_3 span_1_of_3"> 
			   <a href="single.html">
				<div class="inner_content clearfix">
					<div class="product_image">
						<img src=<?php echo $row[1]; ?> style="height:170px;width:260px"alt=""/>
					</div>
                    	
                    <div class="price">
					   <div class="cart-left">
							<p class="title"><?php echo $row[0]; ?></p>
							<div class="price1">
							  <span class="actual"><?php echo $row[2]; ?></span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                 </a>
				</div>		

<?php
$i++;
if($i==3)
{
	echo "<div class='clear'></div>
			</div>	
			<div class='top-box'>";	
 $i=0;
}
 }
?>