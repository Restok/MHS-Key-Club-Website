<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="author" content="">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Carousel</title>

    <!--favicon icon-->
    <link rel="icon" href="images/favicon.png">

    <!--google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900|Merriweather:300,400,700,900|Montserrat:300,400,500,600,700,800,900|Playfair+Display:400,400i,700,700i,900,900i|Raleway:300,300i,400,500,600,700,800,900|Roboto:300,300i,400,500,700,900" rel="stylesheet">

    <!-- font awesome css -->
    <link rel="stylesheet" href="css/theme.fonts.css">

    <!--bootstrap min css-->
	<link rel="stylesheet" href = "css/bootstrap.min.css">
    <!--owl carousel css-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!--nice select css-->
    <link rel="stylesheet" href="css/nice-select.css">

    <!--venobox css-->
    <link rel="stylesheet" href="css/venobox.css">

    <!--venobox css-->
    <link rel="stylesheet" href="css/slick.css">

    <!-- global css -->
    <link rel="stylesheet" href="css/global-style.css">

    <!-- style css -->
    <link rel="stylesheet" href="css/shortcode-style.css">
    <link rel="stylesheet" href="css/asset/carousel.css">
    <link rel="stylesheet" href="css/asset/footer.css">

</head>
<style>
.row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    padding: 0 4px;
}
.column {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
    max-width: 25%;
    padding: 4px;
}
.column img{
	width:100%;
	margin-top:8px;
	vertical-align: middle;
} 
/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
    .column {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
    }
}	
	
	.expandBtn:hover{
		cursor: pointer;
	}
	img {
    image-orientation: from-image;
}
</style>
<div hidden>
<svg style="display: none;" xmlns="http://www.w3.org/2000/svg"> <symbol id="blueberries" viewbox="0 0 53.308 53.308">
<title>
blueberries
</title>
<path d="M39.685,2.953c-7.524,0-13.623,6.099-13.623,13.623c0,2.243,0.552,4.353,1.512,6.219 c1.496-0.565,3.11-0.888,4.804-0.888c5.281,0,9.851,3.011,12.111,7.404c5.15-1.944,8.819-6.905,8.819-12.735 C53.308,9.052,47.208,2.953,39.685,2.953z" style="fill:#003879;">
</path> 
...

</svg> 
</div>
<body>

    <section class="carousel_section mt-5" style = "background-color: #DFDFDF">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="abcarousel_common abcarousel2 owl-carousel">
						<?php
						$dir = "img/gallery/slide/*";
							$images = glob( $dir );
							//extract only the name of the file without the extension and save in an array named $find
							foreach( $images as $image ):
								echo "<div class='carousel_item' style = 'overflow:hidden'><img src='" . $image . "' /></div>";
							endforeach;
						?>
                        <!--/item-->
                    </div>
                    <!--/wrapper-->
                </div>
                <!--/col-->
            </div>
        </div>
    </section>
	<section class = "m-4">
<!--		<h1 >2017-2018<i class = "fa fa-angle-down expandBtn" id = "imtired" style = "margin:10px" onClick="expand('imtired', '#imtiredstired')"></i></h1>-->



<!--
			<ul>
				<li>Car wash</li>
				<li>Make a difference day</li>
				<li>Gift shopping</li>
				<li>Gift wrapping</li>
				<li>Kids day at the fair</li>
				<li>Group Pictures</li>
				<li>Other</li>


		
		
		
		
		
		
			</ul>
-->
			<div class="row" id = "imtiredstired"> 
			  <div class="column">
				<?php
				$dir2 = "img/gallery/column1/*";
					$images2 = glob( $dir2 );
					//extract only the name of the file without the extension and save in an array named $find
					foreach( $images2 as $image2 ):
						echo "<img src='" . $image2 . "'/>";
					endforeach;
				?>

			  </div>
			  <div class="column">
				<?php
				$dir3 = "img/gallery/column2/*";
					$images3 = glob( $dir3 );
					//extract only the name of the file without the extension and save in an array named $find
					foreach( $images3 as $image3 ):
						echo "<img src='" . $image3 . "'/>";
					endforeach;
				?>
			  </div>  
			  <div class="column">
				<?php
				$dir4 = "img/gallery/column3/*";
					$images4 = glob( $dir4 );
					//extract only the name of the file without the extension and save in an array named $find
					foreach( $images4 as $image4 ):
						echo "<img src='" . $image4 . "'/>";
					endforeach;
				?>

			  </div>
			  <div class="column">
				<?php
				$dir5 = "img/gallery/column4/*";
					$images5 = glob( $dir5 );
					//extract only the name of the file without the extension and save in an array named $find
					foreach( $images5 as $image5 ):
						echo "<img src='" . $image5 . "'/>";
					endforeach;
				?>
			  </div>
</div>
		</div>
	</section>
</body>
	    <div class="scroll_top not_visible"><i class="fa fa-angle-up"></i></div>
    <!-- =======================================
        ==End scroll top==  
    =======================================-->

    <!-- jQuary library -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!--
	<script>
		var expanded = true;
		function expand(id, colid){
			if(!expanded){
				document.getElementById(id).classList.add('fa-angle-down');
				document.getElementById(id).classList.remove('fa-angle-right');
				expanded = true;
				$(colid).fadeIn(300)
				
			} 
			else
			{
				document.getElementById(id).classList.remove('fa-angle-down');
				document.getElementById(id).classList.add('fa-angle-right');
				expanded = false;
				$(colid).fadeOut(300)

				
			}
		}
	</script>
-->
    <!--bootstrap min js-->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!--owl carousel js-->
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
</html>