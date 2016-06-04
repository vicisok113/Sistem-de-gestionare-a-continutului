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
<?php 
    $query = $this->db->query("SELECT * FROM comenzi WHERE id = '".$name."'");
    foreach ($query->result() as $row)
    {
        $id = $row->id;
        $nume_dest = $row->nume_dest;
        $email = $row->email_dest;
        $adresa = $row->adresa_dest;
        $telefon = $row->telefon_dest;
        $nume_produs = $row->nume_produs;
        $pret = $row->pret_produs;
        $comentarii = $row->adaugari_client;
        $data = $row->data;
    }
    ?>

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
        <div class="row col-xs-12">
            <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Comanda #<?=$name?></h3>
                        </div>
                        <div class="panel-body">
                            <p class="lead"><b>Nume destinatar:</b> <?=$nume_dest?></p>

                            <p class="lead"><b>Email destinatar:</b> <?=$email?></p>
                            
                            <p class="lead"><b>Adresa destinatar:</b> <?=$adresa?></p>
                            
                            <p class="lead"><b>Telefon destinatar:</b> <?=$telefon?></p>

                            <p class="lead"><b>Nume produs:</b> <?=$nume_produs?></p>

                            <p class="lead"><b>Pret produs:</b> <?=$pret?></p>

                            <p class="lead"><b>Data plasarii comenzii:</b> <?=$data?></p>

                            <?php if($comentarii) { ?><p class="lead"><b>Adaugari client:</b> <?=$comentarii?></p> <?php } ?>
                        
                        </div>
                        <!-- /.panel-body -->
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
