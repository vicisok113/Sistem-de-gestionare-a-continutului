<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$query = $this->db->query("SELECT * FROM produse WHERE id = '". $name ."'");
foreach ($query->result() as $row)
{
    $id = $row->id;
    $nume = $row->titlu;
    $seo_title = $row->seo_title;
    $seo_desc = $row->seo_description;
    $seo_key = $row->seo_key;
    $pret = $row->pret;
    $categorie = $row->categorie;
    $descriere = $row->continut;
    $video = $row->video;
    $nume_imagine = $row->nume_imagine;
}?>

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

		<?php $this->load->view('template9/lheader.php'); ?>

		<!-- Web Fonts  -->

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template9/'; ?>vendor/bootstrap/css/bootstrap.min.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template9/'; ?>vendor/font-awesome/css/font-awesome.min.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template9/';?>vendor/simple-line-icons/css/simple-line-icons.min.css">

		<!-- Theme CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template9/'; ?>css/theme.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template9/'; ?>css/theme-elements.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template9/'; ?>css/theme-shop.css">

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

			<div role="main" class="main shop">



				<div class="container">



					<div class="row">

						<div class="col-md-12">

							<hr class="tall">

						</div>

					</div>



					<div class="row">

						<div class="col-md-6">



							<div class="owl-theme" data-plugin-options='{"items": 1}'>

								<div>

									<div class="">

										<img alt="" class="img-responsive img-rounded" src="<?php echo base_url().'images/'.$nume_imagine; ?>">

									</div>

								</div>

							</div>



						</div>



						<div class="col-md-6">



							<div class="summary entry-summary">



								<h1 class="mb-none"><strong><?=$nume?></strong></h1>



								<p class="price">

									<span class="amount">Pret: <?=$pret?></span>

								</p>



								<p class="taller"><?=$descriere?></p>

								<?php if($video !== "") { ?>
									<center>
									<?php
									$url = $video;
									preg_match(
									        '/[\\?\\&]v=([^\\?\\&]+)/',
									        $url,
									        $matches
									    );
									$id = $matches[1];
									 
									$width = '600';
									$height = '400';
									echo '<object width="' . $width . '" height="' . $height . '"><param name="movie" value="http://www.youtube.com/v/' . $id . '&amp;hl=en_US&amp;fs=1?rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/' . $id . '&amp;hl=en_US&amp;fs=1?rel=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="' . $width . '" height="' . $height . '"></embed></object>';
									?>
									</center>
								<?php } ?>
								<br>

								<div class="product_meta">

									<span class="posted_in">Categorie: <a rel="tag" href=""><?=$categorie?></a></span>

								</div>

								<br>

								<p>...<a href="<?php echo base_url().'main/produse/'; ?>">Produse</a>/<a href="<?php echo base_url().'main/produse/'; ?>"><?php echo $categorie?></a>/<a href="<?php echo base_url().'main/produs/'.$id; ?>"><?php echo $nume;?></a></p>

							</div>

						</div>

					</div>

					<form action="<?php echo base_url().'main/comanda'; ?>" method="post">

					    <input style="display:none;" type="text" name="nume_produs" value="<?php echo $nume; ?>">

					    <input style="display:none;" type="text" name="pret" value="<?php echo $pret; ?>">

					    <!-- <input style="float:right;cursor:pointer;" type="submit" class="btn" value="Comanda"> -->
					    <button style="margin-left: 90%;" type="submit" class="btn btn-primary mr-xs mb-sm">Comanda</button>

					</form>

				</div>

			</div>

			<?php $this->load->view('template9/footer.php'); ?>

		</div>

		<!-- Vendor -->

		<script src="<?php echo base_url().'application/views/template9/'; ?>vendor/jquery/jquery.min.js"></script>

		<script src="<?php echo base_url().'application/views/template9/'; ?>vendor/common/common.min.js"></script>

		<!-- Theme Base, Components and Settings -->

		<script src="<?php echo base_url().'application/views/template9/'; ?>js/theme.js"></script>

		<!-- Theme Initialization Files -->

		<script src="<?php echo base_url().'application/views/template9/'; ?>js/theme.init.js"></script>
	</body>

</html>

