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

		<?php $this->load->view('template8/lheader.php'); ?>

		<!-- Web Fonts  -->

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template8/';?>vendor/bootstrap/css/bootstrap.min.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template8/';?>vendor/font-awesome/css/font-awesome.min.css">

		<!-- Theme CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template8/';?>css/theme.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template8/';?>css/theme-elements.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template8/';?>css/theme-shop.css">

		<!-- Skin CSS -->

		<?php include "css/skins/skin-corporate-7.php"; ?>

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

							<h1 class="mb-none"><strong>Produse</strong></h1>

						</div>

					</div>
					<br><br>

					  <?php $query = $this->db->query('SELECT * FROM categorii_produse');

			            foreach ($query->result() as $row)
			            {

			                $id1 = $row->id;

			                $categorie = $row->categorie;

			                $this->db->where('categorie', $categorie);

			                $query = $this->db->get('produse');

			                if ($query->num_rows() > 0) {

			            ?>

					<h4 class="mb-none"><strong><?=$categorie?></strong></h4>

					<div class="row">

						<ul class="products product-thumb-info-list" data-plugin-masonry>

						<?php $query = $this->db->query('SELECT * FROM produse WHERE categorie = "'.$categorie.'"');

			            foreach ($query->result() as $row)
			            {

			                $id = $row->id;

			                $nume = $row->titlu;
			                $str = $nume;
			                $arr = explode(" ",$str);
			                $linie = implode("-",$arr);

			                $pret = $row->pret; 

			                $content = $row->continut;

			                $nume_imagine = $row->nume_imagine; ?>

							<li class="col-md-3 col-sm-6 col-xs-12 product">

								<span class="product-thumb-info">

									<a href="<?php echo base_url().'produse/'.$id.'/'.$linie; ?>">

										<span class="product-thumb-info-image">

											<span class="product-thumb-info-act">

												<span class="product-thumb-info-act-left"><em>Vezi</em></span>

												<span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Detalii</em></span>

											</span>

											<img alt="" class="img-responsive" src="<?php echo base_url().'images/'.$nume_imagine?>">

										</span>

									</a>

									<span class="product-thumb-info-content">

										<a href="<?php echo base_url().'produse/'.$id.'/'.$linie; ?>">

											<h4><?=$nume?></h4>

											<span class="price">

												<span class="amount">Pret: <?=$pret?></span>

											</span></a>

											<span class="price">

												<span class="amount"><?php $small = substr($content, 0, 70);

                            						echo $small."...";?></span>

											</span>

									</span>

								</span>

							</li>
							<?php } ?>

						</ul>

					</div>

					<?php }} ?>

				</div>

			</div>

		<?php $this->load->view('template8/footer.php'); ?>

		</div>

		<!-- Vendor -->

		<script src="<?php echo base_url().'application/views/template8/';?>vendor/jquery/jquery.min.js"></script>

		<script src="<?php echo base_url().'application/views/template8/';?>vendor/common/common.min.js"></script>

		<!-- Theme Base, Components and Settings -->

		<script src="<?php echo base_url().'application/views/template8/';?>js/theme.js"></script>

		<!-- Theme Initialization Files -->

		<script src="<?php echo base_url().'application/views/template8/';?>js/theme.init.js"></script>

	</body>

</html>

