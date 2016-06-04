<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$query = $this->db->query('SELECT * FROM general');

foreach ($query->result() as $row)

{

  $titlu = $row->titlu_nume_site;

  $meta_desc = $row->default_meta_description;

  $meta_key = $row->default_meta_key;

  $telefon_contact = $row->telefon_contact;

  $email_contact = $row->email_contact;

} ?>

<!DOCTYPE html>

<?php
    $query = $this->db->query('SELECT * FROM general');
    foreach ($query->result() as $row)
    {
        $layout = $row->layout;
        $bgcolor = $row->bgcolor;
    }
?>
<html class="<?php if($layout == 1) { echo ' boxed'; } if($bgcolor == 1) { echo ' dark'; } ?>">

	<head>

		<!-- Basic -->

		<?php $this->load->view('template6/lheader.php'); ?>

		<!-- Favicon -->

		<link rel="shortcut icon" href="<?php echo base_url().'application/views/template6/'; ?>img/favicon.ico" type="image/x-icon" />

		<link rel="apple-touch-icon" href="<?php echo base_url().'application/views/template6/'; ?>img/apple-touch-icon.png">

		<!-- Mobile Metas -->

		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template6/'; ?>vendor/bootstrap/css/bootstrap.min.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template6/'; ?>vendor/font-awesome/css/font-awesome.min.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template6/'; ?>vendor/simple-line-icons/css/simple-line-icons.min.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template6/'; ?>vendor/owl.carousel/assets/owl.carousel.min.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template6/'; ?>vendor/owl.carousel/assets/owl.theme.default.min.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template6/'; ?>vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template6/'; ?>css/theme.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template6/'; ?>css/theme-elements.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template6/'; ?>css/theme-blog.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template6/'; ?>css/theme-shop.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template6/'; ?>css/theme-animate.css">

		<!-- Skin CSS -->

		<?php include "css/skins/skin-corporate-3.php"; ?>

		<!-- Theme Custom CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template6/'; ?>css/custom.css">

		<!-- Head Libs -->

		<script src="<?php echo base_url().'application/views/template6/'; ?>vendor/modernizr/modernizr.min.js"></script>

	</head>

	<body>

		<div class="body">

			<header id="header" class="header-no-border-bottom" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 148, "stickySetTop": "-148px", "stickyChangeLogo": false}'>

				<div class="header-body">

					<div class="header-container container">

						<div class="header-row">

							<div class="header-column">

								<div class="header-logo">

									<a href="<?php echo base_url(); ?>">

										<img alt="Porto" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="<?php echo base_url().'images/logo.png'; ?>">

									</a>

								</div>

							</div>

							<div class="header-column">

								<ul class="header-extra-info hidden-xs">

									<li>

										<div class="feature-box feature-box-style-3">

											<div class="feature-box-icon">

												<i class="fa fa-phone"></i>

											</div>

											<div class="feature-box-info">

												<h4 style="padding-top: 6%;" class="mb-none"><?=$telefon_contact?></h4>

												<p><small>&nbsp;</small></p>

											</div>

										</div>

									</li>

									<li>

										<div class="feature-box feature-box-style-3">

											<div class="feature-box-icon">

												<i class="fa fa-envelope"></i>

											</div>

											<div class="feature-box-info">

												<h4 style="padding-top: 6%;" class="mb-none"><?=$email_contact?></h4>

												<p><small>&nbsp;</small></p>

											</div>

										</div>

									</li>

								</ul>

							</div>

						</div>

					</div>

					<div style="margin-top: 2%;" class="header-container header-nav header-nav-bar header-nav-bar-primary">

						<div class="container">

							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">

								<i class="fa fa-bars"></i>

							</button>

							<div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">

								<nav>

									<ul class="nav nav-pills" id="mainNav">

										<li class="">

											<a class="" href="<?php echo base_url();?>">

												Home

											</a>

										</li>

										<li class="active">

											<a class="" href="<?php echo base_url().'main/produse/'; ?>">

												Produse

											</a>

										</li>

										<li class="">

											<a class="" href="<?php echo base_url().'main/blog/'; ?>">

												Blog

											</a>

										</li>

										<li class="">

											<a class="" href="<?php echo base_url().'main/contact/'; ?>">

												Contact

											</a>

										</li>

										<?php
									        $query = $this->db->query("SELECT * FROM pages");
									        foreach ($query->result() as $row)
									        {
									            $id = $row->id;
									            $show_menu = $row->show_menu;
									            $target_blank = $row->target_blank;

									            $titlu = $row->titlu;
									            $str = $titlu;
									            $arr = explode(" ",$str);
									            $linie = implode("-",$arr);

									            if($id!=1 && $show_menu==1) {
									    ?>
									                 
									    <li class="">

											<a href="<?php echo base_url().'page/'.$id.'/'.$linie; ?>" <?php if($target_blank == 1) echo 'target="_blank"';?> >

												<?=$titlu?>

											</a>

										</li>

									    <?php }} ?>

									</ul>

								</nav>

							</div>

						</div>

					</div>

				</div>

			</header>

			<div role="main" class="main">



				<section class="page-header">

					<div class="container">

						<div class="row">

							<div class="col-md-12">

								<h1>Comanda</h1>

							</div>

						</div>

					</div>

				</section>



				<!-- Google Maps - Go to the bottom of the page to change settings and map location. 

				<div id="googlemaps" class="google-map"></div>	-->



				<div class="container">



					<div class="row">

						<div class="">

							<div class="alert alert-success hidden" id="contactSuccess">

								<strong>Success!</strong> Your message has been sent to us.

							</div>



							<div class="alert alert-danger hidden" id="contactError">

								<strong>Error!</strong> There was an error sending your message.

							</div>



							<h2 class="mb-sm mt-sm"><strong>Produs: <?=$this->input->post('nume_produs')?> &nbsp;&nbsp; Pret: <?=$this->input->post('pret')?></strong></h2>

							<?php $this->load->helper("form");

		                      $attributes = array('class' => '', 'id' => 'form1');

		                      echo form_open("main/trimite_comanda", $attributes);

		                      echo validation_errors(); ?>

								<div class="row">

									<div class="form-group">

										<div class="col-md-3">

											<label>Nume *</label>

											<!-- <input type="text" data-msg-required="Numele e obligatoriu." maxlength="100" class="form-control" name="name" id="name" required> -->
											<?php 
						                        $data = array(

						                            "name" => "nume",

						                            "type" => "text",

						                            "data-msg-required" => "Numele e obligatoriu.",

						                            "maxlength" => "100",

						                            "class" => "form-control",

						                            "id" => "name",

						                            "required" => ""

						                            );  

						                        echo form_input($data); ?>

										</div>

										<div class="col-md-3">

											<label>Email *</label>

											<?php 
						                        $data = array(

						                            "name" => "email",

						                            "type" => "email",

						                            "data-msg-required" => "Email-ul e obligatoriu.",

						                            "data-msg-email" => "Adresa de email nu e valida.",

						                            "maxlength" => "100",

						                            "class" => "form-control",

						                            "id" => "email",

						                            "required" => ""

						                            );  

						                        echo form_input($data); ?>

										</div>

										<label style="display:none;">
						                      <?php 

						                        $data = array(

						                            "name" => "nume_produs",

						                            "type" => "text",

						                            "value" => $this->input->post('nume_produs')

						                            );  

						                        echo form_input($data); ?>

						                </label>
						                <label style="display:none;">
						                      <?php 

						                        $data = array(

						                            "name" => "pret",

						                            "type" => "text",

						                            "value" => $this->input->post('pret')

						                            );  

						                        echo form_input($data); ?>

						                </label>

										<div class="col-md-3">

											<label>Numar de telefon *</label>

											<?php 

						                        $data = array(

						                            "name" => "telefon",

						                            "type" => "text",

						                            "data-msg-required" => "Numarul de telefon e obligatoriu.",

						                            "maxlength" => "100",

						                            "class" => "form-control",

						                            "id" => "subject",

						                            "required" => ""

						                            );  

						                        echo form_input($data);

						                    ?>

										</div>

										<div class="col-md-3">

											<label>Adresa de livrare *</label>

											<!--<input type="text" value="" data-msg-required="Adresa de livrare e obligatorie." maxlength="1000" class="form-control" name="subject" id="subject" required> -->
											<?php 
						                        $data = array(

						                            "name" => "adresa",

						                            "type" => "text",

						                            "data-msg-required" => "Adresa de livrare e obligatorie.",

						                            "maxlength" => "1000",

						                            "class" => "form-control",

						                            "id" => "subject",

						                            "required" => ""

						                            );  

						                        echo form_input($data); ?>

										</div>

									</div>

								</div>

								<div class="row">

									

								</div>

								<div class="row">

									<div class="form-group">

										<div class="col-md-12">

											<label>Alte adaugări</label>

											 <?php 
						                        $data = array(

						                            "name" => "mesaj",

						                            "data-msg-required" => "Adresa de livrare e obligatorie.",

						                            "maxlength" => "5000",

						                            "class" => "form-control",

						                            "id" => "message",

						                            "rows" => "15"

						                            );  

						                        echo form_textarea($data); ?>

										</div>

									</div>

								</div>

								<div class="row">

									<div class="col-md-12">

										<?php
					                        $data = array(
					                          "name" => "send",
					                          "type" => "submit",
					                          "value" => "Comanda",
					                          "class" => "btn btn-primary btn-lg mb-xlg",
					                          "data-loading-text" => "Procesare..."
					                        );  
					                        echo form_submit($data); ?>

									</div>

								</div>

							<?php echo form_close(); ?>  

						</div>



					</div>



				</div>



			</div>



			<footer id="footer">

					<div class="container">

						<div class="row">

	

							<div class="col-md-8">

								<p>© Copyright 2016. All Rights Reserved.</p>

							</div>

							<center><div class="col-md-4">

								<ul class="social-icons">

									<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>

									<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>

									<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>

								</ul>

							</div> </center>

						</div>

					</div>

			</footer>

		</div>

		<!-- Vendor -->

		<script src="<?php echo base_url().'application/views/template6/'; ?>vendor/jquery/jquery.min.js"></script>

		<script src="<?php echo base_url().'application/views/template6/'; ?>vendor/jquery.appear/jquery.appear.min.js"></script>

		<script src="<?php echo base_url().'application/views/template6/'; ?>vendor/jquery.easing/jquery.easing.min.js"></script>

		<script src="<?php echo base_url().'application/views/template6/'; ?>vendor/jquery-cookie/jquery-cookie.min.js"></script>

		<script src="<?php echo base_url().'application/views/template6/'; ?>vendor/bootstrap/js/bootstrap.min.js"></script>

		<script src="<?php echo base_url().'application/views/template6/'; ?>vendor/common/common.min.js"></script>

		<script src="<?php echo base_url().'application/views/template6/'; ?>vendor/jquery.validation/jquery.validation.min.js"></script>

		<script src="<?php echo base_url().'application/views/template6/'; ?>vendor/jquery.stellar/jquery.stellar.min.js"></script>

		<script src="<?php echo base_url().'application/views/template6/'; ?>vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

		<script src="<?php echo base_url().'application/views/template6/'; ?>vendor/jquery.gmap/jquery.gmap.min.js"></script>

		<script src="<?php echo base_url().'application/views/template6/'; ?>vendor/jquery.lazyload/jquery.lazyload.min.js"></script>

		<script src="<?php echo base_url().'application/views/template6/'; ?>vendor/isotope/jquery.isotope.min.js"></script>

		<script src="<?php echo base_url().'application/views/template6/'; ?>vendor/owl.carousel/owl.carousel.min.js"></script>

		<script src="<?php echo base_url().'application/views/template6/'; ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

		<script src="<?php echo base_url().'application/views/template6/'; ?>vendor/vide/vide.min.js"></script>
		

		<!-- Theme Base, Components and Settings -->

		<script src="<?php echo base_url().'application/views/template6/'; ?>js/theme.js"></script>

		<!-- Current Page Vendor and Views -->

		<script src="js/views/view.contact.js"></script>

		

		<!-- Theme Custom -->

		<script src="js/custom.js"></script>

		

		<!-- Theme Initialization Files -->

		<script src="js/theme.init.js"></script>



		<script src="http://maps.google.com/maps/api/js"></script>

		<script>



			/*

			Map Settings



				Find the Latitude and Longitude of your address:

					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm

					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/



			*/



			// Map Markers

			var mapMarkers = [{

				address: "New York, NY 10017",

				html: "<strong>New York Office</strong><br>New York, NY 10017",

				icon: {

					image: "img/pin.png",

					iconsize: [26, 46],

					iconanchor: [12, 46]

				},

				popup: true

			}];



			// Map Initial Location

			var initLatitude = 40.75198;

			var initLongitude = -73.96978;



			// Map Extended Settings

			var mapSettings = {

				controls: {

					draggable: (($.browser.mobile) ? false : true),

					panControl: true,

					zoomControl: true,

					mapTypeControl: true,

					scaleControl: true,

					streetViewControl: true,

					overviewMapControl: true

				},

				scrollwheel: false,

				markers: mapMarkers,

				latitude: initLatitude,

				longitude: initLongitude,

				zoom: 16

			};



			var map = $("#googlemaps").gMap(mapSettings);



			// Map Center At

			var mapCenterAt = function(options, e) {

				e.preventDefault();

				$("#googlemaps").gMap("centerAt", options);

			}



		</script>



		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.

		<script>

			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		

			ga('create', 'UA-12345678-1', 'auto');

			ga('send', 'pageview');

		</script>

		 -->



	</body>

</html>

