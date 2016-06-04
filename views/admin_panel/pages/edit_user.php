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
            $query = $this->db->query("SELECT * FROM users WHERE id = '". $name ."'");
            foreach ($query->result() as $row)
            {
                $id = $row->id;
                $email = $row->email;
                $type = $row->type;
                $acces_produse = $row->acces_produse;
                $acces_articole = $row->acces_articole;
            }
            ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Editare user: <?php echo $email; ?></h3>
                    </div>
                    <div class="panel-body">
                     <?php $attributes = array('class' => '', 'role' => 'form');
                     echo form_open_multipart('index.php/admin/edit_user_validation/'.$id, $attributes); ?>
                            <fieldset>
                            <p><?php echo validation_errors(); ?></p>
                                <div class="form-group">
                                    <input value="<?php echo $email; ?>" class="form-control" placeholder="Email" name="email" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Tip utilizator</label>
                                    <select name="type" class="form-control">
                                    <?php if($type == 2) { ?>
                                        <option value="2" selected>Manager</option>
                                    <?php } else { ?>
                                        <option value="2">Manager</option>
                                    <?php } ?>
                                    <?php if($type == 1) { ?>
                                        <option value="1" selected>Administrator</option>
                                    <?php } else { ?>
                                        <option value="1">Administrator</option>
                                    <?php } ?>
                                    </select>
                                </div>

                                <?php if($type!=1) { ?>
                                    <div class="form-group">
                                        &nbsp;&nbsp;<input type="checkbox" <?php if($acces_articole == 1) echo "checked"; ?> name="acces_articole" value="1"> Acces articole
                                    </div>
                                    <div class="form-group">
                                        &nbsp;&nbsp;<input type="checkbox" <?php if($acces_produse == 1) echo "checked"; ?> name="acces_produse" value="1"> Acces produse <br>
                                    </div>
                                <?php } ?>
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
