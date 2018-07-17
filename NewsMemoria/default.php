
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




<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
jQuery(document).ready(function ($) {

    $('[data-popup-target]').click(function () {
        $('html').addClass('overlay');
        var activePopup = $(this).attr('data-popup-target');
        $(activePopup).addClass('visible');

    });

    $(document).keyup(function (e) {
        if (e.keyCode == 27 && $('html').hasClass('overlay')) {
            clearPopup();
        }
    });

    $('.popup-exit').click(function () {
        clearPopup();

    });

    $('.popup-overlay').click(function () {
        clearPopup();
    });

    function clearPopup() {
        $('.popup.visible').addClass('transitioning').removeClass('visible');
        $('html').removeClass('overlay');

        setTimeout(function () {
            $('.popup').removeClass('transitioning');
        }, 200);
    }

});
});//]]>  

</script>





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
					<li class="active"><a href="login.php">Account</a></li> |
					
					<li><button id="popup_window" data-popup-target="#example-popup">Log in</button></li> |
					<li><a href="register.php">Sign Up</a></li>
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
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           

           
            <div id="example-popup" class="popup">
    <div class="popup-body">	<span class="popup-exit"></span>

        
            	
         
         <div class="container">
  <div class="card"></div>
  
  <div class="card">
    <h1 class="title">Login</h1>
    <form>
      <div class="input-container">
        <input type="text" id="Username" required="required"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Go</span></button>
      </div>
      <div class="footer"><a href="#">Forgot your password?</a></div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form>
      <div class="input-container">
        <input type="text" id="Username" required="required"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
       <div class="input-container">
        <input type="email" id="E-mail" required="required"/>
        <label for="E-mail">E-Mail</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Repeat Password" required="required"/>
        <label for="Repeat Password">Repeat Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Next</span></button>
      </div>
    </form>
  </div>
</div>
         
         
         
    </div>
</div>
<div class="popup-overlay"></div>
            
           <script src="js/index.js"></script>