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

    <!-- Ckeditor -->
    <script type="text/javascript" src="<?php echo base_url().'plugins/ckeditor/ckeditor.js'; ?>"></script>


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

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <?php
            $query = $this->db->query("SELECT * FROM blogs WHERE id = '". $name ."'");
            foreach ($query->result() as $row)
            {
                $id = $row->id;
                $nume = $row->titlu;
                $categorie1 = $row->categorie;
                $descriere = $row->continut;
                $video = $row->video;
                $seo_title = $row->seo_title;
                $seo_description = $row->seo_description;
                $seo_key = $row->seo_key;
            }
            ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Editare articol: <?php echo $nume; ?></h3>
                    </div>
                    <div class="panel-body">
                     <?php $attributes = array('class' => '', 'role' => 'form');
                     echo form_open_multipart('index.php/admin/edit_blog_validation/'.$id, $attributes); ?>
                            <fieldset>
                            <p><?php echo validation_errors(); ?></p>
                                <div class="form-group">
                                    <label>Titlu</label>
                                    <input class="form-control" value="<?php echo $nume; ?>" placeholder="Titlu" name="titlu" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                            <label>Categorie</label>
                                    <?php $query = $this->db->query("SELECT * FROM categorii_blog");
                                    foreach ($query->result() as $row)
                                    {
                                        $id1 = $row->id;
                                        $categorie = $row->categorie;
                                        $parinte = $row->parinte;
                                        if($parinte == '0') {
                                        ?>
                                            <div class="radio">
                                                <label>
                                                <?php if($categorie1==$categorie) { ?>
                                                    <input type="radio" name="categorie" id="optionsRadios1" value="<?php echo $categorie; ?>" checked><?php echo $categorie; ?>
                                                <?php } else { ?>
                                                    <input type="radio" name="categorie" id="optionsRadios1" value="<?php echo $categorie; ?>"><?php echo $categorie; ?>
                                                <?php } ?>
                                                </label>
                                            </div>
                                        <?php } 
                                        $query = $this->db->query("SELECT * FROM categorii_blog WHERE parinte = '".$id1."'");
                                        foreach ($query->result() as $row)
                                        {
                                            $subcategorie = $row->categorie;
                                         ?>
                                            <div class="radio">
                                                <label style="margin-left:2.5%;">
                                                    <?php if($categorie1==$subcategorie) { ?>
                                                        <input type="radio" name="categorie" id="optionsRadios1" value="<?php echo $subcategorie; ?>" checked><?php echo $subcategorie; ?>
                                                    <?php } else { ?>
                                                        <input type="radio" name="categorie" id="optionsRadios1" value="<?php echo $subcategorie; ?>"><?php echo $subcategorie; ?>
                                                    <?php } ?>
                                                </label>
                                            </div>
                                        <?php }} ?>
                                </div>
                                <div class="form-group">
                                    <label>Descriere</label>
                                    <textarea class="ckeditor" name="continut"><?php echo $descriere; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Seo title</label>
                                    <input value="<?php echo $seo_title; ?>" class="form-control" placeholder="Seo title" name="seo_title" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Seo description</label>
                                    <input value="<?php echo $seo_description; ?>" class="form-control" placeholder="Seo decription" name="seo_description" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Seo keywords</label>
                                    <input value="<?php echo $seo_key; ?>" class="form-control" placeholder="Seo keywords" name="seo_key" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Video</label>
                                    <input value="<?php echo $video; ?>" class="form-control" placeholder="Video" name="video" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Adaugare imagine: </label>
                                    (nota: imaginea trebuie sa fie minim 400x400px)
                                    <input type="file" name="pic">
                                </div>
                               <!-- <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                                <?php
                                echo '<p style="display: none;">id<br> ';
                                echo form_input('id', "".$id."");
                                echo '</p>';
                                $data = array(
                                "name" => "send",
                                "type" => "submit",
                                "value" => "Aplica",
                                "class" => "btn btn-lg btn-success btn-block"
                                );  
                                echo form_submit($data); ?>
                            </fieldset>
                     <?php echo form_close(); ?>
                    </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

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

</body>

</html>
