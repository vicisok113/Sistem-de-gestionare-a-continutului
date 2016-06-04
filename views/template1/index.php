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
    $facebook_link = $row->facebook_link;
    $twiter_link = $row->twiter_link;
    $google_link = $row->google_link;
}

?><!DOCTYPE html>
<html lang="en">
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title><?php echo $titlu;?></title>
    <meta name="description" content="<?php echo $meta_desc; ?>">
    <meta name="keywords" content="<?php echo $meta_key; ?>">  
    <meta name="viewport" content="width=device-width">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url().'application/views/template1/css/bootstrap.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url().'application/views/template1/css/normalize.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url().'application/views/template1/css/font-awesome.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url().'application/views/template1/css/animate.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url().'application/views/template1/css/templatemo_misc.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url().'application/views/template1/css/templatemo_style.css'; ?>">

    <script src="<?php echo base_url().'application/views/template1/js/vendor/modernizr-2.6.2.min.js'; ?>"></script>

</head>
<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    <div id="front">
        <div class="site-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div id="templatemo">
                            <img src="<?php echo base_url().'images/logo.png'; ?>">
                        </div> <!-- /.logo -->
                    </div> <!-- /.col-md-4 -->
                    
                    <div class="col-md-8 col-sm-6 col-xs-6">
                        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                        <div class="main-menu">
                            <ul>
                                
                                <li><a href="#front">HOME</a></li>
                                
                                <li><a href="#product-promotion">Despre noi</a></li>
                                
                                <li><a href="#products">Produse</a></li>

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

                                 <li><a href="#contact">Contact</a></li>

                            </ul>
                        </div> <!-- /.main-menu -->
                    </div> <!-- /.col-md-8 -->
                </div> <!-- /.row -->
                
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->
    </div> <!-- /#front -->

    <div class="site-slider">
        <ul class="bxslider">
            <li>
                <img src="<?php echo base_url().'/images/slide1.jpg'; ?>" alt="slider image 1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-right">
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?php echo base_url().'/images/slide2.jpg'; ?>" alt="slider image 2">
                <div class="container caption-wrapper">
                </div>
            </li>
            <li>
                <img src="<?php echo base_url().'/images/slide3.jpg'; ?>" alt="slider image 3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-right">
                        </div>
                    </div>
                </div>
            </li>
        </ul> <!-- /.bxslider -->
        <div class="bx-thumbnail-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="bx-pager">
                            <a data-slide-index="0" href=""><img src="<?php echo base_url().'/images/slide1.jpg'; ?>" alt="image 1" /></a>
                            <a data-slide-index="1" href=""><img src="<?php echo base_url().'/images/slide2.jpg'; ?>" alt="image 2" /></a>
                            <a data-slide-index="2" href=""><img src="<?php echo base_url().'/images/slide3.jpg'; ?>" alt="image 3" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.site-slider -->

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

    <div id="services" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <span class="service-icon first"></span>
                        <h3><?=$titlu1?></h3>
                        <p><?=$continut1?></p>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <span class="service-icon second"></span>
                        <h3><?=$titlu2?></h3>
                        <p><?=$continut2?></p>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <span class="service-icon third"></span>
                        <h3><?=$titlu3?></h3>
                        <p><?=$continut3?></p>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <span class="service-icon fourth"></span>
                        <h3><?=$titlu4?></h3>
                        <p><?=$continut1?></p>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#services -->

    <?php } ?>

    <div id="product-promotion" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title">Despre noi</h1>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <center><h4><?php echo $despre; ?></h4></center>
        </div> <!-- /.container -->
    </div> <!-- /#product-promotion -->

    <?php $query = $this->db->query('SELECT * FROM pages WHERE id = "1" ');
            foreach ($query->result() as $row)
            {
              $cont = $row->continut;
              $video = $row->video;

              $show_site = $row->show_site;
            } ?>

