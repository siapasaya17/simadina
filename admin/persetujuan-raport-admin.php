<?php
include 'config.php';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Acara | Admin SiMadina</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard-admin.php"><strong> <h3> <img style="margin-right: 0px;" width=25 height=35 src="assets/logo/logo-tk.png"/> Admin| SiMadina </h3> <strong></a>
                    <div id="sideNav" href="">
                        <i class="fa fa-bars icon"></i> 
                    </div>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="dashboard-admin.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="buat-akun.php" class="" ><i class="fa fa-user"></i> Akun<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="buat-akun.php">Buat Akun</a>
                                </li>
                                <li>
                                    <a href="daftar-akun-admin.php">Daftar Akun</a>
                                </li>
                                <li>
                                    <a href="akun-guru.php">Akun Guru</a>
                                </li>
                                <li>
                                    <a href="akun-murid.php">Akun Murid</a>
                                </li>
                            </ul>
                    </li>   
                    <li>
                        <a href="masukkan-jadwal-admin.php"><i class="fa fa-file"></i> Mapel<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="masukkan-jadwal-admin.php">Masukkan Jadwal</a>
                                </li>
                            </ul>
                    </li>
                    <li>
                        <a  class="active-menu" href="persetujuan-raport-admin.php"><i class="fa fa-comments"></i> Acara<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="persetujuan-raport-admin.php">Persetujuan Raport</a>
                                </li>
                            </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
                <div class="header"> 
                    <h1 class="page-header">
                        Acara <small>Welcome Admin</small>
                    </h1>
                        <ol class="breadcrumb">
                            <li><a href="#">Acara</a></li>
                            <li class="active">Persetujuan rapor</li>
                        </ol>              
                </div>
        <div id="page-inner">  
          <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <center>Daftar Persetujuan Rapor | Admin</center>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>No</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd gradeX">
                                                    <td>Trident</td>
                                                    <td>Trident</td>
                                                    <td>Internet Explorer 4.0</td>
                                                    <td>
                                                    <a href="#>" data-toggle="modal" class="btn btn-primary">ya<span></span> </a> 
                                                    <a href="#>" data-toggle="modal" class="btn btn-danger">tidak<span></span> </a> 
                                                    </td>
                                                </tr>
                                                <tr class="even gradeC">
                                                    <td>Trident</td>
                                                    <td>Trident</td>
                                                    <td>Internet Explorer 5.0</td>
                                                    <td>
                                                    <a href="#>" data-toggle="modal" class="btn btn-primary">ya<span></span> </a> 
                                                    <a href="#>" data-toggle="modal" class="btn btn-danger">tidak<span></span> </a> 
                                                    </td>
                                                </tr>
                                                <tr class="odd gradeA">
                                                    <td>Trident</td>
                                                    <td>Trident</td>
                                                    <td>Internet Explorer 5.5</td>
                                                    <td>
                                                    <a href="#>" data-toggle="modal" class="btn btn-primary">ya<span></span> </a> 
                                                    <a href="#>" data-toggle="modal" class="btn btn-danger">tidak<span></span> </a> 
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
                <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-6">
                </div>
            </div>
    </div>
               <footer><p><center> All right reserved | SiMadina 2022</center></p></footer>
    <!-- /. PAGE WRAPPER  -->
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>