
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
	  $(".error1").hide();
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
		$('#example-popup').show();

        setTimeout(function () {
            $('.popup').removeClass('transitioning');
        }, 200);
    }

});
});//]]>  

</script>

<script>
$(".con").hide();
$(".error1").hide();
$(document).ready(function(){
	
	$("#btn").click(function(e){
		e.preventDefault();
		
		var vname=$("#Username").val();
		var vpass=$("#Password").val();
		var data = 'username='+vname+'&pass='+vpass;
 
 // var data = $(this).serialize();
  //window.location.href="profile.php";
  if(vname=='')
  {
	$("#error-msg1").html("Enter Username");  

  }
  else
  if(vpass=='')
  {
	  $("#error-msg1").html("Enter Password");  

  }
  else

  $.ajax({
  
  type : 'POST',
  url  : 'login.php',
  data : data,
  success :  function(data)
       {
		   
		//alert(data.length);   
	if(data.length==11){
	//$("#form").delay(3000);
//	$(".container").hide();
	//$(".success").show();
	$(".error1").hide();
	

	var redirectUrl="profile.php";
	var form = $('<form action="' + redirectUrl + '" method="post">' +
'<input type="hidden" name="username" value="'+ vname +'" />' +
'</form>');
$('body').append(form);
$(form).submit();
	
	//window.location.href="profile.php";
	
	}
	else 
 {
		$(".error1").show(); 
       $(".error1").html(data);
	$("#form")[0].reset();
 
 }
       }
  });
  return false;
 	
	});
});
</script>



<script>
$(".error2").hide();
$(document).ready(function(){
	$(".error2").hide();
	$("#btn1").click(function(e){
		
		e.preventDefault();
$(".error2").show();		
		var vname=$("#Username1").val();
		var mail=$("#Email1").val();
		var pass=$("#Password1").val();
		var rpass=$("#Repeat_Password1").val();
		
if(pass!=rpass)
{
	$(".error2").html("<h3 style='color:white'>Password doesn't Matched.Try Again!</h3>");
	$("#Password1").val('');
	$("#Repeat_Password1").val('');

}
		var data = 'username='+vname+'&pass='+pass+'&mail='+mail;

 //var data = $(this).serialize();
  //window.location.href="profile.php";
 
  $.ajax({
  
  type : 'POST',
  url  : 'register.php',
  data : data,
  success :  function(data)
       {
		   
		
	if(data.length==11){

$(".error2").html("Registered Successfully! Verify Mail.");
//$("#example-popup").hide();
//$("#example-popup2").show();	
	}
	else 
 {	$(".error2").show();
	 $("#register")[0].reset();
       $(".error2").html(data);	
 
 }
       }
  });
  return false;
 	
	});
});
</script>
<script>
$(document).ready(function(){
	$("#account").click(function(){
		$("#example-popup1").hide();
	});
	});
	
	$(document).ready(function(){
	$(".account1").click(function(){
		$("#example-popup1").show();
	});
	});
	
	$(document).ready(function(){
	$("#forgot_pass").click(function(){
		$("#example-popup").hide();
	});
	});
</script>		
<script>

$(document).ready(function(){
$(".error3").hide();
	$("#btn4").click(function(e){
		e.preventDefault();
		$(".error3").show();
		var r_mail=$("#mail_p").val();
		if(r_mail=='')
		{
			$("#error3").html("<h3 style='color:red'>Enter EMail-id</h3>");
		}
		var data='mail='+r_mail;
		 $.ajax({
  
  type : 'POST',
  url  : 'pass_recover.php',
  data : data,
  success :  function(data)
       {
		   
	$(".error3").hide();	
	if(data.length==11){
	$(".error3").show();

	    $(".error3").html("<br><h4>Email sent!<h4>");	
	}
	else 
 {	$(".error3").show();
	 $("#form1")[0].reset();
       $(".error3").html(data);	
 
 }
       }
  });
  return false;
		
});
	});
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
					<li class="active"><a href="#example-popup1" class="account1" data-popup-target="#example-popup1">Account</a></li> |
					
					<li><a href="#example-popup" data-popup-target="#example-popup">Log in | Sign Up</a></li> |
					
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
				<input type="text" id="search_v" name="search_v" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="Subscribe" id="submit_s" name="submit">
					
                <div id="response"> </div>
		 </div>
                <script>
				$(document).ready(function(){
	
	$("#submit_s").click(function(){

				var value=$("#search_v").val();
				
				
							
					var redirectUrl="Search_result.php";
	var form = $('<form action="' + redirectUrl + '" method="get">' +
'<input type="hidden" name="keyword" value="'+ value +'" />' +
'</form>');
$('body').append(form);
$(form).submit();

					});
	});
				
				</script>
			
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
0           
       
           
           
           
           
           
           
           
           
           
           

           
            <div id="example-popup" class="popup">
    <div class="popup-body">	<span class="popup-exit"></span>

        
         <div class="container">
  <div class="card"></div>
  
  <div class="card">
    <h1 class="title">Login</h1>
    <form  id="form" method="post">
      <div class="input-container">
        <input type="text" id="Username" name="username" required="required"/>
        <span id="error-msg1"></span>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input name="pass" type="password" id="Password" required="required"/>
        <span id="error-msg1"></span>
        <label for="Password">Password</label>
        <div class="bar"></div>
        <div class="error1"> <img src="images/process.gif" ></div>
      </div>
      
      <div class="button-container">
        <button id="btn"><span>Go</span></button>
      </div>
      <div class="footer"><a href="#example-popup3" id="forgot_pass" data-popup-target="#example-popup3">Forgot your password?</a></div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form id="register" method="post">
      <div class="input-container">
        <input type="text" id="Username1" required="required" name="username"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="email" id="Email1" required="required" name="email"/>
        <label for="E-mail">E-Mail</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password1" required="required" name="pass"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Repeat_Password1" required="required" name="r_pass"/>
        <label for="Repeat Password">Re-Enter Password</label>
        <div class="bar"></div>
      <div class="error2" align="center">   <img src="images/process.gif" ></div>
      </div>
      
      <div class="button-container">
        <button id="btn1"><span>Sign Up</span></button>
      </div>
    </form>
  </div>
