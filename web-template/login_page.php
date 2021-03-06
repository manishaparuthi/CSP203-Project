<?php
include('Login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
    header("index.php"); 
    //header("Refresh:5, location: index.html");
}
?>

<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>OneClick</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<div class="page-inner">

	<div id="head-top" style="position: absolute; width: 100%; top: 0; ">
		
		<nav class="gtco-nav sticky-banner" role="navigation">
			<div class="gtco-container">
				
				<div class="row">
					<div class="col-xs-12 text-center menu-1">
						<ul>
							<li><a href="login_page.php">Login</a></li>
                            <li><a href="signup.html">SignUp</a></li>
                            <li><a href="index.html">Home</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</nav>
	</div>
	


	
	<div class="overflow-hid"> 

<script>
$('form').attr('autocomplete','off');
</script>

	<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/img_bg_1.jpg)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>Text1</h1>
                    <form name="loginForm" method="post" action="" autocomplete="off" onsubmit="return validateLoginForm()">
                        
                        <p> <input class="text-center" style="width:50%" id="login_email" type="email" placeholder="Email ID" name="email"></p>
                        <p> <input class="text-center" style="width:50%" id="login_pass" type="password" placeholder="Password" name="pass"></p>
                        <p> <input class="text-center btn btn-primary btn-lg" id type="submit" name="submit" value="Login"> <input class="text-center btn btn-primary btn-lg" type="reset" value="Reset"> </p>
                        <h2><p><span><?php echo $error; ?></span></p></h2>
                    </form>
                    <p><label style="opacity: inherit" id="login_error_message"></label></p>
				</div>	
			</div>
		</div>
	</div>
        
	
	</div>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	<!-- form validation-->
        <script src="js/check.js"></script>
	<!-- jQuery -->
	<script  src="js/index.js"></script>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing IMP-->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap  -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>
	<!-- Carousel IMP -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<!-- Main -->
	<script src="js/main.js"></script>
    

	</body>
</html>

