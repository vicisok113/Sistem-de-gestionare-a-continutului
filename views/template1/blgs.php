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
                        <div id="templatemo_logo">
                            <h1><a href="#">Sprint</a></h1>
                        </div> <!-- /.logo -->
                    </div> <!-- /.col-md-4 -->
                    
                    <div class="col-md-8 col-sm-6 col-xs-6">
                        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                        <div class="main-menu">
                            <ul>
                            <li><a href="#front">HOME</a></li>
                            <li><a href="#product-promotion">Despre noi</a></li>
                            <li><a href="#products">Produse</a></li>
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
                <img src="<?php echo base_url().'application/views/template1/images/slider/slide1.jpg'; ?>" alt="slider image 1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="slider-caption">
                                <h2><?php echo $titlu; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?php echo base_url().'application/views/template1/images/slider/slide2.jpg'; ?>" alt="slider image 2">
                <div class="container caption-wrapper">
                    <div class="slider-caption">
                        <h2>Using Bootstrap Framework</h2>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?php echo base_url().'application/views/template1/images/slider/slide3.jpg'; ?>" alt="slider image 3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="slider-caption">
                                <h2>Mobile Ready Website</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?php echo base_url().'application/views/template1/images/slider/slide4.jpg';?>" alt="slider image 4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="slider-caption">
                                <h2>Responsive Layout</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?php echo base_url().'application/views/template1/images/slider/slide5.jpg';?>" alt="slider image 5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="slider-caption">
                                <h2>Download and use it for free</h2>
                            </div>
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
                            <a data-slide-index="0" href=""><img src="<?php echo base_url().'application/views/template1/images/slider/thumb1.jpg';?>" alt="image 1" /></a>
                            <a data-slide-index="1" href=""><img src="<?php echo base_url().'application/views/template1/images/slider/thumb2.jpg';?>" alt="image 2" /></a>
                            <a data-slide-index="2" href=""><img src="<?php echo base_url().'application/views/template1/images/slider/thumb3.jpg';?>" alt="image 3" /></a>
                            <a data-slide-index="3" href=""><img src="<?php echo base_url().'application/views/template1/images/slider/thumb4.jpg';?>" alt="image 4" /></a>
                            <a data-slide-index="4" href=""><img src="<?php echo base_url().'application/views/template1/images/slider/thumb5.jpg';?>" alt="image 5" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.site-slider -->

    <?php /*$services = '<<div id="services" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <span class="service-icon first"></span>
                        <h3>Easy Customization</h3>
                        <p>Cras congue orci at diam condimentum, in dignissim tellus elementum. Praesent id mauris eu urna vehicula rutrum sed in elit. Sed sed urna porta, viverra lacus in.</p>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <span class="service-icon second"></span>
                        <h3>Web Design</h3>
                        <p>Nulla in nunc elit. Etiam porttitor nibh et felis molestie fermentum. Ut quis diam porttitor, dictum dolor in, volutpat nulla. Phasellus egestas eu lacus eu pharetra.</p>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <span class="service-icon third"></span>
                        <h3>High Quality</h3>
                        <p>Sprint is free responsive website template using HTML5 CSS3 and Bootstrap framework. Feel free to download, edit and use it for your websites.</p>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <span class="service-icon fourth"></span>
                        <h3>Professional Design</h3>
                        <p>Morbi id nisi enim. Ut congue interdum pharetra facilisi. Aenean consectetur pellentesque mauris nec ornare. Nam tortor justo, rutrum ut condimentum.</p>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#services -->';*/ ?>

    <div id="product-promotion" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title">Despre noi</h1>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-md-2 col-sm-3">
                    <div class="item-small">
                        <img src="<?php echo base_url().'application/views/template1/images/promotion/promotion1.jpg';?>" alt="Product 1">
                        <h4>Imagine reprezentativa</h4>
                    </div> <!-- /.item-small -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-8 col-sm-6">
                    <div class="item-large">
                        <img src="<?php echo base_url().'application/views/template1/images/promotion/promotion2.jpg';?>" alt="Product 2">
                        <div class="item-large-content">
                            <div class="item-header">
                                <h2 class="pull-left"><?php echo $titlu; ?></h2>
                                <!--<span class="pull-right">Rate: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i></span>-->
                                <div class="clearfix"></div>
                            </div> <!-- /.item-header -->
                            <p><?php echo $despre; ?></p>
                        </div> <!-- /.item-large-content -->
                    </div> <!-- /.item-large -->
                </div> <!-- /.col-md-8 -->
                <div class="col-md-2 col-sm-3">
                    <div class="item-small">
                        <img src="<?php echo base_url().'application/views/template1/images/promotion/promotion3.jpg';?>" alt="Product 3">
                        <h4>Imagine reprezentativa</h4>
                    </div> <!-- /.item-small -->
                </div> <!-- /.col-md-2 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#product-promotion -->
    
    <div id="products" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title">Produse</h1>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->

<!--<p onclick="toggle_visibility('foo');">Click here to toggle visibility of element #foo</p>
 <select>
  <option onclick="toggle_visibility('foo');" selected>All</option>
