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

}

?><!DOCTYPE html>

<html lang="en">

     <head>

     <?php $this->load->view('template2/lheader.php'); ?>

     <link rel="icon" href="<?php echo base_url().'application/views/template2/images/favicon.ico'; ?>">

     <link rel="shortcut icon" href="<?php echo base_url().'application/views/template2/images/favicon.ico'; ?>" />

     <link rel="stylesheet" href="<?php echo base_url().'application/views/template2/css/form.css'; ?>">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'application/views/template2/css/tooltipster.css'; ?>" />

     <link rel="stylesheet" href="<?php echo base_url().'application/views/template2/css/style.css'; ?>">

     <script src="<?php echo base_url().'application/views/template2/js/jquery.js'; ?>"></script>

     <script src="<?php echo base_url().'application/views/template2/js/jquery-migrate-1.2.1.js'; ?>"></script>

     <script src="<?php echo base_url().'application/views/template2/js/script.js'; ?>"></script> 

     <script src="<?php echo base_url().'application/views/template2/js/superfish.js'; ?>"></script>

     <script src="<?php echo base_url().'application/views/template2/js/TMForm.js'; ?>"></script>

     <script src="<?php echo base_url().'application/views/template2/js/jquery.ui.totop.js'; ?>"></script>

     <script src="<?php echo base_url().'application/views/template2/js/jquery.equalheights.js'; ?>"></script>

     <script src="<?php echo base_url().'application/views/template2/js/jquery.mobilemenu.js'; ?>"></script>

     <script src="<?php echo base_url().'application/views/template2/js/jquery.easing.1.3.js'; ?>"></script>

      <script src="<?php echo base_url().'application/views/template2/js/jquery.tooltipster.js'; ?>"></script>

     <script>

       $(document).ready(function(){

        $().UItoTop({ easingType: 'easeOutQuart' });

        $('.tooltip').tooltipster();

        });

     </script>

    <!--[if lt IE 9]>

       <div style=' clear: both; text-align:center; position: relative;'>

         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">

           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />

         </a>

      </div>

      <script src="js/html5shiv.js"></script>

      <link rel="stylesheet" media="screen" href="css/ie.css">

    <![endif]-->

     </head>

     <body class="" id="top">

<!--==============================header=================================--> 

<header>  

  <div class="container_12">

    <div class="grid_12">

        <h1>

        <a href="<?php echo base_url(); ?>">

          <img src="<?php echo base_url().'images/logo.png'; ?>" alt="logo">

        </a>

      </h1>

        <div class="menu_block ">

          <nav class="horizontal-nav full-width horizontalNav-notprocessed">

            <ul class="sf-menu">

                 <li><a href="<?php echo base_url(); ?>">Home</a></li>

                 <li class="current"><a href="<?php echo base_url().'main/produse/'; ?>">Produse</a></li>

                 <li><a href="<?php echo base_url().'main/blog/'; ?>">Blog</a></li>

                 <li><a href="<?php echo base_url().'main/contact/'; ?>">Contact</a></li>

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

                 <li><a href="<?php echo base_url().'page/'.$id.'/'.$linie; ?>" <?php if($target_blank == 1) echo 'target="_blank"';?> ><?=$titlu?></a></li>

                 <?php }} ?>

               </ul>

            </nav>

           <div class="clear"></div>

        </div>

      </div>      

   </div>

</header>

<!--==============================Content=================================-->

