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
                        <h1 class="page-header">Pagini</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading"> Toate paginile &nbsp;&nbsp;<a href="<?php echo base_url().'admin/add_page'; ?>" class="btn btn-outline btn-primary">Adaugare</a></div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Titlu pagina</th>
                                            <th>Vezi pagina</th>
                                            <th>Editeaza</th>
                                            <th>Sterge</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="<?php echo base_url().'admin/edit_page/1';?>">Index page</a></td>
                                        <td><a href="<?php echo base_url().'index.php/';?>"><i style="font-size:25px; color:#000;" class="fa fa-eye"></i></a></td>
                                        <td><a href="<?php echo base_url().'admin/edit_page/1';?>"><i style="font-size:25px; color:#000;" class="fa fa-pencil fta"></i></a></td>
                                        <td><i style="font-size:25px; color:#808080;" class="fa fa-trash-o fta"></i></td>
                                    </tr>
                                    <?php 
                                    $query = $this->db->query("SELECT * FROM pages");
                                    foreach ($query->result() as $row)
                                    {
                                        $id = $row->id;
                                        
                                        $nume = $row->titlu;
                                        $str = $nume;
                                        $arr = explode(" ",$str);
                                        $linie = implode("-",$arr);

                                        $descriere = $row->continut;
                                        $video = $row->video;
                                        if($id!=1) {
                                    ?>
                                    <tr>
                                        <td><a href="<?php echo base_url().'admin/edit_page/'.$id; ?>"><?php echo $nume; ?></a></td>
                                        <td><a href="<?php echo base_url().'page/'.$id.'/'.$linie; ?>"><i style="font-size:25px; color:#000;" class="fa fa-eye"></i></a></td>
                                        <td><a href="<?php echo base_url().'admin/edit_page/'.$id; ?>"><i style="font-size:25px; color:#000;" class="fa fa-pencil fta"></i></a></td>
                                        <td><a href="<?php echo base_url().'admin/delete_page/'.$id; ?>"><i style="font-size:25px; color:#000;" class="fa fa-trash-o fta"></i></a></td>
                                    </tr>
                                    <?php }} ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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
