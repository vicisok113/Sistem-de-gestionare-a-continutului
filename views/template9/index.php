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

		<?php $this->load->view('template9/lheader.php'); ?>

		<!-- Web Fonts  -->

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template9/';?>vendor/bootstrap/css/bootstrap.min.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template9/';?>vendor/font-awesome/css/font-awesome.min.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template9/';?>vendor/simple-line-icons/css/simple-line-icons.min.css">

		<!-- Theme CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template9/';?>css/theme.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template9/';?>css/theme-elements.css">

		<!-- Current Page CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template9/';?>vendor/rs-plugin/css/settings.css" media="screen">

		<!-- Skin CSS -->

		<?php include 'css/skins/skin-corporate-law-office.php'; ?>

		<!-- Demo CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template9/';?>css/demos/demo-corporate-law-office.css">

	</head>

	<body>

		<div class="body">

			<header id="header" class="header-no-border-bottom" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 115, "stickySetTop": "-115px", "stickyChangeLogo": false}'>

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

								<ul class="header-extra-info">

									<li>

										<div class="feature-box feature-box-call feature-box-style-2">

											<div class="feature-box-icon">

												<i class="icon-call-end icons"></i>

											</div>

											<div class="feature-box-info">

												<h4 class="mb-none"><?=$telefon_contact?></h4>

											</div>

										</div>

									</li>

									<li class="hidden-xs">

										<div class="feature-box feature-box-mail feature-box-style-2">

											<div class="feature-box-icon">

												<i class="icon-envelope icons"></i>

											</div>

											<div class="feature-box-info">

												<h4 class="mb-none"><a href="mailto:mail@example.com"><?=$email_contact?></a></h4>

											</div>

										</div>

									</li>

								</ul>

							</div>

						</div>

					</div>

					<div class="header-container header-nav header-nav-bar header-nav-bar-primary">

						<div class="container">

							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">

								Menu <i class="fa fa-bars"></i>

							</button>

							<div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">

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

			</header>



			<div role="main" class="main">



				<div class="slider-container rev_slider_wrapper" style="height: 760px;">

					<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"delay": 9000, "gridwidth": 800, "gridheight": 760}'>

						<ul>

							<li data-title="Advocate Team" data-transition="fade">

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

				<section class="section section-default section-no-border mt-none">


							<center><div class="col-md-12">

								<h2 class="mt-xl mb-none">Despre noi</h2>

								<div class="divider divider-primary divider-small divider-small-center mb-xl">

									<hr>

								</div>

								<p class="mt-lg"><?php echo $despre; ?></p>

							</div></center>


				</section>

				<hr>

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

				<div class="container" id="practice-areas">

					<div class="row">

						<div class="col-md-12 center">

							<h2 class="mt-xl mb-none">Servicii</h2>

							<div class="divider divider-primary divider-small divider-small-center mb-xl">

								<hr>

							</div>

						</div>

					</div>



					<div class="row mt-lg">

						<div class="col-md-6">

							<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">

								<div class="feature-box-info ml-md">

									<h4 class="mb-sm"><?=$titlu1?></h4>

									<p><?=$continut1?></p>

								</div>

							</div>

						</div>

						<div class="col-md-6">

							<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">

								<div class="feature-box-info ml-md">

									<h4 class="mb-sm"><?=$titlu2?></h4>

									<p><?=$continut2?></p>

								</div>

							</div>

						</div>

						<div class="col-md-6">

							<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">

								<div class="feature-box-info ml-md">

									<h4 class="mb-sm"><?=$titlu3?></h4>

									<p><?=$continut3?></p>

								</div>

							</div>

						</div>

						<div class="col-md-6">

							<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">

								<div class="feature-box-info ml-md">

									<h4 class="mb-sm"><?=$titlu4?></h4>

									<p><?=$continut4?></p>

								</div>

							</div>

						</div>

					</div>

				</div>

			<?php } ?>

			</div>

			<?php $this->load->view('template9/footer.php'); ?>

		</div>

		<!-- Vendor -->

		<script src="<?php echo base_url().'application/views/template9/';?>vendor/jquery/jquery.min.js"></script>

		<script src="<?php echo base_url().'application/views/template9/';?>vendor/jquery.appear/jquery.appear.min.js"></script>

		<script src="<?php echo base_url().'application/views/template9/';?>vendor/common/common.min.js"></script>

		<!-- Theme Base, Components and Settings -->

		<script src="<?php echo base_url().'application/views/template9/';?>js/theme.js"></script>

		<!-- Current Page Vendor and Views -->

		<script src="<?php echo base_url().'application/views/template9/';?>vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>

		<script src="<?php echo base_url().'application/views/template9/';?>vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Current Page Vendor and Views -->

		<script src="<?php echo base_url().'application/views/template9/';?>js/views/view.contact.js"></script>

		<!-- Theme Initialization Files -->

		<script src="<?php echo base_url().'application/views/template9/';?>js/theme.init.js"></script>

	</body>

</html>

