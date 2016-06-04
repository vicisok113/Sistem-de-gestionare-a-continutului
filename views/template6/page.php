<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$query = $this->db->query("SELECT * FROM pages WHERE id = '". $name ."'");

foreach ($query->result() as $row)

{

    $id = $row->id;

    $nume = $row->titlu;

    $seo_title = $row->seo_title;

    $seo_desc = $row->seo_description;

    $seo_key = $row->seo_key;

    $descriere = $row->continut;

    $video = $row->video;

} ?>

<!DOCTYPE html>

<?php
    $query = $this->db->query('SELECT * FROM general');
    foreach ($query->result() as $row)
    {
        $layout = $row->layout;
        $bgcolor = $row->bgcolor;
        $telefon_contact = $row->telefon_contact;
  		$email_contact = $row->email_contact;
    }
?>
<html class="<?php if($layout == 1) { echo ' boxed'; } if($bgcolor == 1) { echo ' dark'; } ?>">

	<head>

		<!-- Basic -->

		<?php $this->load->view('template6/lheader.php'); ?>

		<!-- Web Fonts  -->

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template6/';?>vendor/bootstrap/css/bootstrap.min.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template6/';?>vendor/font-awesome/css/font-awesome.min.css">

		<!-- Theme CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template6/';?>css/theme.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template6/';?>css/theme-elements.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template6/';?>css/theme-blog.css">

		<!-- Skin CSS -->

		<?php include "css/skins/skin-corporate-3.php"; ?>

		<!-- Head Libs -->

		<script src="<?php echo base_url().'application/views/template6/';?>vendor/modernizr/modernizr.min.js"></script>

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
									                 
									    <li <?php if($name==$id) echo 'class="active"'; ?>>

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

				<div class="container">

					<div class="row">

						<hr class="tall">

					</div>

				</div>

				<div class="container">

					<div class="row">

						<div class="">

							<div class="blog-posts single-post">

								<article class="post post-large blog-single-post">

									<div class="post-content">

										<center><h2><a><?=$nume?></a></h2></center><br><br>

										<?=$descriere?>

									</div>

								</article>

							</div>

						</div>

					</div>

				</div>

			</div>

			<?php $this->load->view('template6/footer.php'); ?>

		</div>

		<!-- Vendor -->

		<script src="<?php echo base_url().'application/views/template6/';?>vendor/jquery/jquery.min.js"></script>

		<script src="<?php echo base_url().'application/views/template6/';?>vendor/common/common.min.js"></script>
		<!-- Theme Base, Components and Settings -->

		<script src="<?php echo base_url().'application/views/template6/';?>js/theme.js"></script>

		<!-- Theme Initialization Files -->

		<script src="<?php echo base_url().'application/views/template6/';?>js/theme.init.js"></script>

	</body>

</html>

