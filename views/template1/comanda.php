<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$query = $this->db->query('SELECT * FROM general');
foreach ($query->result() as $row)
{
    $titlu_nume_site = $row->titlu_nume_site;
    $ftext = $row->footer_text;
    $flink = $row->footer_link;
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
    <title><?php echo $titlu_nume_site; ?></title>

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
                            <li><a href="<?php echo base_url(); ?>">HOME</a></li>
                            <li><a href="<?php echo base_url(); ?>#product-promotion">Despre noi</a></li>
                            <li><a href="<?php echo base_url(); ?>#products">Produse</a></li>
                            <li><a href="<?php echo base_url(); ?>#contact">Contact</a></li>
                            </ul>
                        </div> <!-- /.main-menu -->
                    </div> <!-- /.col-md-8 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->
    </div> <!-- /#front -->

    <div id="contact" class="content-section">
        <div class="container">
                <div class="col-md-12 text-center">
                    <h1 class="section-title">Comanda</h1>
                </div> <!-- /.col-md-12 -->
            <h2>Produs: <?=$this->input->post('nume_produs')?> &nbsp;&nbsp;&nbsp; Pret: <?=$this->input->post('pret')?></h2>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center bigger-text">
                    <p><?php $this->load->helper("form"); echo form_open("index.php/main/trimite_comanda"); ?></p>
                    <p><?php echo validation_errors(); ?></p>
                </div>

                <div class="">
                    
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

                        <fieldset style="display:none;" class="col-md-6 col-sm-6">
                        <?php 
                        $data = array(
                            "name" => "nume_produs",
                            "id" => "subject",
                            "value" => $this->input->post('nume_produs'),
                            "type" => "text",
                            "placeholder" => "Nume Produs"
                            );  
                        echo form_input($data);
                        ?>
                        </fieldset>

                        <fieldset style="display:none;" class="col-md-6 col-sm-6">
                        <?php 
                        $data = array(
                            "name" => "pret",
                            "id" => "subject",
                            "value" => $this->input->post('pret'),
                            "type" => "text",
                            "placeholder" => "Pret"
                            );  
                        echo form_input($data);
                        ?>
                        </fieldset>

                        <fieldset class="col-md-6 col-sm-6">
                        <?php 
                        $data = array(
                            "name" => "telefon",
                            "id" => "subject",
                            "type" => "text",
                            "placeholder" => "Numar de telefon"
                            );  
                        echo form_input($data);
                        ?>
                        </fieldset>

                        <fieldset class="col-md-6 col-sm-6">
                        <?php 
                        $data = array(
                            "name" => "adresa",
                            "id" => "subject",
                            "type" => "text",
                            "placeholder" => "Adresa de livrare"
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
</body>
</html>