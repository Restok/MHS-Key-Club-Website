  <a class="navbar-brand" href="index.php"><span class= "logo"><img src="img/MHSKeyClub-white.png" width= "150"></span></a>
 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Events</title>
<link href="css/index.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
<link href="css/events.css" rel="stylesheet" type="text/css">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">

<link rel="stylesheet" href="css/theme.fonts.css">

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
<link rel="stylesheet" href="css/asset/alert.css">

<link rel="stylesheet" href="css/shortcode-style.css">
<link rel="stylesheet" href="css/asset/parallax.css">
<link rel="stylesheet" href="css/asset/footer.css">
<link rel="stylesheet" href="css/asset/introBox.css">
<link rel="stylesheet" href="css/asset/buttons.css">
	

	<style>
/*
		body{
			background-image: url("../img/bg.png");
			background-size:cover;
			background-attachment: fixed;

			
		}
	*/
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

	
	</style>
	</head>


<body>
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
          <a class="dropdown-item navtext-color" data-toggle="modal" data-target=".ABmodal_slideTop">Join Club</a>

        </div>
      </li>

	  </ul>
  </div>
</nav>
	<div class="modal fade ABmodal_transition ABmodal_slideTop ABmodal_common mt-5" tabindex="-1" role="dialog">
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
<div class="container mt-5 pt-5">
	<div class = "row" >
		<div class = "col-lg-3" >
			<h1>Events</h1>

		</div>
		<div class = "col-lg-9	border_behavior">
					<img src = "img/Template_KeyClub_Red-scribble-pencil-graphic.jpg.jpg" alt = "scribble" style = "width:100%;height:auto">

			</div>
	</div>
	<p class = "mt-4">	Below is a list of the volunteer events that are currently available. These events make up what key club is and drive our volunteering efforts forward. If you are registered on the website and would like to sign up, click the sign up button below and fill out the form with the corresponding information.</p>
	<hr>
	<div class="row mt-5">
	  <div class="col-sm-6">
		<div class="card">
		<img class="card-img-top" src="img/kcpics/IMG_9202.JPG" alt="Card image cap">
 
		  <div class="card-body">
			<h5 class="card-title">Previous Events</h5>
			<p class="card-text">Check out pictures from previous Key Club events.</p>
			<a href="pictures.php" class="btn btn-primary">Go Now</a>
		  </div>
		</div>
	  </div>
	  <div class="col-sm-6">
		<div class="card">
		  <img class="card-img-top" src="img/kcpics/IMG_5922.JPG" alt="Card image cap">

		  <div class="card-body">
			<h5 class="card-title">Sign Up</h5>
			<p class="card-text">Sign up for an event that you would like to attend.</p>
			<a class="btn btn-primary" style = "color:white;"data-toggle="modal" data-target=".ABmodal_slideRight">Go Now</a>
		  </div>
		</div>
	  </div>
</div>
	<br>

	<br>
	<table class="table ">
	  <thead class = "thead-dark">
		<tr>
		  <th scope="col">#</th>
		  <th scope="col">Event</th>
		  <th scope="col">Date</th>
		  <th scope="col">Time</th>
		</tr>
	  </thead>
	<tbody>
		<?php
		include 'connection.php';
		mysqli_select_db($conn,"keyclubdatabase");

		$sql = "SELECT id, Event, Date, Time FROM events";

		$result = $conn-> query($sql);

		if($result-> num_rows > 0){
			while ($row = $result-> fetch_assoc()){
				echo "<tr><th scope = 'row'>". $row["id"]. "</th><th scope='row'>". $row['Event']. "</th><th scope='row'>". $row['Date']. "</th><th scope='row'>". $row['Time']. "</th></tr>";
			}
		}
		mysqli_close($conn);
	?>
	  
	  </tbody>

	</table>
		<button class = "clean-button pos_relative float-right" data-toggle="modal" data-target=".ABmodal_slideRight">Sign Up</button>

<!--	 <li><a href="#" data-toggle="modal" data-target=".ABmodal_slideRight">Slide right</a></li>-->
	<hr>
	<br>
	<h2 style = "text-align: center; margin-top:50px;">Current Sign Ups</h2>
	<hr>
	<?php
		include 'connection.php';
		mysqli_select_db($conn,"events");

		$sql = "SELECT table_name FROM information_schema.tables where table_schema='events'";
		
		//GET ALL TABLE NAMES

		if($result = $conn-> query($sql)){

			//RUN AS MANY TIMES AS THE NUMBER OF TABLES.
			
			while($row = $result->fetch_assoc()){
				$id = 0;

				$currentTableName = $row["table_name"];

				$sql = "SELECT * from `$currentTableName`";
				$sql = "SELECT * from `$currentTableName`";
				
				// FOR EACH TABLE MAP THE RESULTS TO 
				
				if($result2 =  $conn->query($sql)){
					echo '<h3>' . $currentTableName. '</h1> <table class="table "><thead class = "thead-light"><tr><th scope="col">#</th><th scope="col">First name</th><th scope="col">Last name</th><th scope="col">
					</tr></thead><tbody>';
					
					while($row2 = $result2-> fetch_assoc()){
						echo "<th scope = 'row'>". $row2["id"] . "</th><th scope = 'row'>". $row2["fname"]. "</th><th scope='row'>". $row2['lname']. "</th><th scope='col'></tr>";

						}
				
					echo '
						</tbody>
						</table>';
				}
				else{
					echo "UGHHHH";
					echo $conn->error;
				}

			}
		}
		
		else{
			echo "oof something broke";
			echo $conn -> error;
		}
		mysqli_close($conn);
	?>
	</div>
	 <div class="modal fade ABmodal_transition ABmodal_slideRight ABmodal_common" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close align_center_center" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>

                <!--content start-->
                <div class="signup_form_common signup_form4 register bg_color_ff">
                    <div class="form_header text-center">
                        <h4 class="fw_700 text-uppercase color_ff">Event Sign Up</h4>
                    </div>

                    <form action="eventSignUp.php" method="post">
						<div class="input_group password">
                            <input type="number" name="enumber" placeholder="Event Number">
                        </div>
                        <div class="input_group fname">
                            <input type="text" name="fname" placeholder="First Name">
                        </div>

                        <div class="input_group lname">
                            <input type="text" name="lname" placeholder="Last Name">
                        </div>
						<div class="input_group code">
                            <input type="number" name="code" placeholder="Member Code">
                        </div>




                        <button type="submit" class="transition_3s text-uppercase mt_20">Sign Up Now</button>

                    </form>
                </div>
                <!--content end-->

            </div>
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
</body>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

    <!--bootstrap min js-->
    <script type="text/javascript" src="js/bootstrap-4.0.0.js"></script>
	    <script type="text/javascript" src="js/popper.min.js"></script>


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
    <script type="text/javascript" src="js/shortcode-main.js"></script><strong></strong>
</html>