<?php if($show_site == 1) { ?>
    <div id="index" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <hr>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <center>
                <h4><?=$cont?></h4>
                <?=$video?>
            </center>
        </div> <!-- /.container -->
    </div> <!-- /#product-promotion -->
<?php } ?>
    
    <div id="products" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title">Produse</h1>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->

            <?php $query = $this->db->query('SELECT * FROM categorii_produse');
            foreach ($query->result() as $row)
            {
                $id1 = $row->id;
                $categorie = $row->categorie;

                $this->db->where('categorie', $categorie);
                $query = $this->db->get('produse');
                if ($query->num_rows() > 0) {
            ?>
            <div id="<?php echo $categorie;?>"><h2><?php echo $categorie;?>:</h2></div>
            <div class="row" id="foo<?php echo $id1; ?>">
            <?php $query = $this->db->query('SELECT * FROM produse WHERE categorie = "'.$categorie.'"');
            foreach ($query->result() as $row)
            {
                $id = $row->id;

                $nume = $row->titlu;
                $str = $nume;
                $arr = explode(" ",$str);
                $linie = implode("-",$arr);

                $pret = $row->pret; 
                $categorie = $row->categorie;
                $content = $row->continut;
                $nume_imagine = $row->nume_imagine;?>
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <a href="<?php echo base_url().'produse/'.$id.'/'.$linie; ?>" class="view-detail">View</a>
                                </div>
                            </div> <!-- /.overlay -->
                            <a href="<?php echo base_url().'produse/'.$id.'/'.$linie; ?>" class="view-detail"><img width="400" src="<?php echo base_url().'images/'.$nume_imagine;?>" alt="<?php echo $nume; ?>"></a>
                        </div> <!-- /.item-thumb -->
                        <h3><a href="<?php echo base_url().'produse/'.$id.'/'.$linie; ?>" class=""><?php echo $nume; ?></a></h3>
                        <?php $small = substr($content, 0, 50);
                            echo $small."...";?><br>
                        <span>Categorie: <em class="price"><?php echo $categorie; ?></em></span><br>
                        <span>Pret: <!--<em class="text-muted">$260.00</em> - -->  <em class="price"><?php echo $pret; ?></em></span>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
            <?php } ?></div> <!-- /.row --><?php }} ?>
        </div> <!-- /.container -->
    </div> <!-- /#products -->

    <div id="blog"></div>
    <div id="blogs" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title">Blog</h1>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <?php $query = $this->db->query('SELECT * FROM categorii_blog');
            foreach ($query->result() as $row)
            {
                $id1 = $row->id;
                $categorie = $row->categorie;
                $this->db->where('categorie', $categorie);
                $query = $this->db->get('blogs');
                if ($query->num_rows() > 0) {
            ?>
            <div id="<?php echo $categorie;?>"><h2><?php echo $categorie;?>:</h2></div>
            <div class="row" id="foo<?php echo $id1; ?>"><?php 
            $query = $this->db->query('SELECT * FROM blogs WHERE categorie = "'.$categorie.'"');
            foreach ($query->result() as $row)
            {
                $id = $row->id;

                $nume = $row->titlu;
                $str = $nume;
                $arr = explode(" ",$str);
                $linie = implode("-",$arr);

                $content = $row->continut;
                $nume_imagine = $row->nume_imagine;
                ?>
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <a href="<?php echo base_url().'blog/'.$id.'/'.$linie; ?>" class="view-detail">View</a>
                                </div>
                            </div> <!-- /.overlay -->
                            <img width="400" src="<?php echo base_url().'images/'.$nume_imagine;?>" alt="<?php echo $nume; ?>">
                        </div> <!-- /.item-thumb -->
                        <h3><a href="<?php echo base_url().'blog/'.$id.'/'.$linie; ?>" class="view-detail"><?php echo $nume; ?></a></h3>
                         <?php $small = substr($content, 0, 50);
                            echo $small."...";?><br>
                        <span>Categorie: <em class="price"><?php echo $categorie; ?></em></span><br>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
            <?php } ?></div> <!-- /.row --><?php }} ?>
        </div> <!-- /.container -->
    </div> <!-- /#blogs -->

    <div id="contact" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title">Contact</h1>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center bigger-text">
                    <p>Telefon: <?php echo $telefon_contact; ?></p>
                    <p>Email: <?php echo $email_contact; ?></p>
                    <p><?php $this->load->helper("form"); echo form_open("main/send_email"); ?></p>
                    <p><?php echo validation_errors(); ?></p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div id="map">
                    </div>
                </div> <!-- /.col-md-6 -->

                <div class="col-md-6 col-sm-6">
                    
                    <div class="row contact-form">
                    
                        <fieldset class="col-md-6 col-sm-6">
                        <?php 

                        $data = array(
                            "name" => "nume",
                            "id" => "name",
                            "type" => "text",
                            "placeholder" => "Nume"
                            );  
                        echo form_input($data);
                        ?>
                        </fieldset>
                        <fieldset class="col-md-6 col-sm-6">
                        <?php 
                        $data = array(
                            "name" => "email",
                            "id" => "email",
                            "type" => "email",
                            "placeholder" => "Email"
                            );  
                        echo form_input($data);
                        ?>
                        </fieldset>
                        <fieldset class="col-md-12">
                        <?php 
                        $data = array(
                            "name" => "subiect",
                            "id" => "subject",
                            "type" => "text",
                            "placeholder" => "Subiect"
                            );  
                        echo form_input($data);
                        ?>
                        </fieldset>
                        <fieldset class="col-md-12">
                        <?php 
                        $data = array(
                            "name" => "mesaj",
                            "id" => "comments",
                            "placeholder" => "Mesaj"
                            );  
                        echo form_textarea($data);
                        ?>
                        </fieldset>
                        <fieldset class="col-md-12">
                            <input type="submit" name="send" value="Trimite" id="submit" class="button">
                        </fieldset>
                     
                    </div> <!-- /.contact-form -->
                    <?php echo form_close(); ?>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#products -->

    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <span>
                    	<a href="<?php echo $flink;?>"><?php echo $ftext;?></a>
                    	
                        | Designed by <a rel="nofollow" href="#" target="_parent">ZaoMedia.ro</a> 
                    </span>

            </div> <!-- /.col-md-6 -->
                <div class="col-md-4 col-sm-6">
                    <ul class="social">
                        <li><a href="<?php echo $facebook_link;?>" class="fa fa-facebook"></a></li>
                        <li><a href="<?php echo $twiter_link;?>" class="fa fa-twitter"></a></li>
                        <li><a href="<?php echo $google_link;?>" class="fa fa-google-plus"></a></li>
                    </ul>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    
    <script src="<?php echo base_url().'application/views/template1/js/vendor/jquery-1.10.1.min.js'; ?>"></script>
    <?php $co = "base_url().'application/views/template1/js/vendor/jquery-1.10.1.min.js'"; ?>
    <script>window.jQuery || document.write('<script src="<?php echo $co; ?>"><\/script>')</script>
    <script src="<?php echo base_url().'application/views/template1/js/jquery.easing-1.3.js'; ?>"></script>
    <script src="<?php echo base_url().'application/views/template1/js/bootstrap.js'; ?>"></script>
    <script src="<?php echo base_url().'application/views/template1/js/plugins.js'; ?>"></script>
    <script src="<?php echo base_url().'application/views/template1/js/main.js'; ?>"></script>
    <!-- templatemo 401 sprint -->
</body>
</html>