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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Adaugare utilizator</h3>
                    </div>
                    <div class="panel-body">
                     <?php $attributes = array('class' => '', 'role' => 'form');
                     echo form_open('index.php/admin/add_user_validation', $attributes); ?>
                            <fieldset>
                            <p><?php echo validation_errors(); ?></p>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="email" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Parola" name="parola" type="password" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Tip utilizator</label>
                                    <select name="type" class="form-control">
                                        <option value="2">Simplu</option>
                                        <option value="1">Administrator</option>
                                    </select>
                                </div>
                                <?php
                                $data = array(
                                "name" => "send",
                                "type" => "submit",
                                "value" => "Adaugare",
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