<?php $query = $this->db->query('SELECT * FROM categorii');
    foreach ($query->result() as $row)
    {
        $id1 = $row->id;
        $categorie = $row->categorie;
        ?><option onclick="toggle_visibility('foo<?php echo $id1;?>');"><?php echo $categorie; ?></option><?php
    }?>
 </select>-->
            <?php $query = $this->db->query('SELECT * FROM categorii');
            foreach ($query->result() as $row)
            {
                $id1 = $row->id;
                $categorie = $row->categorie;

                $this->db->where('categorie', $categorie);
                $query = $this->db->get('produse');
                if ($query->num_rows() > 0) {
            ?>
            <h2><?php echo $categorie;?>:</h2>
            <div class="row" id="foo<?php echo $id1; ?>">
            <?php $query = $this->db->query('SELECT * FROM produse WHERE categorie = "'.$categorie.'"');
            foreach ($query->result() as $row)
            {
                $id = $row->id;
                $nume = $row->titlu;
                $pret = $row->pret; 
                $categorie = $row->categorie;
                $content = $row->continut;
                $nume_imagine = $row->nume_imagine;?>
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <a href="<?php echo base_url().'index.php/main/produs/'.$id; ?>" class="view-detail">View</a>
                                </div>
                            </div> <!-- /.overlay -->
                            <img width="400" src="<?php echo base_url().'images/'.$nume_imagine;?>" alt="<?php echo $nume; ?>">
                        </div> <!-- /.item-thumb -->
                        <h3><?php echo $nume; ?></h3>
                        <?php $small = substr($content, 0, 50);
                            echo $small."...";?><br>
                        <span>Categorie: <em class="price"><?php echo $categorie; ?></em></span><br>
                        <span>Pret: <!--<em class="text-muted">$260.00</em> - -->  <em class="price"><?php echo $pret; ?></em></span>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
            <?php } ?></div> <!-- /.row --><?php }} ?>
        </div> <!-- /.container -->
    </div> <!-- /#products -->

    <div id="pages" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title">Pagini</h1>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <?php $query = $this->db->query('SELECT * FROM categorii');
            foreach ($query->result() as $row)
            {
                $id1 = $row->id;
                $categorie = $row->categorie;

                $this->db->where('categorie', $categorie);
                $query = $this->db->get('pages');
                if ($query->num_rows() > 0) {
            ?>
            <h2><?php echo $categorie;?>:</h2>
            <div class="row" id="foo<?php echo $id1; ?>"><?php 
            $query = $this->db->query('SELECT * FROM pages WHERE categorie = "'.$categorie.'"');
            foreach ($query->result() as $row)
            {
                $id = $row->id;
                $nume = $row->titlu;
                $content = $row->continut;
                $nume_imagine = $row->nume_imagine;
                ?>
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <a href="<?php echo base_url().'index.php/main/page/'.$id; ?>" class="view-detail">View</a>
                                </div>
                            </div> <!-- /.overlay -->
                            <img width="400" src="<?php echo base_url().'images/'.$nume_imagine;?>" alt="<?php echo $nume; ?>">
                        </div> <!-- /.item-thumb -->
                        <h3><?php echo $nume; ?></h3>
                        <?php $small = substr($content, 0, 50);
                            echo $small."...";?><br>
                        <span>Categorie: <em class="price"><?php echo $categorie; ?></em></span>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
            <?php } ?></div> <!-- /.row --><?php }} ?>
        </div> <!-- /.container -->
    </div> <!-- /#pages -->

    <div id="blogs" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title">Blog</h1>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <?php $query = $this->db->query('SELECT * FROM categorii');
            foreach ($query->result() as $row)
            {
                $id1 = $row->id;
                $categorie = $row->categorie;

                $this->db->where('categorie', $categorie);
                $query = $this->db->get('blogs');
                if ($query->num_rows() > 0) {
            ?>
            <h2><?php echo $categorie;?>:</h2>
            <div class="row" id="foo<?php echo $id1; ?>"><?php 
            $query = $this->db->query('SELECT * FROM blogs WHERE categorie = "'.$categorie.'"');
            foreach ($query->result() as $row)
            {
                $id = $row->id;
                $nume = $row->titlu;
                $subcategorie = $row->subcategorie;
                $content = $row->continut;
                $nume_imagine = $row->nume_imagine;
                ?>
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <a href="<?php echo base_url().'index.php/main/page/'.$id; ?>" class="view-detail">View</a>
                                </div>
                            </div> <!-- /.overlay -->
                            <img width="400" src="<?php echo base_url().'images/'.$nume_imagine;?>" alt="<?php echo $nume; ?>">
                        </div> <!-- /.item-thumb -->
                        <h3><?php echo $nume; ?></h3>
                         <?php $small = substr($content, 0, 50);
                            echo $small."...";?><br>
                        <span>Categorie: <em class="price"><?php echo $categorie; ?></em></span><br>
                        <span>Subcategorie: <em class="price"><?php echo $subcategorie; ?></em></span>
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
                    <p><?php $this->load->helper("form"); echo form_open("index.php/main/send_email"); ?></p>
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