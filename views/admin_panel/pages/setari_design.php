<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'application/views/admin_panel/bower_components/bootstrap/dist/css/bootstrap.min.css'; ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url().'application/views/admin_panel/bower_components/metisMenu/dist/metisMenu.min.css'; ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url().'application/views/admin_panel/dist/css/sb-admin-2.css'; ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url().'application/views/admin_panel/bower_components/font-awesome/css/font-awesome.min.css'; ?>" rel="stylesheet" type="text/css">

    <!-- Lightbox -->
    <link href="<?php echo base_url().'plugins/lightbox/dist/css/lightbox.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url().'plugins/lightbox/dist/css/lightbox.min.css'; ?>" rel="stylesheet">

    <!-- Color picker -->
    <script src="<?php echo base_url().'application/views/admin_panel/js/'; ?>jscolor.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include 'includes/navbar.php'; ?>
        <script type='text/javascript'>
            (function()
            {
              if( window.localStorage )
              {
                if( !localStorage.getItem('firstLoad') )
                {
                  localStorage['firstLoad'] = true;
                  window.location.reload();
                }  
                else
                  localStorage.removeItem('firstLoad');
              }
            })();
        </script>

        <!-- Page Content -->
        <div id="page-wrapper">
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Setari - Design</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        <!-- /#page-wrapper -->
        </div>
                <label>Select template</label><br><br>

        <a style="margin-left: -1%" class="example-image-link" href="<?php echo base_url().'images/template1.jpg'; ?>" data-lightbox="template" data-title="Template 1">
            <img width="9.5%" class="example-image" src="<?php echo base_url().'images/template1.jpg'; ?>" alt="Template 1" />
        </a>
        <a style="margin-left: 1%" class="example-image-link" href="<?php echo base_url().'images/template2.jpg'; ?>" data-lightbox="template" data-title="Template 2">
            <img width="9.5%" class="example-image" src="<?php echo base_url().'images/template2.jpg'; ?>" alt="Template 2" />
        </a>
        <a style="margin-left: 1%" class="example-image-link" href="<?php echo base_url().'images/template3.jpg'; ?>" data-lightbox="template" data-title="Template 3">
            <img width="9.5%" class="example-image" src="<?php echo base_url().'images/template3.jpg'; ?>" alt="Template 3" />
        </a>
        <a style="margin-left: 1%" class="example-image-link" href="<?php echo base_url().'images/template4.jpg'; ?>" data-lightbox="template" data-title="Template 4">
            <img width="9.5%" class="example-image" src="<?php echo base_url().'images/template4.jpg'; ?>" alt="Template 4" />
        </a>
        <a style="margin-left: 1%" class="example-image-link" href="<?php echo base_url().'images/template5.jpg'; ?>" data-lightbox="template" data-title="Template 5">
            <img width="9.5%" class="example-image" src="<?php echo base_url().'images/template5.jpg'; ?>" alt="Template 5" />
        </a>
        <a style="margin-left: 1%" class="example-image-link" href="<?php echo base_url().'images/template6.jpg'; ?>" data-lightbox="template" data-title="Template 6">
            <img width="9.5%" class="example-image" src="<?php echo base_url().'images/template6.jpg'; ?>" alt="Template 6" />
        </a>
        <a style="margin-left: 1%" class="example-image-link" href="<?php echo base_url().'images/template7.jpg'; ?>" data-lightbox="template" data-title="Template 7">
            <img width="9.5%" class="example-image" src="<?php echo base_url().'images/template7.jpg'; ?>" alt="Template 7" />
        </a>
        <a style="margin-left: 1%" class="example-image-link" href="<?php echo base_url().'images/template8.jpg'; ?>" data-lightbox="template" data-title="Template 8">
            <img width="9.5%" class="example-image" src="<?php echo base_url().'images/template8.jpg'; ?>" alt="Template 8" />
        </a>
        <a style="margin-left: 1%;margin-right: 45%;" class="example-image-link" href="<?php echo base_url().'images/template9.jpg'; ?>" data-lightbox="template" data-title="Template 9">
            <img width="9.5%" class="example-image" src="<?php echo base_url().'images/template9.jpg'; ?>" alt="Template 9" />
        </a>
        <br><br>
        <div class="form-group row">
            <div class="col-md-8">
                <?php
                    $query = $this->db->query('SELECT * FROM general');
                        foreach ($query->result() as $row)
                        {
                            $template = $row->template;
                            $layout = $row->layout;
                            $bgcolor = $row->bgcolor;

                            $primaryc = $row->primaryc;
                            $secondary = $row->secondary;
                            $tertiary = $row->tertiary;
                            $quaternary = $row->quaternary;
                        }
                    $attributes = array('class' => '', 'id' => '');
                    echo form_open_multipart('index.php/admin/change_template', $attributes);?>
                    <select class="form-control" name="template">
                        <?php if($template == 1){ 
                            echo '<option value="1" selected>Template 1</option>';
                        } else {
                            echo '<option value="1">Template 1</option>'; }?>
                        <?php if($template == 2){ 
                            echo '<option value="2" selected>Template 2</option>';
                        } else {
                            echo '<option value="2">Template 2</option>'; }?>
                        <?php if($template == 3){ 
                            echo '<option value="3" selected>Template 3</option>';
                        } else {
                            echo '<option value="3">Template 3</option>'; }?>
                        <?php if($template == 4){ 
                            echo '<option value="4" selected>Template 4</option>';
                        } else {
                            echo '<option value="4">Template 4</option>'; }?>
                        <?php if($template == 5){ 
                            echo '<option value="5" selected>Template 5</option>';
                        } else {
                            echo '<option value="5">Template 5</option>'; }?>
                        <?php if($template == 6){ 
                            echo '<option value="6" selected>Template 6</option>';
                        } else {
                            echo '<option value="6">Template 6</option>'; }?>
                        <?php if($template == 7){ 
                            echo '<option value="7" selected>Template 7</option>';
                        } else {
                            echo '<option value="7">Template 7</option>'; }?>
                        <?php if($template == 8){ 
                            echo '<option value="8" selected>Template 8</option>';
                        } else {
                            echo '<option value="8">Template 8</option>'; }?>
                        <?php if($template == 9){ 
                            echo '<option value="9" selected>Template 9</option>';
                        } else {
                            echo '<option value="9">Template 9</option>'; }?>
                    </select> 

                    <?php if($template >= 3) { ?>
                    <br>
                    <div class="col-md-9">
                        <label>Layout Style</label>
                        <select class="form-control" name="layout">
                            <?php if($layout == 0){ 
                                echo '<option value="0" selected>Normal</option>';
                            } else {
                                echo '<option value="0">Normal</option>'; }?>
                            <?php if($layout == 1){ 
                                echo '<option value="1" selected>Boxed</option>';
                            } else {
                                echo '<option value="1">Boxed</option>'; 
                            }?>
                        </select> 
                    </div>
                    
                    <div class="col-md-9">
                    <br>
                        <label>Background Color</label>
                        <select class="form-control" name="bgcolor">
                            <?php if($bgcolor == 0){ 
                                echo '<option value="0" selected>Light</option>';
                            } else {
                                echo '<option value="0">Light</option>'; }?>
                            <?php if($bgcolor == 1){ 
                                echo '<option value="1" selected>Dark</option>';
                            } else {
                                echo '<option value="1">Dark</option>'; 
                            }?>
                        </select> 
                    </div>

                    <!--<div class="col-md-9"> -->
                    <br><br><br><br><br><br>
                    <div class="col-md-9">
                        <label>Presets</label>
                        
                        <select onchange="showPresets(this)" class="form-control" name="preset">
                        	<option value="0">None</option>
                            <?php if($primaryc == "#0088cc" && $secondary == "#e36159" && $tertiary == "#2baab1" && $quaternary == "#383f48"){ 
                                echo '<option value="clasic" selected>Clasic</option>';
                            } else {
                                echo '<option value="clasic">Clasic</option>'; }?>

                            <?php if($primaryc == "#395563" && $secondary == "#e6f0f2" && $tertiary == "#f1f6f9" && $quaternary == "#395563"){ 
                                echo '<option value="preset1" selected>Preset 1</option>';
                            } else {
                                echo '<option value="preset1">Preset 1</option>'; }?>

                            <?php if($primaryc == "#5974a3" && $secondary == "#57a6b0" && $tertiary == "#84c0d8" && $quaternary == "#bbbbbb"){ 
                                echo '<option value="preset2" selected>Preset 2</option>';
                            } else {
                                echo '<option value="preset2">Preset 2</option>'; }?>

                            <?php if($primaryc == "#cfa968" && $secondary == "#ead9bb" && $tertiary == "#775926" && $quaternary == "#313234"){ 
                                echo '<option value="preset3" selected>Preset 3</option>';
                            } else {
                                echo '<option value="preset3">Preset 3</option>'; }?>
                        </select>
                        </div> 
                        <div class="col-md-3">
                        	<i style="margin-top: 22%; font-size: 30px; color: <?=$primaryc?>;" id="p" class="fa fa-square"></i>
                        	<i style="margin-top: 22%; font-size: 30px; color: <?=$secondary?>;" id="s" class="fa fa-square"></i>
                        	<i style="margin-top: 22%; font-size: 30px; color: <?=$tertiary?>;" id="t" class="fa fa-square"></i>
                        	<i style="margin-top: 22%; font-size: 30px; color: <?=$quaternary?>;" id="q" class="fa fa-square"></i>
                        </div>
                    <!--</div> -->

                    <div class="col-md-5">
                    <br>
                        <label>Culoare primara:</label>
                        <input id="primaryc" class="form-control jscolor {hash:true}{onFineChange:'update(this)'}" placeholder="Culoare primara" name="primaryc" value="<?=$primaryc?>">
                    </div>
                    <div class="col-md-5">
                    <br>
                        <label>Culoare secundara:</label>
                        <input id="secondary" class="form-control jscolor {onFineChange:'update(this)'}" autocomplete="on" placeholder="Culoare secundara" name="secondary" value="<?=$secondary?>">
                    </div>
                    <div class="col-md-5">
                    <br>
                        <label>Culoare tertiara:</label>
                        <input id="tertiary" class="form-control jscolor {hash:true}{onFineChange:'update(this)'}" placeholder="Culoare tertiara" name="tertiary" value="<?=$tertiary?>">
                    </div>
                    <div class="col-md-5">
                    <br>
                        <label>Culoare cuaternara:</label>
                        <input id="quaternary" class="form-control jscolor {hash:true}{onFineChange:'update(this)'}" placeholder="Culoare cuaternara" name="quaternary" value="<?=$quaternary?>">
                    </div>
                    <script>
					function showPresets(elem){
						if(elem.value == "clasic") {
					      document.getElementById("primaryc").value = "#0088cc";
					      document.getElementById("secondary").value = "#e36159";
					      document.getElementById("tertiary").value = "#2baab1";
					      document.getElementById("quaternary").value = "#383f48";

					      var p = document.getElementById("p");
					      var s = document.getElementById("s");
					      var t = document.getElementById("t");
					      var q = document.getElementById("q");
						    p.style.color = "#0088cc";
						    s.style.color = "#e36159";
						    t.style.color = "#2baab1";
						    q.style.color = "#383f48";
					  	}
					   	if(elem.value == "preset1") {
					      document.getElementById("primaryc").value = "#395563";
					      document.getElementById("secondary").value = "#e6f0f2";
					      document.getElementById("tertiary").value = "#f1f6f9";
					      document.getElementById("quaternary").value = "#395563";

					      var p = document.getElementById("p");
					      var s = document.getElementById("s");
					      var t = document.getElementById("t");
					      var q = document.getElementById("q");
						    p.style.color = "#395563";
						    s.style.color = "#e6f0f2";
						    t.style.color = "#f1f6f9";
						    q.style.color = "#395563";
					  	}
					  	if(elem.value == "preset2") {
					      document.getElementById("primaryc").value = "#5974a3";
					      document.getElementById("secondary").value = "#57a6b0";
					      document.getElementById("tertiary").value = "#84c0d8";
					      document.getElementById("quaternary").value = "#bbbbbb";

					      var p = document.getElementById("p");
					      var s = document.getElementById("s");
					      var t = document.getElementById("t");
					      var q = document.getElementById("q");
						    p.style.color = "#5974a3";
						    s.style.color = "#57a6b0";
						    t.style.color = "#84c0d8";
						    q.style.color = "#bbbbbb";
					  	}
					  	if(elem.value == "preset3") {
					      document.getElementById("primaryc").value = "#cfa968";
					      document.getElementById("secondary").value = "#ead9bb";
					      document.getElementById("tertiary").value = "#775926";
					      document.getElementById("quaternary").value = "#313234";

					      var p = document.getElementById("p");
					      var s = document.getElementById("s");
					      var t = document.getElementById("t");
					      var q = document.getElementById("q");
						    p.style.color = "#cfa968";
						    s.style.color = "#ead9bb";
						    t.style.color = "#775926";
						    q.style.color = "#313234";
					  	}
					  	if(elem.value == "0") {
					      document.getElementById("primaryc").value = "<?=$primaryc?>";
					      document.getElementById("secondary").value = "<?=$secondary?>";
					      document.getElementById("tertiary").value = "<?=$tertiary?>";
					      document.getElementById("quaternary").value = "<?=$quaternary?>";

					      var p = document.getElementById("p");
					      var s = document.getElementById("s");
					      var t = document.getElementById("t");
					      var q = document.getElementById("q");
						    p.style.color = "<?=$primaryc?>";
						    s.style.color = "<?=$secondary?>";
						    t.style.color = "<?=$tertiary?>";
						    q.style.color = "<?=$quaternary?>";
					  	}
					}
					</script>

                <?php } ?>

            </div>
            <div class="col-md-4"><?php if($template >= 3) { ?><br><br><br><br><br><br><br><br><br><?php } ?>
                <?php 
                    $data = array(
                        'type' => 'submit',
                        'class' => 'btn btn-default',
                        'name' => 'change_template_submit',
                        'value' => 'Aplica'
                    );
                    echo form_submit($data);
                    echo form_close();
                ?>
                </div>
            </div>
            <br>
            <div class="form-group row">
            <div class="col-md-8">
             <?php
                $attributes = array('class' => '', 'id' => '');
                 echo form_open_multipart('index.php/admin/change_logo', $attributes);?>

            <label>Schimbare logo</label>
                <input name="logo" type="file">
                </div>
                <label>&nbsp;</label>
                <div class="col-md-4">

                    <?php 
                        $data = array(
                            'type' => 'submit',
                            'class' => 'btn btn-default',
                            'name' => 'change_logo_submit',
                            'value' => 'Aplica'
                        );
                        echo form_submit($data);
                        echo form_close();
                    ?>
                    </div>
                </div>
                <label>Logo actual:</label><br>
                <img src="<?php echo base_url().'/images/logo.png'; ?>">
                <br><br>
                <!-- ======= SLIDER ======= -->
                <h3>SLIDER</h3>
                <div class="form-group row">
	            <div class="col-md-8">
	             <?php
	                $attributes = array('class' => '', 'id' => '');
	                 echo form_open_multipart('index.php/admin/change_slide1', $attributes);?>
	            <label>Schimbare imagine 1 din slider</label>
	                <input name="slide1" type="file">
	                </div>
	                <div class="col-md-4">

	                    <?php 
	                        $data = array(
	                            'type' => 'submit',
	                            'class' => 'btn btn-default',
	                            'name' => 'change_slide_submit',
	                            'value' => 'Aplica'
	                        );
	                        echo form_submit($data);
	                        echo form_close();
	                    ?>
	                </div>
	            </div>
	            <label>Imagine 1 actuala:</label><br>
                <img width="60%" src="<?php echo base_url().'/images/slide1.jpg'; ?>">
                <br><br><br><br>

                <div class="form-group row">
	            <div class="col-md-8">
	             <?php
	                $attributes = array('class' => '', 'id' => '');
	                 echo form_open_multipart('index.php/admin/change_slide2', $attributes);?>
	            <label>Schimbare imagine 2 din slider</label>
	                <input name="slide2" type="file">
	                </div>
	                <div class="col-md-4">

	                    <?php 
	                        $data = array(
	                            'type' => 'submit',
	                            'class' => 'btn btn-default',
	                            'name' => 'change_slide_submit',
	                            'value' => 'Aplica'
	                        );
	                        echo form_submit($data);
	                        echo form_close();
	                    ?>
	                </div>
	            </div>
	            <label>Imagine 2 actuala:</label><br>
                <img width="60%" src="<?php echo base_url().'/images/slide2.jpg'; ?>">
                <br><br><br><br>

                <div class="form-group row">
                <div class="col-md-8">
                 <?php
                    $attributes = array('class' => '', 'id' => '');
                     echo form_open_multipart('index.php/admin/change_slide3', $attributes);?>
                <label>Schimbare imagine 3 din slider</label>
                    <input name="slide3" type="file">
                    </div>
                    <div class="col-md-4">

                        <?php 
                            $data = array(
                                'type' => 'submit',
                                'class' => 'btn btn-default',
                                'name' => 'change_slide_submit',
                                'value' => 'Aplica'
                            );
                            echo form_submit($data);
                            echo form_close();
                        ?>
                    </div>
                </div>
                <label>Imagine 3 actuala:</label><br>
                <img width="60%" src="<?php echo base_url().'/images/slide3.jpg'; ?>">
                <br><br><br><br>


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
                    } ?>

                 <?php echo form_open_multipart('index.php/admin/services', $attributes); ?>
                <label>Servicii:</label> <br> <input type="checkbox" <?php if($show == 1) echo "checked"; ?> name="show" value="1"> Apar pe site <br><br>
                <div class="col-xs-6 col-sm-3">
	                <div class="form-group">
	                    <center><label>Titlu serviciu 1</label></center>
	                    <input class="form-control" placeholder="Titlu serviciu 1" name="titlu1" value="<?=$titlu1?>">
	            	</div>
	            </div>
	            <div class="col-xs-6 col-sm-3">
	                <div class="form-group">
	                    <center><label>Titlu serviciu 2</label></center>
	                    <input class="form-control" placeholder="Titlu serviciu 2" name="titlu2" value="<?=$titlu2?>">
	                </div>
	            </div>
	            <div class="col-xs-6 col-sm-3">
	                <div class="form-group">
	                    <center><label>Titlu serviciu 3</label></center>
	                    <input class="form-control" placeholder="Titlu serviciu 3" name="titlu3" value="<?=$titlu3?>">
	                </div>
	            </div>
	            <div class="col-xs-6 col-sm-3">	
	                <div class="form-group">
	                    <center><label>Titlu serviciu 4</label></center>
	                    <input class="form-control" placeholder="Titlu serviciu 4" name="titlu4" value="<?=$titlu4?>">
	                </div>
	            </div>

	            <div class="col-xs-6 col-sm-3">
		            <div class="form-group">
	                    <center><label>Continut serviciu 1</label></center>
	                    <textarea class="form-control" name="continut1" rows="6"><?=$continut1?></textarea>
	                </div>
	            </div>
	            <div class="col-xs-6 col-sm-3">
		            <div class="form-group">
	                    <center><label>Continut serviciu 2</label></center>
	                    <textarea class="form-control" name="continut2" rows="6"><?=$continut2?></textarea>
	                </div>
	            </div>
	            <div class="col-xs-6 col-sm-3">
		            <div class="form-group">
	                    <center><label>Continut serviciu 3</label></center>
	                    <textarea class="form-control" name="continut3" rows="6"><?=$continut3?></textarea>
	                </div>
	            </div>
	            <div class="col-xs-6 col-sm-3">
		            <div class="form-group">
	                    <center><label>Continut serviciu 4</label></center>
	                    <textarea class="form-control" name="continut4" rows="6"><?=$continut4?></textarea>
	                </div>
	            </div>

	            <!-- <div class="col-md-4"> -->
                <?php 
                    $data = array(
                        'type' => 'submit',
                        'class' => 'btn btn-default',
                        'name' => 'services_submit',
                        'value' => 'Salveaza'
                    );
                    echo form_submit($data);
                    echo form_close();
                ?>

                <br><br>
                
                <?php 
                echo form_open('index.php/admin/despre_ins');
                $query = $this->db->query("SELECT * FROM general");
                foreach ($query->result() as $row)
                {
                    $despre = $row->about;
                } ?>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label>Despre noi:</label><br>
                        <div class="col-md-9"><textarea class="form-control" name="despre" rows="7"><?=$despre?></textarea></div>
                        <br><br><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php 
                    	$data = array(
                        'type' => 'submit',
                        'class' => 'btn btn-default',
                        'name' => 'services_submit',
                        'value' => 'Salveaza'
                   		); 
                    	echo form_submit($data); ?>
                        <div class="col-md-4"><?php echo form_close(); ?></div>
                    </div>
                </div>


	            <br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
            
        </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url().'application/views/admin_panel/bower_components/jquery/dist/jquery.min.js'; ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'application/views/admin_panel/bower_components/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url().'application/views/admin_panel/bower_components/metisMenu/dist/metisMenu.min.js'; ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url().'application/views/admin_panel/dist/js/sb-admin-2.js'; ?>"></script>

    <!-- Lightbox -->
    <script src="<?php echo base_url().'plugins/lightbox/dist/js/lightbox-plus-jquery.min.js'; ?>"></script>

</body>

</html>
