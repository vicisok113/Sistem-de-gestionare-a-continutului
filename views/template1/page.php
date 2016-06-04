<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$query = $this->db->query('SELECT * FROM general');
foreach ($query->result() as $row)
{
    $ftext = $row->footer_text;

    $flink = $row->footer_link;
    
    $facebook_link = $row->facebook_link;
    
    $twiter_link = $row->twiter_link;
    
    $google_link = $row->google_link;
}

$query = $this->db->query("SELECT * FROM pages WHERE id = '". $name ."'");

foreach ($query->result() as $row)

{
    $id = $row->id;

    $nume = $row->titlu;

    $seo_title = $row->seo_title;

    $seo_desc = $row->seo_description;

    $seo_key = $row->seo_key;

    $descriere = $row->continut;

    $video = $row->video;
}



?><!DOCTYPE html>

<html lang="en">

<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->

<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->

<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>

    <meta charset="utf-8">

    <title><?php echo $nume; ?></title>

    <meta name="title" content="<?php echo $seo_title; ?>">

    <meta name="description" content="<?php echo $seo_desc; ?>">

    <meta name="keywords" content="<?php echo $seo_key; ?>">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'application/views/template1/css/bootstrap.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url().'application/views/template1/css/normalize.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url().'application/views/template1/css/font-awesome.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url().'application/views/template1/css/animate.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url().'application/views/template1/css/templatemo_misc.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url().'application/views/template1/css/templatemo_style.css'; ?>">

    <script src="<?php echo base_url().'application/views/template1/js/vendor/modernizr-2.6.2.min.js'; ?>"></script>
    <style type="text/css">
    *{
        margin: 0;
        padding: 0;
    }
    .site-header {
        margin-top: -2%;
    }
    .body {
        padding-top: 8%;
    }
    .sec {
        margin-left: 8%;
        margin-right: 8%;
    }
    .pret {
        font-size: 20px;
    }
    </style>

</head>

<body>

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
                            
                            <li><a href="<?php echo base_url(); ?>">HOME</a></li>
                            
                            <li><a href="<?php echo base_url(); ?>#product-promotion">Despre noi</a></li>
                            
                            <li><a href="<?php echo base_url(); ?>#products">Produse</a></li>

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
                            
                            <li><a href="<?php echo base_url(); ?>#contact">Contact</a></li>
                            
                            </ul>
                        </div> <!-- /.main-menu -->
                    </div> <!-- /.col-md-8 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->
    </div> <!-- /#front -->
<div class="body">
<center><h2 class="h2"><?php echo $nume; ?></h2><br><br><br></center>

<br>

<div class="sec">
<p><?php echo $descriere; ?></p>

<?php if($video !== "") {?>

<br><br>

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

<p>...<a href="<?php echo base_url();?>#pagini">Pagini</a>/<a href="<?php echo base_url().'index.php/main/page/'.$name; ?>" class="view-detail"><?php echo $nume;?></a></p>

</div></div>

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
</body>

</html>