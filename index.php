<!DOCTYPE html>

<?php session_start(); ?>

<?php include('Include/header.php') ?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">-->
<!--<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">-->
 
<!--<link rel="stylesheet" type="text/css" href="styles/responsive.css">-->
<link rel="stylesheet" type="text/css" href="CSS/main.css">

<style>
    .home_slider_title {
    font-size: 60px;
    font-weight: 600;
    color: #111;
    line-height: 1.2;
}

.home_slider_subtitle {
    font-size: 16px;
    font-weight: 400;
    color: #111;
    line-height: 2.14;
    margin-top: 22px;
    font-weight: bolder;
}

.button_light a {
    color: #111;
}

.button_light {
    border: solid 2px #111;
}

</style>
<div class="super_container">

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/in1.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                                                            <div class="home_slider_title">National Blood Transfusion Service</div>
										<div class="home_slider_subtitle">100% of Sri Lankan blood donors are voluntory non rermunerated donors.</div>
                                                                                <div class="button button_light home_button"><a href="Donate.php">Donate Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/in2.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">National Blood Transfusion Service</div>
										<div class="home_slider_subtitle">Your precious donation of blood can save as many as 3 lives.</div>
                                                                                <div class="button button_light home_button"><a href="Donate.php">Donate Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/in3.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">National Blood Transfusion Service</div>
										<div class="home_slider_subtitle">You can donate blood in every 4 months time.</div>
                                                                                <div class="button button_light home_button"><a href="Donate.php">Donate now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Home Slider Dots -->
			
			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.</li>
									<li class="home_slider_custom_dot">02.</li>
									<li class="home_slider_custom_dot">03.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>	
			</div>

		</div>
	</div>


	<div class="icon_boxes">
		<div class="container">
			<div class="row icon_box_row">
				
				
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
                                            <div class="icon_box_image"><img src="images/v.png" alt=""></div>
						<div class="icon_box_title">Vision</div>
						<div class="icon_box_text">
							<p>To be a unique model for the world securing Quality Assured Blood Services, through a nationally coordinated system.</p>
						</div>
					</div>
				</div>

				 
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
                                            <div class="icon_box_image"><img src="images/m.png" alt=""></div>
						<div class="icon_box_title">Mission</div>
						<div class="icon_box_text">
							<p>To ensure the quality, safety, adequacy and cost effectiveness of the blood supply and related laboratory, clinical, academic and research services in accordance wit national requirements and WHO recommendations.</p>
						</div>
					</div>
				</div>

				 
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
                                            <div class="icon_box_image"><img src="images/j.png" alt=""></div>
						<div class="icon_box_title">Values</div>
						<div class="icon_box_text">
							<p>“From a single roomed blood bank towards a National Service”</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
	
	


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>


 
<?php include ('./Include/footer.php');    
