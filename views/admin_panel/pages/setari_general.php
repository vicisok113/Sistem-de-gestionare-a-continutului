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
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Setari - General</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        <!-- /#page-wrapper -->
        </div>
        <?php 
        $query = $this->db->query("SELECT * FROM general");
        foreach ($query->result() as $row)
        {
            $titlu_nume_site = $row->titlu_nume_site;
            $email_contact = $row->email_contact;
            $default_meta_description = $row->default_meta_description;
            $default_meta_key = $row->default_meta_key;
            $telefon_contact = $row->telefon_contact;
            $footer_text = $row->footer_text;
            $footer_link = $row->footer_link;
            $despre = $row->about;
            $facebook_link = $row->facebook_link;
            $twiter_link = $row->twiter_link;
            $google_link = $row->google_link;
        }
        ?>
        <div class="">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Setari generale:
                        </div>
                        <!-- /.panel-heading -->
                        <style type="text/css">
                        td {
                            text-align: middle;
                            font-size: 16px;
                            padding-bottom: 0.5%;
                        }
                        input {
                            width: 100%;
                            height: 25px;
                            text-align: center;
                        }
                        textarea {
                            width: 100%;
                            font-family: Arial;
                            text-align: center;
                        }
                        input[type=submit] {
                            text-align: center;
                            padding-bottom: 7%;
                            height: 25px;
                            font-size: 15px;
                            font-family: Arial;
                        }
                        </style>
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td align="middle">TITLU NUME SITE</td>
                                            <td align="middle">
                                            <?php echo form_open('index.php/admin/titlu_ins');
                                                echo form_input('titlu_nume_site', "".$titlu_nume_site.""); ?>
                                            </td>
                                            <td align="middle">
                                            <?php echo form_submit('setari_submit', 'salvare');
                                                echo form_close(); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="middle">DEFAULT META DESCRIPTION</td>
                                            <td align="middle">
                                            <?php echo form_open('index.php/admin/meta_desc_ins');
                                                echo form_input('default_meta_description', "".$default_meta_description.""); ?>
                                            </td>
                                            <td align="middle">
                                            <?php echo form_submit('setari_submit', 'salvare');
                                                echo form_close(); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="middle">DEFAULT META KEY</td>
                                            <td align="middle">
                                            <?php echo form_open('index.php/admin/meta_key_ins');
                                                echo form_input('default_meta_key', "".$default_meta_key.""); ?>
                                            </td>
                                            <td align="middle">
                                            <?php echo form_submit('setari_submit', 'salvare');
                                                echo form_close(); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="middle">EMAIL CONTACT</td>
                                            <td align="middle">
                                            <?php echo form_open('index.php/admin/email_ins');
                                                echo form_input('email_contact', "".$email_contact.""); ?>
                                            </td>
                                            <td align="middle">
                                            <?php echo form_submit('setari_submit', 'salvare');
                                                echo form_close(); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="middle">TELEFON CONTACT</td>
                                            <td align="middle">
                                            <?php echo form_open('index.php/admin/tel_con_ins');
                                                echo form_input('telefon_contact', "".$telefon_contact.""); ?>
                                            </td>
                                            <td align="middle">
                                            <?php echo form_submit('setari_submit', 'salvare');
                                                echo form_close(); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="middle">FOOTER TEXT</td>
                                            <td align="middle">
                                            <?php echo form_open('index.php/admin/ftext_ins');
                                                echo form_input('footer_text', "".$footer_text.""); ?>
                                            </td>
                                            <td align="middle">
                                            <?php echo form_submit('setari_submit', 'salvare');
                                                echo form_close(); ?>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td align="middle">FOOTER LINK</td>
                                            <td align="middle">
                                            <?php echo form_open('index.php/admin/flink_ins');
                                                echo form_input('footer_link', "".$footer_link.""); ?>
                                            </td>
                                            <td align="middle">
                                            <?php echo form_submit('setari_submit', 'salvare');
                                                echo form_close(); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="middle">Facebook link</td>
                                            <td align="middle">
                                            <?php echo form_open('index.php/admin/facebook_link_ins');
                                                echo form_input('facebook_link', "".$facebook_link.""); ?>
                                            </td>
                                            <td align="middle">
                                            <?php echo form_submit('setari_submit', 'salvare');
                                                echo form_close(); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="middle">Twiter link</td>
                                            <td align="middle">
                                            <?php echo form_open('index.php/admin/twiter_link_ins');
                                                echo form_input('twiter_link', "".$twiter_link.""); ?>
                                            </td>
                                            <td align="middle">
                                            <?php echo form_submit('setari_submit', 'salvare');
                                                echo form_close(); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="middle">Google Plus link</td>
                                            <td align="middle">
                                            <?php echo form_open('index.php/admin/google_link_ins');
                                                echo form_input('google_link', "".$google_link.""); ?>
                                            </td>
                                            <td align="middle">
                                            <?php echo form_submit('setari_submit', 'salvare');
                                                echo form_close(); ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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

</body>

</html>
