<!DOCTYPE html>

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

                 <li><a href="<?php echo base_url().'main/produse/'; ?>">Produse</a></li>

                 <li class="current"><a href="<?php echo base_url().'main/blog/'; ?>">Blog</a></li>

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

    <div class="grid_9">

      <h2>Blog</h2>

        <?php $query = $this->db->query('SELECT * FROM categorii_blog');

            foreach ($query->result() as $row)

            {

                $id1 = $row->id;

                $categorie = $row->categorie;



                $this->db->where('categorie', $categorie);

                $query = $this->db->get('blogs');

                if ($query->num_rows() > 0) {

            ?>

        <div class="grid_12"><h3><?php echo $categorie;?>:</h3></div>

        <?php $query = $this->db->query('SELECT * FROM blogs WHERE categorie = "'.$categorie.'" ORDER BY id DESC');

        foreach ($query->result() as $row)

        {

            $id = $row->id;

            $nume = $row->titlu;
            $str = $nume;
            $arr = explode(" ",$str);
            $linie = implode("-",$arr);

            $categorie = $row->categorie;

            $content = $row->continut; ?>



      <div class="blog">

       <a href="<?php echo base_url().'blog/'.$id.'/'.$linie; ?>"><img width="800" height="230" src="<?php echo base_url().'images/'.$nume.'.jpg'?>" alt="Imagine pentru <?php echo $nume; ?>" alt="" class="img_inner fleft">&nbsp;

        <div class="extra_wrapper">

          <div class="text1"><?php echo $nume; ?></a>

          </div><p>Categorie: <?php echo $categorie; ?><br> </p><?php 

          $small = substr($content, 0, 180);

          echo $small."...";?>

          <div class="alright"><a href="<?php echo base_url().'blog/'.$id.'/'.$linie; ?>" class="btn">Mai mult</a></div>

        </div>

        <div class="clear"></div>

        <!--<table><tbody><tr><td></td></tr></tbody></table>-->

      </div>

      <?php } ?> <!-- /.row --><?php }} ?>



<!--

      <div class="blog">

        <img src="<?php echo base_url().'application/views/template2/images/page4_img2.jpg'; ?>" alt="" class="img_inner fleft">

        <div class="extra_wrapper">

          <div class="text1"><a href="#">Divamus at magna non nunceu </a></div>Geripiscing elin mollis eratttis neq cilisis, sit amettrecies erat rutrumsucilisis lla vel uivra a sodale felis, quisertylo. Malesuada nibh odio ut velit. Proin pharetra luctus diam, a scelerisque eros convallis accumsa.

          <div class="alright"><a href="#" class="btn">More</a></div>

        </div>

        <div class="clear"></div>

      </div>

      <div class="blog">

        <img src="<?php echo base_url().'application/views/template2/images/page4_img3.jpg'; ?>" alt="" class="img_inner fleft">

        <div class="extra_wrapper">

          <div class="text1"><a href="#">Geramus at magna non nuncere </a></div>Verpiscing elin mollis eratttis neq cilisis, sit amettrecies erat rutrumsucilisis lla vel uivra a sodale felis, quisertylo. Malesuada nibh odio ut velit. Proin pharetra luctus diam, a scelerisque eros convallis accumser.

          <div class="alright"><a href="#" class="btn">More</a></div>

        </div>

        <div class="clear"></div>

      </div> -->

      <div class="clear"></div>

    </div>

    <div class="grid_3">

      <h4 class="head1">Categorii</h4>

      <ul class="list mb0">

      <?php /*$query = $this->db->query('SELECT * FROM categorii_blog');

        foreach ($query->result() as $row)

        {

        	$categorie = $row->categorie; ?>

        	<li><a style="cursor:text" href=""><?php echo $categorie; ?></a></li>

        <?php }*/ ?>
        <?php $query = $this->db->query("SELECT * FROM categorii_blog");
          foreach ($query->result() as $row)
          {
            $id1 = $row->id;
            $categorie = $row->categorie;
            $parinte = $row->parinte;
             if($parinte == '0') { ?>
              <li><a style="cursor:text" href=""><?php echo $categorie; ?></a></li>
              <?php 
                $query = $this->db->query("SELECT * FROM categorii_blog WHERE parinte = '".$id1."'");
                foreach ($query->result() as $row)
                {
                  $subcategorie = $row->categorie; ?>
                  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="cursor:text" href=""><?php echo $subcategorie; ?></a></li>
              <?php }}} ?>

      </ul>

    </div>

  </div>

</div>

<!--==============================footer=================================-->

<?php $this->load->view('template2/footer.php'); ?>

</body>

</html>



