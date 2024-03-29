<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>MHS Key Club - Leaderboard</title>
<link href="css/index.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
<link href="css/events.css" rel="stylesheet" type="text/css">
<link rel = "stylesheet" href = "css/index.css">
<link rel="stylesheet" href="css/theme.fonts.css">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">

<!-- global css -->
<link rel="stylesheet" href="css/global-style.css">
	
<link rel="stylesheet" href="css/owl.carousel.min.css">

<!--nice select css-->
<link rel="stylesheet" href="css/nice-select.css">

<!--venobox css-->
<link rel="stylesheet" href="css/venobox.css">

<!--venobox css-->
<link rel="stylesheet" href="css/slick.css">

<!-- global css -->
<link rel="stylesheet" href="css/global-style.css">
<link rel="stylesheet" href="css/asset/modal.css">
<link rel="stylesheet" href="css/asset/signup.css">
    <!-- style css -->
<link rel="stylesheet" href="css/shortcode-style.css">
<link rel="stylesheet" href="css/asset/parallax.css">
<link rel="stylesheet" href="css/asset/footer.css">
<link rel="stylesheet" href="css/asset/introBox.css">
<style>
	html,body
		{
			width: 100%;
			margin: 0px;
			padding: 0px;
			overflow-x: hidden; 
		}
	.navtext-color{
		font-size:18px;
	}
		.border_behavior{
			margin-top:27px;						

		}
		@media (max-width: 992px) {
			.border_behavior{
				margin-top:0px;						

			}
		}	
	.hoursText{
		font-family: Myriad Pro Light;
		font-size: 25px;
	}
	
</style>
</head>

<body>
	<div class="modal fade ABmodal_transition ABmodal_slideRight ABmodal_common mt-5" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close align_center_center" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>

                <!--content start-->
                <div class="signup_form_common signup_form4 register bg_color_ff">
                    <div class="form_header text-center">
                        <h4 class="fw_700 text-uppercase color_ff">Request Membership</h4>
                    </div>
					<p class ="text-center mx-5 mt-5 padding:0"><em>This is only for students of Millennium High School! An officer will approve your request as soon as they see it. Please use your school gmail when signing up.<br/>Note that you can attend key club meetings without being officially registered here.</em></p>
                    <form action="approval-pending.php" class = "mb-5" method="post">

                        <div class="input_group fname">
                            <input type="text" name="fname" placeholder="First Name">
                        </div>

                        <div class="input_group lname">
                            <input type="text" name="lname" placeholder="Last Name">
                        </div>
						
						<div class="input_group email">
                            <input type="text" name="email" placeholder="Email">
                        </div>
						
						<div class="input_group">

						 <select name="year" class ="input_group" style = "border:none">
						  <option value="freshman">Freshman</option>
						  <option value="sophomore">Sophomore</option>
						  <option value="junior">Junior</option>
						  <option value="senior">Senior</option>
						</select> 
                        </div>
						<button type="submit" class="transition_3s text-uppercase mt_20">Send request</button>

                    </form>
                </div>
                <!--content end-->
            </div>
		</div>

        </div>
	<nav class="navbar navbar-expand-lg navbar-light fixed-top actual-bg" style = "opacity: 1;">  <a class="navbar-brand" href="index.php"><span class= "logo"><img src="img/MHSKeyClub-white.png" width= "150"></span></a>
