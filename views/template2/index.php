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

}

?><!DOCTYPE html>

<html lang="en">

     <head>

     <?php $this->load->view('template2/lheader.php'); ?>

     <link rel="icon" href="<?php echo base_url().'application/views/template2/images/favicon.ico'; ?>">

     <link rel="shortcut icon" href="<?php echo base_url().'application/views/template2/images/favicon.ico'; ?>" />

     <link rel="stylesheet" href="<?php echo base_url().'application/views/template2/css/camera.css'; ?>">

    <link rel="stylesheet"  href="<?php echo base_url().'application/views/template2/css/component.css'; ?>" />

  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'application/views/template2/css/tooltipster.css'; ?>" />

     <link rel="stylesheet" href="<?php echo base_url().'application/views/template2/css/style.css'; ?>">

     <script src="<?php echo base_url().'application/views/template2/js/jquery.js'; ?>"></script>

     <script src="<?php echo base_url().'application/views/template2/js/jquery-migrate-1.2.1.js'; ?>"></script>

     <script src="<?php echo base_url().'application/views/template2/js/script.js'; ?>"></script> 

     <script src="<?php echo base_url().'application/views/template2/js/superfish.js'; ?>"></script>

     <script src="<?php echo base_url().'application/views/template2/js/jquery.ui.totop.js'; ?>"></script>

     <script src="<?php echo base_url().'application/views/template2/js/jquery.equalheights.js'; ?>"></script>

     <script src="<?php echo base_url().'application/views/template2/js/jquery.mobilemenu.js'; ?>"></script>

     <script src="<?php echo base_url().'application/views/template2/js/jquery.easing.1.3.js'; ?>"></script>

      <script src="<?php echo base_url().'application/views/template2/js/jquery.tooltipster.js'; ?>"></script>

     <script src="<?php echo base_url().'application/views/template2/js/camera.js'; ?>"></script>

     <!--[if (gt IE 9)|!(IE)]><!-->

     <script src="<?php echo base_url().'application/views/template2/js/jquery.mobile.customized.min.js'; ?>"></script>

     <!--<![endif]-->

    <script src="<?php echo base_url().'application/views/template2/js/modernizr.custom.js'; ?>"></script>

     <script>

       $(document).ready(function(){

        jQuery('#camera_wrap').camera({

            loader: 'pie',

            pagination: true ,

            minHeight: '200',

            thumbnails: true,

            height: '40.85106382978723%',

            caption: true,

            navigation: true,

            fx: 'mosaic'

          });

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

     <body class="page1" id="top">

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

                 <li class="current"><a href="<?php echo base_url(); ?>">Home</a></li>

                 <li><a href="<?php echo base_url().'main/produse/'; ?>">Produse</a></li>

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

<div class="container_12">

  <div class="grid_12">

    <div class="slider_wrapper ">

       <div class="camera_wrap" id="camera_wrap">

            <div data-thumb="<?php echo base_url().'/images/slide1.jpg'; ?>" data-src="<?php echo base_url().'/images/slide1.jpg'; ?>">

            </div>

            <div data-thumb="<?php echo base_url().'/images/slide2.jpg'; ?>" data-src="<?php echo base_url().'/images/slide2.jpg'; ?>">

            </div>

            <div data-thumb="<?php echo base_url().'/images/slide3.jpg'; ?>" data-src="<?php echo base_url().'/images/slide3.jpg'; ?>">

            </div>           

        </div>

    </div>

  </div>

</div>

<div class="page1_block">

  <div class="container_12">

    <div class="grid_12">

      <div class="center">

        <h2>Despre noi!</h2>

        <?php echo $despre; ?>

      </div>

    </div>

  </div>

</div>

<!--==============================Content=================================-->

<div class="content">

<?php $query = $this->db->query('SELECT * FROM pages WHERE id = "1" ');
        foreach ($query->result() as $row)
        {
          $cont = $row->continut;
          $video = $row->video;

          $show_site = $row->show_site;
        } ?>

<?php if($show_site == 1) { ?>
  <div class="page1_block">

    <div class="container_12">

      <div class="grid_12 center"><br>

        <?=$cont?>

        <?=$video?>

        <div class="clear"></div>

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

  <div class="container_12">

    <div class="grid_12 center">

      <h3>Servicii</h3>

    </div>

    <div class="grid_3">

      <h4><?=$titlu1?></h4>

      <?=$continut1?>

    </div>

    <div class="grid_3">

      <h4><?=$titlu2?></h4>

      <?=$continut2?>

    </div>

    <div class="grid_3">

      <h4><?=$titlu3?></h4>

      <?=$continut3?>

    </div>

    <div class="grid_3">

      <h4><?=$titlu4?></h4>

      <?=$continut4?>

    </div>

  </div>

  <?php } ?>

</div>

<!--==============================footer=================================-->

<?php $this->load->view('template2/footer.php'); ?>



    <script src="<?php echo base_url().'application/views/template2/js/classie.js'; ?>"></script>



    <script src="<?php echo base_url().'application/views/template2/js/thumbnailGridEffects.js'; ?>"></script>



</body>

</html>