</div>
         
         
         
    </div>
</div>
<div class="popup-overlay"></div>
            
            
            
            
            
            
              <div id="example-popup1" class="popup">
    <div class="popup-body">	<span class="popup-exit"></span>
 <div class="container">
  <div class="card"></div>
  
  <div class="card">
    <h1 class="title">Please Login or Sign Up</h1>
      <div class="button-container">
        <button  id="account" data-popup-target="#example-popup" ><span>Login |Sign Up</span></button>
      </div>
      </div>
      </div>
                
    </div>
</div>
<div class="popup-overlay"></div>
            
            
      
      
         <div id="example-popup2" class="popup">
    <div class="popup-body">	<span class="popup-exit"></span>
 <div class="container">
  <div class="card"></div>
  
  <div class="card">
    <h1 class="title">Mail Sent!</h1>
    <h3 class="footer">Please Verify your mail then Login to Continue to NewsMemoria.</h3>
      <div class="button-container">
        <button  id="account" data-popup-target="#example-popup" ><span>Login |Sign Up</span></button>
      </div>
      </div>
      </div>   
    </div>
</div>
<div class="popup-overlay"></div>    


  <div id="example-popup3" class="popup">
    <div class="popup-body">	<span class="popup-exit"></span>
 <div class="container">
  <div class="card"></div>
  
  <div class="card">
    <h1 class="title">Recover Password</h1>
    <h3 class="footer" style='color:#2AC4F3'>Enter E-Mail to Recover your password.</h3>
   <br>
    <form  id="form1" method="post">
      <div class="input-container">
        <input type="email" id="mail_p" name="email2" required="required"/>
        <span id="error-msg1"></span>
        <label for="E-Mail">E-Mail</label>
        <div class="bar"></div>
 <div class="error3" align="center"><img src="images/process.gif" ></div>
      </div>
       
      <div class="button-container">
        <button id="btn4"><span>Recover</span></button>
      </div>
      </form>
      </div>
      </div>   
    </div>
</div>
<div class="popup-overlay"></div>     
            
            
            
            
            
            
       
	
  <!-- start slider -->
    <div id="fwslider">
        <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
                    <img src="images/banner3.jpg" alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        
                             <section class="hero">
      <section class="section-inner">
        <div class="intro">
          <article>
                          <div class="hero-holder">
                        <h1 class="cf"><span class="title-word " style="color:#F60431;font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif" >NewsMemoria ❤</span><span class="title-word">A New way to learn News.</span><span class="title-word"></span></h1>
                        </div>
                        </article>
    
        </div>
      </section>
    </section>
    
                        
                        
                    </div>
                </div>
                 <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src="images/banner2.jpg" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        
                                    
                             <section class="hero">
      <section class="section-inner">
        <div class="intro">
          <article>
                          <div class="hero-holder">
                        <h1 class="cf"><span class="title-word " style="color:#F7060A;font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif" >NewsMemoria ❤</span><span class="title-word" style="color:#F55759">Discover us...you will love it.</span><span class="title-word"></span></h1>
                        </div>
                        </article>
    
        </div>
      </section>
    </section>
    
                        
                        
                        
                        
                    </div>
                </div>
            </div>
            <!--/slide -->












    <div class="slide">
                <img src="images/banner1.jpg" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        
                                    
                             <section class="hero">
      <section class="section-inner">
        <div class="intro">
          <article>
                          <div class="hero-holder">
                        <h1 class="cf"><span class="title-word " style="color:#F60431;font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif" >NewsMemoria ❤</span><span class="title-word">Discover us...you will love it.</span><span class="title-word"></span></h1>
                        </div>
                        </article>
    
        </div>
      </section>
    </section>
    
                        
                        
                        
                        
                    </div>
                </div>
            </div>

        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
    <!--/slider -->



        <?php 
		include("db.php");
		$sql1="select id from rss_data order by id DESC LIMIT 6";
		$result1=mysqli_query($conn,$sql1);
		?>

