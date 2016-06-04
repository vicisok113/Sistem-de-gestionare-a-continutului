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
                        <h1 class="page-header">Categorii</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Adaugare categorie:</h3>
                    </div>
                    <div class="panel-body">
                     <?php $attributes = array('class' => '', 'role' => 'form');
                     echo form_open('index.php/admin/add_cat_produse_validation', $attributes); ?>
                            <fieldset>
                            <p><?php echo validation_errors(); ?></p>
                                <div class="form-group">
                                    <label>Nume categorie:</label>
                                    <input class="form-control" placeholder="Nume categorie" name="categorie" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                <label>Categorie parinte: </label>
                                    <?php echo ' <select class="form-control" name="parinte">';
                                    ?> <option value="0">Niciuna</option>
                                    <?php $query = $this->db->query("SELECT * FROM categorii_produse WHERE parinte = '0'");
                                    foreach ($query->result() as $row)
                                    {
                                        $id = $row->id;
                                        $categorie = $row->categorie;
                                        ?> <option value="<?php echo $id; ?>"><?php echo $categorie; ?></option>';
                                        <?php
                                    }
                                    echo '</select>'; ?>
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
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading"> Toate categoriile: </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Categorie</th>
                                            <th>Categorie parinte</th>
                                            <th>Editeaza</th>
                                            <th>Sterge</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                    $query = $this->db->query("SELECT * FROM categorii_produse");
                                    foreach ($query->result() as $row)
                                    {
                                        $id = $row->id;
                                        $categorie = $row->categorie;
                                        $parinte = $row->parinte;
                                    ?>
                                    <tbody>
                                    <?php if($parinte == '0'){?>
                                        <tr>
                                            <td><a href="<?php echo base_url().'index.php/admin/edit_cat_produse/'.$id; ?>"><?php echo $categorie; ?></a></td>
                                            <td>Niciuna</td>
                                            <td><a href="<?php echo base_url().'index.php/admin/edit_cat_produse/'.$id; ?>"><i style="font-size:25px; color:#000;" class="fa fa-pencil fta"></i></a></td>
                                            <td><a href="<?php echo base_url().'index.php/admin/delete_cat_produse/'.$id; ?>"><i style="font-size:25px; color:#000;" class="fa fa-trash-o fta"></i></a></td>
                                        </tr>
                                        <?php $query = $this->db->query("SELECT * FROM categorii_produse WHERE parinte = '".$id."'");
                                        foreach ($query->result() as $row)
                                        {
                                            $id1 = $row->id;
                                            $subcategorie = $row->categorie;
                                            $parinte1 = $row->parinte;
                                         ?>
                                         <tr>
                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url().'index.php/admin/edit_cat_produse/'.$id1; ?>"><?php echo $subcategorie; ?></a></td>
                                            <td><?php $query2 = $this->db->query("SELECT * FROM categorii_produse WHERE id ='".$parinte1."' ");
                                                        foreach ($query2->result() as $row)
                                                        {
                                                            $categorie1 = $row->categorie;
                                                            echo $categorie1;
                                                        }?></td>
                                            <td><a href="<?php echo base_url().'index.php/admin/edit_cat_produse/'.$id1; ?>"><i style="font-size:25px; color:#000;" class="fa fa-pencil fta"></i></a></td>
                                            <td><a href="<?php echo base_url().'index.php/admin/delete_cat_produse/'.$id1; ?>"><i style="font-size:25px; color:#000;" class="fa fa-trash-o fta"></i></a></td>
                                        </tr>
                                        <? }} ?>
                                    </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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
