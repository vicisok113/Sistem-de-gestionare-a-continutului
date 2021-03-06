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

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template9/'; ?>vendor/simple-line-icons/css/simple-line-icons.min.css">

		<!-- Theme CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template9/'; ?>css/theme.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template9/'; ?>css/theme-elements.css">

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

													<li class="active">

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

								<h1>Contact</h1>

							</div>

						</div>

					</div>

				</section>



				<!-- Google Maps - Go to the bottom of the page to change settings and map location. 

				<div id="googlemaps" class="google-map"></div>	-->



				<div class="container">



					<div class="row">

						<div class="col-md-6">



							<div class="alert alert-success hidden" id="contactSuccess">

								<strong>Success!</strong> Your message has been sent to us.

							</div>



							<div class="alert alert-danger hidden" id="contactError">

								<strong>Error!</strong> There was an error sending your message.

							</div>



							<h2 class="mb-sm mt-sm"><strong>Contact</strong></h2>

							<?php $this->load->helper("form");

		                      $attributes = array('class' => '', 'id' => 'form1');

		                      echo form_open("main/send_email_template9complex", $attributes);

		                      echo validation_errors(); ?>

								<div class="row">

									<div class="form-group">

										<div class="col-md-6">

											<label>Nume *</label>

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

						                        echo form_input($data);
						                      ?>

										</div>

										<div class="col-md-6">

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

					                            "required" => "",

					                            );  

					                        echo form_input($data);
					                        ?>

										</div>

									</div>

								</div>

								<div class="row">

									<div class="form-group">

										<div class="col-md-12">

											<label>Subiect *</label>

											<?php 
					                        $data = array(

					                            "name" => "subiect",

					                            "type" => "text",

					                            "data-msg-required" => "Subiectul e obligatoriu.",

					                            "maxlength" => "100",

					                            "class" => "form-control",

					                            "id" => "subject",

					                            "required" => "",

					                            );  

					                        echo form_input($data);
					                      ?>

										</div>

									</div>

								</div>

								<div class="row">

									<div class="form-group">

										<div class="col-md-12">

											<label>Message *</label>

											<?php 
					                        $data = array(

					                            "name" => "mesaj",

					                            "data-msg-required" => "Mesajul e obligatoriu.",

					                            "maxlength" => "5000",

					                            "rows" => "10",

					                            "class" => "form-control",

					                            "id" => "message",

					                            "required" => "",

					                            );  

					                        echo form_textarea($data);
					                      ?>

										</div>

									</div>

								</div>

								<div class="row">

									<div class="col-md-12">

										<?php $data = array(
				                          "name" => "send",
				                          "type" => "submit",
				                          "value" => "Trimite",
				                          "class" => "btn btn-primary btn-lg mb-xlg",
				                          "data-loading-text" => "Procesare...",
				                        );
				                        echo form_submit($data); ?>

									</div>

								</div>

							<?php echo form_close(); ?> 

						</div>

						<div class="col-md-6">



						<br><br><br>

							<hr>



							<h4 class="heading-primary"><strong>Gaseste-ne</strong></h4>

							<ul class="list list-icons list-icons-style-3 mt-xlg">

								<li><i class="fa fa-phone"></i> <strong>Telefon:</strong> <?=$telefon_contact;?></li>

								<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a><?=$email_contact;?></a></li>

							</ul>

							<hr>

						</div>

					</div>

				</div>

			</div>

			<?php $this->load->view('template9/footer.php'); ?>

		</div>

		<!-- Vendor -->

		<script src="<?php echo base_url().'application/views/template9/'; ?>vendor/jquery/jquery.min.js"></script>

		<script src="<?php echo base_url().'application/views/template9/'; ?>vendor/common/common.min.js"></script>


		<!-- Theme Base, Components and Settings -->

		<script src="<?php echo base_url().'application/views/template9/'; ?>js/theme.js"></script>

		<!-- Current Page Vendor and Views -->

		<script src="<?php echo base_url().'application/views/template9/'; ?>js/views/view.contact.js"></script>

		<!-- Theme Initialization Files -->

		<script src="<?php echo base_url().'application/views/template9/'; ?>js/theme.init.js"></script>

	</body>

</html>

