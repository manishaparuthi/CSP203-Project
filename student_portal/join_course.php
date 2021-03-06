<?php
    session_start();
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
		<div class="gtco-top">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-xs-6">
						<div id="gtco-logo"><a href="index.php">OneClick <em>.</em></a></div>
					</div>
					<div class="col-md-6 col-xs-6 social-icons">
						<ul class="gtco-social-top">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>	
		</div>
		<nav class="gtco-nav sticky-banner" role="navigation">
			<div class="gtco-container">
				<div class="row">
					<div class="col-xs-12 text-center menu-1">
						<ul>
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="mycourse.html">My Courses</a></li>
							<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</nav>
	</div>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_4.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-mt-15em">
				<div class="col-md-12 mt-text text-center animate-box" data-animate-effect="fadeInUp">
					<h1>Displaying list of courses not registered for..</h1>	
					<h2 style="font-size:30px">Click on the course you want to enroll for, Hope you have already uploaded the photos required for your attendance.</h2>
				</div>
			</div>
		</div>
	</header>

	<div class="flex-section gtco-gray-bg">
		<div class="col-1">
			<div class="text">

				<div class="row">
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $conn = mysqli_connect($servername, $username, $password,"oneclick");
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $email = $_SESSION['login_user'];
                    $get_sql = "SELECT StudentID FROM student WHERE email=\"$email\"";
                    $res = mysqli_query($conn,$get_sql);
                    if($res){
                        $get_id = "tmp";
                        while ($row=mysqli_fetch_row($res)){
                            $get_id = $row[0];
                        }
                        $sql="SELECT FirstName,cn FROM instructor INNER JOIN (SELECT InstructorID, alias1.CourseName as cn FROM instructor_courses INNER JOIN (Select CourseName,CourseID from course WHERE CourseID NOT IN (SELECT CourseID FROM student_attendance WHERE StudentID = $get_id ))alias1 ON alias1.CourseID = instructor_courses.CourseID)alias2 ON alias2.InstructorID = instructor.InstructorID;";
                        $result = mysqli_query($conn,$sql);
                        if ($result)
                        {
                            echo "<ol style=\"font-size:30px;\">";
                            echo "<form method= \"post\"";
                            while ($row=mysqli_fetch_row($result))
                            {
                                $cour = $row['cn'];
                                $prof = $row['FirstName'];
                                echo "<li><input type=\"checkbox\" name=\"$cour\" value=\"$cour\"> Course: $cour - Instructor: $prof</li>"; 
                            }
                            echo "</form></ol>";
                        }
                        echo "<h1>No courses found to register for. Please talk to your course instructor to verify if he has added the course you are looking for.</h1><br><h2>Have a nice day :)</h2>";
                    }else{
                    }
                    mysqli_close($conn);
                ?>
				</div>
			</div>
		</div>
	</div>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>
	<!-- Carousel -->
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
        </div>
	</body>
</html>