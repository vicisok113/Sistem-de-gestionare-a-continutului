<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$query = $this->db->query("SELECT * FROM blogs WHERE id = '". $name ."'");

foreach ($query->result() as $row)

{

    $id = $row->id;

    $nume = $row->titlu;

    $seo_title = $row->seo_title;

    $seo_desc = $row->seo_description;

    $seo_key = $row->seo_key;

    $categorie = $row->categorie;

    $descriere = $row->continut;

    $video = $row->video;

    $nume_imagine = $row->nume_imagine;

}

?><!DOCTYPE html>

<html lang="en">

     <head>

    <?php $this->load->view('template2/lheader.php'); ?>

    <link rel="icon" href="<?php echo base_url().'application/views/template2/images/favicon.ico'; ?>">

    <link rel="shortcut icon" href="<?php echo base_url().'application/views/template2/images/favicon.ico'; ?>" />

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

                 <li><a href="<?php echo base_url().'index.php/main/produse/'; ?>">Produse</a></li>

                 <li class="current"><a href="<?php echo base_url().'index.php/main/blog/'; ?>">Blog</a></li>

                 <li><a href="<?php echo base_url().'index.php/main/contact/'; ?>">Contact</a></li>

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

<center><h2><?php echo $nume; ?></h2></center><br><br>

<center><img style="margin-top: -3.5%;" src="<?php echo base_url().'images/'.$nume_imagine; ?>" alt="<?php echo $nume; ?>"></center>

<br><br>

<p class="pret"><b>Categorie:</b> <?php echo $categorie; ?></p>

<b>Descriere:</b>

<p><?php echo $descriere; ?></p>

<?php if($video !== "") {?>
<br>
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

<p>...<a href="<?php echo base_url().'index.php/main/blog/'; ?>">Blog</a>/<a href="<?php echo base_url().'index.php/main/blog/'; ?>"><?php echo $categorie?></a>/<a href="<?php echo base_url().'index.php/main/blg/'.$id; ?>"><?php echo $nume;?></a></p>

</div></div>

<!--==============================footer=================================-->

<?php $this->load->view('template2/footer.php'); ?>

</body>

</html>
