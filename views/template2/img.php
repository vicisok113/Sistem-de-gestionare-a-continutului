<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Gallery</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="<?php echo base_url().'application/views/template2/images/favicon.ico'; ?>">
     <link rel="shortcut icon" href="<?php echo base_url().'application/views/template2/images/favicon.ico'; ?>" />
     <link rel="stylesheet" type="text/css" href="<?php echo base_url().'application/views/template2/css/tooltipster.css'; ?>" />
     <link rel="stylesheet" type="text/css" href="<?php echo base_url().'application/views/template2/css/touchTouch.css'; ?>" />
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
     <script src="<?php echo base_url().'application/views/template2/js/touchTouch.jquery.js'; ?>"></script>
     <script>
       $(document).ready(function(){
        $('.gallery a.gal').touchTouch();
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
        <a href="index.html">
          <img src="<?php echo base_url().'application/views/template2/images/logo.png'; ?>" alt="Your Happy Family">
        </a>
      </h1>
        <div class="menu_block ">
          <nav class="horizontal-nav full-width horizontalNav-notprocessed">
            <ul class="sf-menu">
                 <li><a href="<?php echo base_url(); ?>">Home</a></li>
                 <li><a href="<?php echo base_url().'index.php/main/produse/'; ?>">Produse</a></li>
                 <li class="current"><a href="<?php echo base_url().'index.php/main/img/'; ?>">Gallery</a></li>
                 <li><a href="index-3.html">Blog</a></li>
                 <li><a href="index-4.html">Contacts</a></li>
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
      <h2>Gallery</h2>
    </div>
    <div class="clear"></div>
    <div class="gallery">
      <div class="grid_4"><a href="<?php echo base_url().'application/views/template2/images/big1.jpg'; ?>" class="gal"><img src="<?php echo base_url().'application/views/template2/images/page3_img1.jpg'; ?>" alt=""></a></div>
      <div class="grid_4"><a href="<?php echo base_url().'application/views/template2/images/big2.jpg'; ?>" class="gal"><img src="<?php echo base_url().'application/views/template2/images/page3_img2.jpg'; ?>" alt=""></a></div>
      <div class="grid_4"><a href="<?php echo base_url().'application/views/template2/images/big3.jpg'; ?>" class="gal"><img src="<?php echo base_url().'application/views/template2/images/page3_img3.jpg'; ?>" alt=""></a></div>
      <div class="clear"></div>
      <div class="grid_4"><a href="<?php echo base_url().'application/views/template2/images/big4.jpg'; ?>" class="gal"><img src="<?php echo base_url().'application/views/template2/images/page3_img4.jpg'; ?>" alt=""></a></div>
      <div class="grid_4"><a href="<?php echo base_url().'application/views/template2/images/big5.jpg'; ?>" class="gal"><img src="<?php echo base_url().'application/views/template2/images/page3_img5.jpg'; ?>" alt=""></a></div>
      <div class="grid_4"><a href="<?php echo base_url().'application/views/template2/images/big6.jpg'; ?>" class="gal"><img src="<?php echo base_url().'application/views/template2/images/page3_img6.jpg'; ?>" alt=""></a></div>
    </div>
  </div>
</div>
<!--==============================footer=================================-->
<footer>   
    <div class="container_12">
      
      <div class="grid_12">
        <div class="socials">
      <section id="facebook">
        <a href="#" target="_blank"><span id="fackbook" class="tooltip" title="Link us on Facebook">f</span></a>
        </section>
        <section id="twitter">
        <a href="#" target="_blank"><span id="twitter-default" class="tooltip" title="Follow us on Twitter">t</span></a>
        </section>      
        <section id="google">
        <a href="#" target="_blank"><span id="google-default" class="tooltip" title="Follow us on Google Plus">g<span>+</span></span></a>
        </section>        
        <section id="rss">
        <a href="#" target="_blank"><span id="rss-default" class="tooltip" title="Follow us on Dribble">d</span></a>
        </section>
       
      

        </div>
        <div class="copy">
        YourHome &copy; 2014  |  <a href="#">Privacy Policy</a> <br> Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com  </a>
        </div>
         
      </div>
    </div>  
</footer>
</body>
</html>

