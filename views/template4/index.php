<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$query = $this->db->query('SELECT * FROM general');

foreach ($query->result() as $row)

{

  $titlu = $row->titlu_nume_site;

  $meta_desc = $row->default_meta_description;

  $meta_key = $row->default_meta_key;

  $ftext = $row->footer_text;

  $flink = $row->footer_link;

  $telefon_contact = $row->telefon_contact;

  $email_contact = $row->email_contact;

  $despre = $row->about;

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

		<?php $this->load->view('template4/lheader.php'); ?>

		<!-- Web Fonts  -->

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template4/';?>vendor/bootstrap/css/bootstrap.min.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template4/';?>vendor/font-awesome/css/font-awesome.min.css">

		<!-- Theme CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template4/';?>css/theme.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template4/';?>css/theme-elements.css">

		<!-- Current Page CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template4/';?>vendor/rs-plugin/css/settings.css" media="screen">

		<!-- Skin CSS -->

		<?php include "css/skins/default.php"; ?>

	</head>

	<body>

		<div class="body">

			<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>

				<div class="header-body">

					<div class="header-container container">

						<div class="header-row">

							<div class="header-column">

								<div class="header-logo">

									<a href="<?php echo base_url(); ?>">

										<img alt="" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="<?php echo base_url().'images/logo.png'; ?>">

									</a>

								</div>

							</div>

							<div class="header-column">

								<div class="header-row">

									<div class="">

											<div class="input-group">

												<br><br>

											</div>

									</div>

									

								</div>

								<div class="header-row">

									<div class="header-nav">

										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">

											<i class="fa fa-bars"></i>

										</button>

										<ul class="header-social-icons social-icons hidden-xs">

										<?php $query = $this->db->query('SELECT * FROM general');
										foreach ($query->result() as $row)
										{

										    $facebook_link = $row->facebook_link;

										    $twiter_link = $row->twiter_link;

										    $google_link = $row->google_link;

										}?>  

											<li class="social-icons-facebook"><a href="<?=$facebook_link?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>

											<li class="social-icons-twitter"><a href="<?=$twiter_link?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>

											<li class="social-icons-googleplus"><a href="<?=$google_link?>" target="_blank" title="Google-plus"><i class="fa fa-google-plus"></i></a></li>

										</ul>

										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">

											<nav>

												<ul class="nav nav-pills" id="mainNav">

													<li class="active">

														<a class="" href="<?php echo base_url();?>">

															Home

														</a>

													</li>

													<li class="">

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

						</div>

					</div>

				</div>

			</header>

			<div role="main" class="main">

				<div class="slider-container rev_slider_wrapper" style="height: 700px;">

					<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"delay": 9000, "gridwidth": 800, "gridheight": 700}'>

						<ul>

							<li data-transition="fade">

								<img src="<?php echo base_url().'/images/slide1.jpg'; ?>"  

									alt=""

									data-bgposition="center center" 

									data-bgfit="cover" 

									data-bgrepeat="no-repeat" 

									class="rev-slidebg">

								

							</li>

							<li data-transition="fade">

								<img src="<?php echo base_url().'/images/slide2.jpg'; ?>"  

									alt=""

									data-bgposition="center center" 

									data-bgfit="cover" 

									data-bgrepeat="no-repeat" 

									class="rev-slidebg">

							</li>

							<li data-transition="fade">

								<img src="<?php echo base_url().'/images/slide3.jpg'; ?>"  

									alt=""

									data-bgposition="center center" 

									data-bgfit="cover" 

									data-bgrepeat="no-repeat" 

									class="rev-slidebg">	

							</li>

						</ul>

					</div>

				</div>

				<?php 
			      $query = $this->db->query('SELECT * FROM servicii');
			        foreach ($query->result() as $row)
			        {
			          $show = $row->da;

			          $titlu1 = $row->titlu1;
			          $continut1 = $row->continut1;

			          $titlu2 = $row->titlu2;
			          $continut2 = $row->continut2;

			          $titlu3 = $row->titlu3;
			          $continut3 = $row->continut3;

			          $titlu4 = $row->titlu4;
			          $continut4 = $row->continut4;
			        } 

			  if($show == 1) { ?>

				<div class="container">

				<hr class="tall">

					<div class="row">

						<div class="col-md-6">

							<div class="feature-box feature-box-style-2">

								<div class="feature-box-info">

									<center><h4 class="mb-xs"><?=$titlu1?></h4></center>

									<p><?=$continut1?></p>

								</div>

							</div>

						</div>

						<div class="col-md-6">

							<div class="feature-box feature-box-style-2">

								<div class="feature-box-info">

									<center><h4 class="mb-xs"><?=$titlu2?></h4></center>

									<p><?=$continut2?></p>

								</div>

							</div>

						</div>

					</div>

					<div class="row mt-lg">

						<div class="col-md-6">

							<div class="feature-box feature-box-style-2">

								<div class="feature-box-info">

									<center><h4 class="mb-xs"><?=$titlu3?></h4></center>

									<p><?=$continut3?></p>

								</div>

							</div>

						</div>

						<div class="col-md-6">

							<div class="feature-box feature-box-style-2">

								<div class="feature-box-info">

									<center><h4 class="mb-xs"><?=$titlu4?></h4></center>

									<p><?=$continut4?></p>

								</div>

							</div>

						</div>

					</div>

				</div>				

				<?php } ?>

				<section class="video section section-text-light section-video section-center mt-none" data-video-path="<?php echo base_url().'application/views/template4/';?>video/black" data-plugin-video-background data-plugin-options='{"posterType": "jpg", "position": "100% 100%", "overlay": true}'>

					<div class="container">

						<div class="row">

							<div class="col-md-12">

								<div class="owl-theme nav-bottom rounded-nav mt-lg mb-none" data-plugin-options='{"items": 1, "loop": false}'>

									<div>

										<div class="col-md-12">

											<div class="testimonial testimonial-style-6 testimonial-with-quotes mb-none">

												<center>

													<div class="testimonial-author">
														<h3><strong> Despre noi </strong></h3>
													</div>

													<blockquote>

														<p><?php echo $despre; ?><br></p>
														<br>

													</blockquote>

												</center>

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<?php $query = $this->db->query('SELECT * FROM pages WHERE id = "1" ');
					    foreach ($query->result() as $row)
					    {
					      $cont = $row->continut;
					      $video = $row->video;

					      $show_site = $row->show_site;
					    } ?>

					<?php if($show_site == 1) { ?>

				<div class="container">

					<div class="container">

							<div class="row">

								<hr class="tall">

							</div>

					</div>

						<div class="container">

							<div class="row center">

								<div class="col-md-12">

									<p class="lead">

										 <?=$cont?>

		        						<?=$video?>

									</p>

								</div>

							</div>

						</div>

				</div>

				<?php } ?>

			</div>

			<hr class="tall">

			<?php $this->load->view('template4/footer.php'); ?>

		</div>

		<!-- Vendor -->

		<script src="<?php echo base_url().'application/views/template4/';?>vendor/jquery/jquery.min.js"></script>

		<script src="<?php echo base_url().'application/views/template4/';?>vendor/common/common.min.js"></script>

		<script src="<?php echo base_url().'application/views/template4/';?>vendor/vide/vide.min.js"></script>

		<!-- Theme Base, Components and Settings -->

		<script src="<?php echo base_url().'application/views/template4/';?>js/theme.js"></script>

		<!-- Current Page Vendor and Views -->

		<script src="<?php echo base_url().'application/views/template4/';?>vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>

		<script src="<?php echo base_url().'application/views/template4/';?>vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Theme Initialization Files -->

		<script src="<?php echo base_url().'application/views/template4/';?>js/theme.init.js"></script>

	</body>

</html>