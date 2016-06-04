<?php
    $query = $this->db->query("SELECT * FROM users WHERE email = '".$this->session->userdata('email')."'");
    foreach ($query->result() as $row)
    {
        $id = $row->id;
        $type = $row->type;
        $acces_produse = $row->acces_produse;
        $acces_articole = $row->acces_articole;
    }
?>

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </button>

                <a class="navbar-brand" href="<?php echo base_url().'admin/'; ?>">Admin - Page</a>

            </div>

            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->

                <li class="dropdown">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>

                    </a>

                    <ul class="dropdown-menu dropdown-user">

                        <li><a href="<?php echo base_url().''; ?>" target="_blank"><i class="fa fa-tasks fa-fw"></i> Vezi site</a>

                        </li>

                        <li class="divider"></li>

                        <li><a href="<?php echo base_url().'admin/logout'; ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>

                        </li>

                    </ul>

                    <!-- /.dropdown-user -->

                </li>

                <!-- /.dropdown -->

            </ul>

            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">

                <div class="sidebar-nav navbar-collapse">

                    <ul class="nav" id="side-menu">

                        <li class="sidebar-search">

                            <div class="input-group custom-search-form">

                                <p></p>

                            </span>

                            </div>

                            <!-- /input-group -->

                        </li>

                        <li>

                            <a href="<?php echo base_url().'admin'; ?>"><i class="fa fa-dashboard fa-fw"></i> Home</a>

                        </li>

                        <?php if($acces_articole==1) { ?>

                        <li>

                            <a href="#"><i class="fa fa-table fa-fw"></i> Articole<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">

                                <li>

                                    <a href="<?php echo base_url().'admin/articole'; ?>">Toate postarile</a>

                                </li>

                                <li>

                                    <a href="<?php echo base_url().'admin/categorii_blog'; ?>">Categorii</a>

                                </li>

                            </ul>

                            <!-- /.nav-second-level -->

                        </li>

                        <?php } ?>

                        <?php if($acces_produse==1) { ?>

                        <li>

                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Produse<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">

                                <li>

                                    <a href="<?php echo base_url().'admin/produse'; ?>">Toate Produsele</a>

                                </li>

                                <li>

                                    <a href="<?php echo base_url().'admin/categorii_produse'; ?>">Categorii</a>

                                </li>

                            </ul>

                            <!-- /.nav-second-level -->

                        </li>

                        <?php } ?>

                        <?php if($type==1) { ?>

                        <li>

                            <a href="<?php echo base_url().'admin/pages'; ?>"><i class="fa fa-files-o fa-fw"></i> Pagini</a>

                        </li>

                        <li>

                            <a href="<?php echo base_url().'admin/comenzi'; ?>"><i class="fa fa-edit fa-fw"></i> Comenzi</a>

                        </li>

                        <li>

                            <a href="<?php echo base_url().'admin/users'; ?>"><i class="fa fa-sitemap fa-fw"></i> Useri</a>

                        </li>

                        <li>

                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Setari<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">

                                <li>

                                    <a href="<?php echo base_url().'admin/setari_general'; ?>">General</a>

                                </li>

                                <li>

                                    <a href="<?php echo base_url().'admin/setari_design'; ?>">Design</a>

                                </li>

                                <!-- <li>

                                    <a href="#">Magazin<span class="fa arrow"></span></a>

                                    <ul class="nav nav-third-level">

                                        <li>

                                            <a href="#">Transport</a>

                                        </li>

                                    </ul>

                                </li> -->

                            </ul>

                            <!-- /.nav-second-level -->

                        </li>

                        <?php } ?>

                    </ul>

                </div>

                <!-- /.sidebar-collapse -->

            </div>

            <!-- /.navbar-static-side -->

        </nav>