<div class="content"><div class="ic"></div>

  <div class="container_12">

    <div class="grid_12">

      <h2>Comanda</h2>

    </div>  

    <div class="clear"></div>

    <div class="">

      <h3 class="head1">Produs: <?=$this->input->post('nume_produs')?> &nbsp;&nbsp;&nbsp;&nbsp; Pret: <?=$this->input->post('pret')?></h3>

                      <?php $this->load->helper("form");

                      $attributes = array('class' => '', 'id' => 'form1');

                      echo form_open("main/trimite_comanda", $attributes);

                      echo validation_errors(); ?>

                      <div class="success_wrapper">

                      <div class="success-message">Mesajul a fost trimis</div>

                      </div>
                      
                      <label class="name">

                      <?php 

                        $data = array(

                            "name" => "nume",

                            "type" => "text",

                            "placeholder" => "Nume",

                            "data-constraints" => "@Required @JustLetters"

                            );  

                        echo form_input($data);

                      ?>

                      <span class="empty-message">*Acest camp e necesar.</span>

                      <span class="error-message">*Acesta nu e un nume valid.</span>

                      </label>

                    

                      <label class="email">

                      <?php 

                        $data = array(

                            "name" => "email",

                            "type" => "email",

                            "placeholder" => "E-mail",

                            "data-constraints" => "@Required @Email"

                            );  

                        echo form_input($data);

                        ?>

                      <!--<input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />-->

                      <span class="empty-message">*Acest camp e necesar.</span>

                      <span class="error-message">*Acesta nu e un email valid.</span>

                      </label>

                      <label style="display:none;" class="subiect">

                      <?php 

                        $data = array(

                            "name" => "nume_produs",

                            "type" => "text",

                            "value" => $this->input->post('nume_produs'),

                            "placeholder" => "Nume Produs",

                            "data-constraints" => "@Required @JustLetters"

                            );  

                        echo form_input($data);

                      ?>

                      <span class="empty-message">*Acest camp e necesar.</span>

                      <span class="error-message">*Acesta nu e un nume de produs valid.</span>

                      </label>

                      <label style="display:none;" class="subiect">

                      <?php 

                        $data = array(

                            "name" => "pret",

                            "type" => "text",

                            "value" => $this->input->post('pret'),

                            "placeholder" => "Pret",

                            "data-constraints" => "@Required @JustLetters"

                            );  

                        echo form_input($data);

                      ?>

                      <span class="empty-message">*Acest camp e necesar.</span>

                      <span class="error-message">*Acesta nu e un nume de produs valid.</span>

                      </label>

                      <label class="subiect">

                      <?php 

                        $data = array(

                            "name" => "telefon",

                            "type" => "text",

                            "placeholder" => "Numar de telefon",

                            "data-constraints" => "@Required @JustLetters"

                            );  

                        echo form_input($data);

                      ?>

                      <span class="empty-message">*Acest camp e necesar.</span>

                      <span class="error-message">*Acesta nu e un subiect valid.</span>

                      </label>


                      <label class="subiect">

                      <?php 

                        $data = array(

                            "name" => "adresa",

                            "type" => "text",

                            "placeholder" => "Adresa de livrare",

                            "data-constraints" => "@Required @JustLetters"

                            );  

                        echo form_input($data);

                      ?>

                      <span class="empty-message">*Acest camp e necesar.</span>

                      <span class="error-message">*Acesta nu e un subiect valid.</span>

                      </label>

                      <label class="message">

                      <?php 

                        $data = array(

                            "name" => "mesaj",

                            "placeholder" => "Mesaj",

                            "data-constraints" => "@Required @Length(min=20,max=999999)"

                            );  

                        echo form_textarea($data);

                      ?>

                      <span class="empty-message">*Acest camp e necesar.</span>

                      <span class="error-message">*The message is too short.</span>

                      </label>

                      <div>

                      <div class="clear"></div>

                      <div class="btns">

                      <style type="text/css">
                        .da {
                          background-color: #95C7C6;
                        }
                      </style>

                      <?php
                        $data = array(
                          "name" => "send",
                          "type" => "submit",
                          "value" => "Comanda",
                          "style" => "background-color: #BEEDEC;"
                        );  
                        echo form_submit($data); ?>

                      </div>

                      </div>

    </div>

  </div>

</div><?php echo form_close(); ?>  

<!--==============================footer=================================-->

<? $this->load->view('template2/footer.php'); ?>

</body>

</html>