<div class="main">
	<div class="wrap">
		<div class="section group">
		  <div class="cont span_2_of_3">
		  	<h2 class="head">Top News</h2>
			   <div class="top-box">
            <?php 
			for($i=0;$i<6;$i++)
			{
				$row1=mysqli_fetch_array($result1,MYSQLI_NUM); 
			$max_id=$row1[0];					
		$sql="select title,image,date from rss_data where id='$max_id'"; 
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_NUM);

			
			?>
         
			 <div class="col_1_of_3 span_1_of_3"> 
			   <a href="single.html">
				<div class="inner_content clearfix">
					<div class="product_image">
						<img src=<?php echo $row[1]; ?> style="height:170px;width:260px"alt=""/>
					</div>
                    <div class="sale-box"><span class="on_sale title_shop">NEW</span></div>	
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
if($i==2)
{
echo "<div class='clear'></div>
			</div>	
			<div class='top-box'>";	
}

} ?>            

            
            </div>

          







        <?php 
		include("db.php");
		$sql1="select id from rss_data where category_data='Politics' order by id DESC LIMIT 3";
		$result1=mysqli_query($conn,$sql1);
		?>


		  	<a href="all_politics.php" ><h2 class="head">Politics</h2></a>
			<div class="top-box">
            <?php 
			for($i=0;$i<3;$i++)
			{
				$row1=mysqli_fetch_array($result1,MYSQLI_NUM); 
			$max_id=$row1[0];					
		$sql="select title,image,date from rss_data where id='$max_id'"; 
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_NUM);

			
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
if($i==2)
{
echo "<div class='clear'></div>
			</div>	
			<div class='top-box'>";	
}

} ?>            
            
            </div>









        <?php 
		include("db.php");
		$sql1="select id from rss_data where category_data='World' order by id DESC LIMIT 3";
		$result1=mysqli_query($conn,$sql1);
		?>
	<a href="all_world.php" ><h2 class="head">World</h2></a>
<div class="top-box">
            <?php 
			for($i=0;$i<3;$i++)
			{
				$row1=mysqli_fetch_array($result1,MYSQLI_NUM); 
			$max_id=$row1[0];					
		$sql="select title,image,date from rss_data where id='$max_id'"; 
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_NUM);

			
			?>
			 <div class="col_1_of_3 span_1_of_3"> 
			   <a href="single.html">
				<div class="inner_content clearfix">
					<div class="product_image">
						<img src=<?php echo $row[1]; ?> style="height:170px;width:240px"alt=""/>
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
if($i==2)
{
echo "<div class='clear'></div>
			</div>	
			<div class='top-box'>";	
}

} ?>            
            
            </div>






			</div>
            </div>
            </div>
            </div>









            
            
            
        
            
            
            
            
            
            
            
            
            
            
            
            
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
			</div>			 						 			    
		  </div>
			<div class="rsidebar span_1_of_left">
				<div class="top-border"> </div>
				 <div class="border">
	             <link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
	             <link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
				  <script src="js/jquery.nivo.slider.js"></script>
				    <script type="text/javascript">
				    $(window).load(function() {
				        $('#slider').nivoSlider();
				    });
				    </script>
		    <div class="slider-wrapper theme-default">
              <div id="slider" class="nivoSlider">
                <img src="images/t-img1.jpg"  alt="" />
               	<img src="images/t-img2.jpg"  alt="" />
                <img src="images/t-img3.jpg"  alt="" />
              </div>
             </div>
              <div class="btn"><a href="single.html">Check it Out</a></div>
             </div>
           <div class="top-border"> </div>
			<div class="sidebar-bottom">
			    <h2 class="m_1">Newsletters<br> Signup</h2>
			    <p class="m_text">You can Suscribe to our News. Just Enter your E-mail</p>
			    <div class="subscribe">
					 <form>
					    <input name="userName" type="text" class="textbox">
					    <input type="submit" value="Subscribe">
					 </form>
	  			</div>
			</div>
	    </div>
	   <div class="clear"></div>
	</div>
	</div>
	</div>
   <div class="footer">
		







        <script src="js/index.js"></script>

<?php include("default_last.php"); ?>