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

		<?php $this->load->view('template3/lheader.php'); ?>

		<!-- Web Fonts  -->

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template3/';?>vendor/bootstrap/css/bootstrap.min.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template3/';?>vendor/font-awesome/css/font-awesome.min.css">

		<!-- Theme CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template3/';?>css/theme.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template3/';?>css/theme-elements.css">

		<!-- Current Page CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template3/';?>vendor/rs-plugin/css/settings.css" media="screen">

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

			<div class="container">

				<div class="row">

					<hr class="tall">

				</div>

			</div>

				<div class="container">
					<div class="row center">

						<div class="col-md-12">

							<h1 class="mb-sm word-rotator-title">

								 Despre noi

							</h1>

							<p class="lead">

								<?php echo $despre; ?>

							</p>

						</div>

					</div>

				</div>

			<?php $query = $this->db->query('SELECT * FROM pages WHERE id = "1" ');
			    foreach ($query->result() as $row)
			    {
			      $cont = $row->continut;
			      $video = $row->video;

			      $show_site = $row->show_site;
			    } ?>

			<?php if($show_site == 1) { ?>

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

			<?php } ?>

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

					<section class="section section-default section-footer">

						<div class="container">

							<div class="row">

								<div class="">

									<div class="recent-posts mb-xl">

										<center><h2><strong>Servicii</strong></h2></center>

										<div class="row">

											<div class="owl-theme mb-none" data-plugin-options='{"items": 1}'>

												<div>

													<div class="col-md-3">

														<article>

															<h4 class="heading-primary"><a><?=$titlu1?></a></h4>



															<p><?=$continut1?></p>

														</article>

													</div>

													<div class="col-md-3">

														<article>

															<h4 class="heading-primary"><a><?=$titlu2?></a></h4>

															<p><?=$continut2?></p>

														</article>

													</div>

													<div class="col-md-3">

														<article>

															<h4 class="heading-primary"><a><?=$titlu3?></a></h4>

															<p><?=$continut3?></p>

														</article>

													</div>

													<div class="col-md-3">

														<article>

															<h4 class="heading-primary"><a><?=$titlu4?></a></h4>

															<p><?=$continut4?></p>

														</article>

													</div>

												</div>

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

					</section>

				<?php } ?>

			</div>

			<?php $this->load->view('template3/footer.php'); ?>

		</div>

		<!-- Vendor -->

		<script src="<?php echo base_url().'application/views/template3/';?>vendor/jquery/jquery.min.js"></script>

		<!-- Theme Base, Components and Settings -->

		<script src="<?php echo base_url().'application/views/template3/';?>js/theme.js"></script>

		<!-- Current Page Vendor and Views -->

		<script src="<?php echo base_url().'application/views/template3/';?>vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>

		<script src="<?php echo base_url().'application/views/template3/';?>vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Theme Initialization Files -->

		<script src="<?php echo base_url().'application/views/template3/';?>js/theme.init.js"></script>

	</body>

</html>