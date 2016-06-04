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

                 <li><a href="<?php echo base_url().'main/produse/'; ?>">Produse</a></li>

                 <li><a href="<?php echo base_url().'main/blog/'; ?>">Blog</a></li>

                 <li class="current"><a href="<?php echo base_url().'main/contact/'; ?>">Contact</a></li>

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

<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - March 10, 2014!</div>

  <div class="container_12">

    <div class="grid_12">

      <h2>Contact</h2>

           <!-- <div class="map">

            <figure class=" ">

                          <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>

               </figure>

          </div> -->

    </div>  

    <div class="clear"></div>

    <div class="grid_3">

      <h3 class="head1">Gaseste-ne</h3>

      <p>

      Telefon: <span class="col1"><?php echo $telefon_contact; ?></span><br></p>

      E-mail: <a href="#" class="col1"><?php echo $email_contact; ?></a>

    </div>

    <div class="grid_9">

      <h3 class="head1">Formular de contact</h3>



                      <?php $this->load->helper("form");

                      $attributes = array('class' => '', 'id' => 'form1');

                      echo form_open("main/send_email_template_complex", $attributes);

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

                      <label class="subiect">

                      <?php 

                        $data = array(

                            "name" => "subiect",

                            "type" => "text",

                            "placeholder" => "Subiect",

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

                      <?php $data = array(
                          "name" => "send",
                          "type" => "submit",
                          "value" => "Trimite",
                          "style" => "background-color: #BEEDEC;"
                        );
                        echo form_submit($data); ?>

                      <!--<a href="#" data-type="reset" class="btn">Clear</a>

                      <a href="#" data-type="submit" class="btn">Send</a>-->

                      </div>

                      </div>

                       

    </div>

  </div>

</div><?php echo form_close(); ?>  

<!--==============================footer=================================-->

<? $this->load->view('template2/footer.php'); ?>

</body>

</html>



