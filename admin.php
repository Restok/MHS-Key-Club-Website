<?php include("C:\\xampp\\htdocs\\Unnamed Site 2\\password_protect.php"); ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Site Manager</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="css/index.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
<link href="css/asset/parallax.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,700,900|Merriweather:300,400,700,900|Montserrat:300,400,500,600,700,800,900|Playfair+Display:400,400i,700,700i,900,900i|Raleway:300,300i,400,500,600,700,800,900|Roboto:300,300i,400,500,700,900" rel="stylesheet">
<!-- all fonts css -->
<link rel="stylesheet" href="css/theme.fonts.css">
	<style>
		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
		  font-weight: 300 !important;
		  line-height: 170% !important;
		}
		.plainform{
			background-color:#c9d8ef;
			padding:20px;
			padding-bottom: 100px;
		}
		.input-basic{
			margin-top: 10px;
			margin-bottom:10px;
			width:100%;
			height:40px;
		}
		.clean-button{
			border-style: none;
			border-radius: 15px;
			background:linear-gradient(to bottom right, #40ef69, #3bdb90);
			width: 100px;
			height: 45px;
			font-weight: 300;
			float:right;
			transition: all, 1s;

		}

		.clean-button:hover{
			cursor:pointer;
			background:linear-gradient(to bottom right, #3ad85f, #3bcc88);
			transition: all, 1s;

		}
	</style>
</head>

<div class = "container mt-5">
<h1>Site Manager</h1>
	<br>
<form class = "mt-5 plainform" action = 'add-member.php' method = "post">
	<h4><b>Add member:</b></h4>
	<div class  = "mt-4">
		<p>First name:</p>
		<input type = "text" name = "first-name" class = "input-basic">

		<p>Last Name:</p>

		<input type = "text" name = "last-name" class = "input-basic">
		<p>Email Address:</p>

		<input type = "text" name = "email" class = "input-basic">
	<br>
		<button type = "submit" class = "clean-button input-basic">Submit</button>

	</div>	
</form>
<form class = "mt-5 plainform" action = 'insert-event.php' method = "post">
	<h4><b>Insert Events:</b></h4>

	<div class  = "mt-4">
		<p>Event name:</p>
		<input type = "text" name = "event-name" class = "input-basic">
		<p>Date:</p>
		 <input type = "text" name = "event-date" class = "input-basic">
		<p>Time:</p>
		<input type = "text" name = "event-time" class = "input-basic">
		<p>Members Limit:</p>
		<input type = "number" name = "event-hours" class = "input-basic">
	<br>
		<button type = "submit" class = "clean-button input-basic">Submit</button>

	</div>	
</form>

<form class = "mt-5 plainform" action = 'delete-event.php' method = "post">
	<h4><b>Remove Events:</b></h4>

	<div class  = "mt-4">
		<p>Event number:</p>
		<input type = "text" name = "event-number" class = "input-basic">

	<br>
		<button type = "submit" class = "clean-button input-basic">Submit</button>

	</div>
</form>
<br>
<h4><b>Gallery Manager:</b></h4>
<div class = "slideshowPics">
	<form enctype="multipart/form-data" class = "mt-5" action = 'upload.php' method = "post">
		<br>
		<h5>Slideshow Pictures (IMPORTANT: MAKE SURE THE IMAGE DIMENSIONS ARE EXACTLY 1170px x 600px): </h5>
		<div class  = "mt-4">
			Upload <input type="file" name="fileToUpload" id="fileToUpload">
			<input type="submit" value="Upload Image" name="submit">


		</div>
	</form>

</div>

	<div class = "slideshowPics">
		<form enctype="multipart/form-data" class = "mt-5" action = 'upload-mul.php' method = "post">
			<h5>COLUMNS</h5>
			Select the column:<select name="colNum" style = "width:10%;min-width: 50px;">
				  <option value=1>1</option>
				  <option value=2>2</option>
				  <option value=3>3</option>
				  <option value=4>4</option>
				</select> 
			<br>
				Upload <input type="file" name="colUpload[]" multiple = "multiple">
				<input type="submit" value="Upload Image" name="submit">
		</form>
		
		<form enctype="multipart/form-data"  action = 'delslidefile.php' method = "post">
			<div class = "mt-5">
				<h5> REMOVE IMAGE</h5>
				Image Name <input type="text" name="fileToDelete" id="fileToDelete">
				<br>
				Select the directory:<select name="sel" style = "width:10%;min-width: 50px;">
					  <option value=0>Slide</option>
					  <option value=1>1</option>
					  <option value=2>2</option>
					  <option value=3>3</option>
					  <option value=4>4</option>
				</select> 
				<input type="submit" value="Delete File" name="submit">
			</div>
		</form>
	</div>
</div>

<body>
</body>
</html>