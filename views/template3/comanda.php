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

		<?php $this->load->view('template3/lheader.php'); ?> 

		<!-- Web Fonts  -->

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template3/'; ?>vendor/bootstrap/css/bootstrap.min.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template3/'; ?>vendor/font-awesome/css/font-awesome.min.css">

		<!-- Theme CSS -->

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template3/'; ?>css/theme.css">

		<link rel="stylesheet" href="<?php echo base_url().'application/views/template3/'; ?>css/theme-elements.css">

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

			<?php $this->load->view('template3/footer.php'); ?>

		</div>

		<!-- Vendor -->

		<script src="<?php echo base_url().'application/views/template3/'; ?>vendor/jquery/jquery.min.js"></script>

		<script src="<?php echo base_url().'application/views/template3/'; ?>vendor/common/common.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->

		<script src="<?php echo base_url().'application/views/template3/'; ?>js/theme.js"></script>

		<!-- Theme Initialization Files -->

		<script src="<?php echo base_url().'application/views/template3/'; ?>js/theme.init.js"></script>
		
	</body>

</html>