<button class="navbar-toggler " style = "border-style:none;" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse"  id="navbarNavDropdown">
		<ul class="navbar-nav ml-auto resizeNav">

		  <li class="nav-item active bg-transparent">
			<a class="nav-link navtext-color" href="index.php">Home <span class="sr-only">(current)</span></a>
			</li>
		  <li class="nav-item">
			<a class="nav-link navtext-color" href="about.html">About</a>
		  </li>
					  <li class="nav-item">
			<a class="nav-link navtext-color" href="contact.html">Contact</a>
		  </li>
		  <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle navtext-color" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  Club Section
			</a>

			<div class="dropdown-menu navtext-color" style = "background-color:#032940" aria-labelledby="navbarDropdownMenuLink">
			  <a class="dropdown-item navtext-color" href="events.php">Events</a>
			  <a class="dropdown-item navtext-color" href="pictures.php">Picture</a>
			  <a class="dropdown-item navtext-color" href="leaderboard.php">Leaderboard</a>
			  <a class="dropdown-item navtext-color" data-toggle="modal" data-target=".ABmodal_slideRight">Join Club</a>

			</div>
		  </li>

		  </ul>
	  </div>
	</nav>
	<div class="container m-5 p-5">
		<div class = "row" >
			<div class = "col-lg-4" >
				<h1 style = "border:none">Leaderboard</h1>

			</div>
			<div class = "col-lg-8	border_behavior">
				<img src = "img/Template_KeyClub_Orange-scribble-pencil-graphic.jpg.jpg" alt = "scribble" style = "width:100%;height:auto">
			</div>
		</div>
	<hr>
		<table class="table " style = "background-color:#FCFCFC">
		  <thead class = "" style = "background-color:#007AAE; color:white;">
			<tr>
			  <th scope="col">#</th>
			  <th scope="col">Name</th>
			  <th scope="col">Hours</th>
			</tr>
		  </thead>
		<tbody>
		<?php
			session_start();

			include 'connection.php';
			mysqli_select_db($conn,"keyclubdatabase");

			$sql = "SELECT * FROM members ORDER BY hours DESC;";
			$result = $conn-> query($sql);
			$place = 1;
			$placeAdd = 1;
			$curHours = null;
			$totalHours = 0;
			$totalF = 0;
			$totalS = 0;
			$totalJ = 0;
			$totalSe = 0;
			if($result-> num_rows > 0){
				while ($row = $result-> fetch_assoc()){
					$totalHours += $row['hours'];
					if($curHours != $row['hours']){
						$place+=$placeAdd2;
						$placeAdd2 = 1;
					}
					else{
						$placeAdd2+=1;
					}
					switch($row["year"]){
						case "freshman":
							$totalF += $row["hours"];
							break;
						case "sophomore":
							$totalS += $row["hours"];
							break;
						case "junior":
							$totalJ += $row["hours"];
							break;
						case "senior":
							$totalSe += $row["hours"];
							break;
					}
					$curHours = $row['hours'];
					echo "<tr><th scope = 'row'>". $place. "</th><th scope='row'>". $row['fname'] . " " . $row['lname'] . "</th><th scope='row'>". $row['hours']. "</th></tr>";


				}
			}
			$_SESSION["totalF"] = $totalF;
			$_SESSION["totalS"] = $totalS;
			$_SESSION["totalJ"] = $totalJ;
			$_SESSION["totalSe"] = $totalSe;
			$_SESSION["totalHours"] = $totalHours;
			mysqli_close($conn);
		?>
		</tbody>
		</table>
		<hr>
		<div class = "container-fluid p-5" style = "background-color:#FFEFEF">
		<?php
			echo "<p class = 'hoursText'> Total hours served: <b>" . $_SESSION["totalHours"] . "</b></p><hr />";
			echo "<p class = 'hoursText'>Total hours served by Freshmen: <b>" . $_SESSION["totalF"] . "</b></p><hr />";
			echo "<p class = 'hoursText'>Total hours served by Sophmores: <b>" . $_SESSION["totalS"] . "</b></p><hr />";
			echo "<p class = 'hoursText'>Total hours served by Juniors: <b>" . $_SESSION["totalJ"] . "</b></p><hr />";
			echo "<p class = 'hoursText'>Total hours served by Seniors: <b>" . $_SESSION["totalSe"] . "</b></p><hr />";
		?>
		</div>
	</div>
	<footer class="footer_widget3 footer_widget5 dark">
        <div class="container justify-content-center">
            <div class="row justify-content-center">
                 <div class="col-lg-6 col-md-6 justify-content-center">
                    <div class="single_widget widget1 justify-content-center">
                        <h2 class="title_20 widget_title">CONTACT INFO</h2>
                        <div class="contact_address">
                            <p class="address"><i class="flaticon-placeholder"></i><span class="text-uppercase">ADDRESS:</span> 14802 W Wigwam Blvd, Goodyear, AZ 85395</p>
                            <p class="email"><i class="flaticon-mail"></i><span class="text-uppercase">Email:</span> mhskeyclub2k18@gmail.com</p>
                            <p class="web"><i class="flaticon-internet"></i><span class="text-uppercase">Website:</span> <a href="https://mhskey.club">mhskey.club</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 justify-content-center">
                    <div class="single_widget widget2 justify-content-center">
                        <h2 class="title_20 widget_title">Links</h2>
                        <ul class="quick_link">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
							<li></li>
                        </ul>
                    </div>
                </div>
        </div>

        </div>
    <section class="main_footer footer5 dark" style = "background-color:transparent">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="copyright">Copyright 2018...?</p>
                </div>
                <div class="col-md-4">
                    <ul class="social_link d_inline pull-right">
                        <li><a href="https://www.instagram.com/mhskeyclub2k18/" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://twitter.com/mhskeyclub2k18" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
					</ul>
                </div>
            </div>
        </div>
    </section>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

<!--bootstrap min js-->
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap-4.0.0.js"></script>

<!--owl carousel js-->
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/navscroll.js"></script>

<script type="text/javascript" src="js/owl.carousel.min.js"></script>

<!--nice select js-->
<script type="text/javascript" src="js/jquery.nice-select.min.js"></script>

<!--venobox js-->
<script type="text/javascript" src="js/venobox.min.js"></script>

<!--counterup js-->
<script type="text/javascript" src="js/jquery.counterup.min.js"></script>

<!--waypoints js-->
<script type="text/javascript" src="js/waypoints.min.js"></script>

<!--venobox js-->
<script type="text/javascript" src="js/slick.js"></script>

<!--down count js-->
<script type="text/javascript" src="js/jquery.downCount.js"></script>

<!--background video js-->
<script type="text/javascript" src="js/jquery.vide.js"></script>

<!--parallax js-->
<script type="text/javascript" src="js/parallax.js"></script>

<!-- all jQuary activation code here and always it will be bottom of all script tag -->
<script type="text/javascript" src="js/shortcode-main.js"></script>
	
</body>
	
</html>