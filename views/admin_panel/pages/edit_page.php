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

    <script>
    UPLOADCARE_PUBLIC_KEY = 'your_public_key';
    </script>
    <script type="text/javascript">

UPLOADCARE_PUBLIC_KEY = 'demopublickey';
CKEDITOR.replace('demo-editor', {
    extraPlugins: 'uploadcare',
    toolbar: [
        ['Uploadcare', 'Image'], ['Source', 'About']
    ],
    uploadcare: {
        multiple: true
    }
});
});
                                    </script>
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
            $query = $this->db->query("SELECT * FROM pages WHERE id = '". $name ."'");
            foreach ($query->result() as $row)
            {
                $id = $row->id;
                $nume = $row->titlu;
                $descriere = $row->continut;
                $video = $row->video;
                $seo_title = $row->seo_title;
                $seo_description = $row->seo_description;
                $seo_key = $row->seo_key;
                $target = $row->target_blank;
                $show_menu = $row->show_menu;
                $show_site = $row->show_site;
            }
            ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Editare articol: <?php echo $nume; ?></h3>
                    </div>
                    <div class="panel-body">
                     <?php $attributes = array('class' => '', 'role' => 'form');
                     echo form_open_multipart('index.php/admin/edit_page_validation/'.$id, $attributes); ?>
                            <fieldset>
                            <p><?php echo validation_errors(); ?></p>
                                <div class="form-group">
                                    <label>Titlu</label>
                                    <?php if($id==1) { ?>
                                        <input class="form-control" value="<?php echo $nume; ?>" id="disabledInput" type="text" name="titlu" placeholder="Titlu" disabled>
                                    <?php } else { ?>
                                        <input class="form-control" value="<?php echo $nume; ?>" placeholder="aaa" name="titlu" type="text" autofocus>
                                    <?php } ?>
                                </div>

                                <?php if($id==1) { ?>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" <?php if($show_site==1) echo "checked"; ?> value="1" name="show_site">Apare pe site
                                        </label>
                                    </div>
                                <?php } ?>
                                <?php if($id!=1) { ?>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" <?php if($show_menu==1) echo "checked"; ?> value="1" name="show_menu">Apare in meniu
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" <?php if($target==1) echo "checked"; ?> value="1" name="target">Target blank
                                        </label>
                                    </div>
                                <?php } ?>
                                <div class="form-group">
                                    <label>Descriere</label>
                                    <!-- <textarea id="ckeditor" class="ckeditor" name="continut"><?php echo $descriere; ?></textarea> -->
                                    <br>
                                    <textarea id="continut" name="continut" rows="10" cols="80"><?php echo $descriere; ?></textarea>
                                    <script type="text/javascript">
                                    var editor = CKEDITOR.replace( 'continut', {
                                        filebrowserBrowseUrl : '<?php echo base_url()."plugins";?>/ckfinder/ckfinder.html',
                                        filebrowserImageBrowseUrl : '<?php echo base_url()."plugins";?>/ckfinder/ckfinder.html?type=Images',
                                        filebrowserFlashBrowseUrl : '<?php echo base_url()."plugins";?>/ckfinder/ckfinder.html?type=Flash',
                                        filebrowserUploadUrl : '<?php echo base_url()."plugins";?>/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                        filebrowserImageUploadUrl : '<?php echo base_url()."plugins";?>/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                        filebrowserFlashUploadUrl : '<?php echo base_url()."plugins";?>/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                                    });
                                    CKFinder.setupCKEditor( editor, '../' );
                                    </script>
                                </div>
                                <?php if($id!=1) { ?>
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
                                <?php } ?>
                                <div class="form-group">
                                    <label>Video</label>
                                    <input value="<?php echo $video; ?>" class="form-control" placeholder="Video" name="video" type="text" autofocus>
                                </div>

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
