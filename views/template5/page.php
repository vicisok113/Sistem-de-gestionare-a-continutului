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
    }
?>
<html class="<?php if($layout == 1) { echo ' boxed'; } if($bgcolor == 1) { echo ' dark'; } ?>">

	<head>

		<!-- Basic -->

		<?php $this->load->view('template5/lheader.php'); ?>

		<!-- Web Fonts  -->

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template5/';?>vendor/bootstrap/css/bootstrap.min.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template5/';?>vendor/font-awesome/css/font-awesome.min.css">

		<!-- Theme CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template5/';?>css/theme.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template5/';?>css/theme-elements.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template5/';?>css/theme-blog.css">

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

			<?php $this->load->view('template5/footer.php'); ?>

		</div>

		<!-- Vendor -->

		<script src="<?php echo base_url().'application/views/template5/';?>vendor/jquery/jquery.min.js"></script>

		<script src="<?php echo base_url().'application/views/template5/';?>vendor/common/common.min.js"></script>

		<!-- Theme Base, Components and Settings -->

		<script src="<?php echo base_url().'application/views/template5/';?>js/theme.js"></script>
		
		<!-- Theme Initialization Files -->

		<script src="<?php echo base_url().'application/views/template5/';?>js/theme.init.js"></script>

	</body>

</html>

