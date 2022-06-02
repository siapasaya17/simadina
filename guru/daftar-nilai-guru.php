<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Daftar Nilai Murid | SiMadina</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
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
                <a class="navbar-brand" href="dashboard-guru.php"><strong> <h3> <img style="margin-right: 0px;" width=25 height=35 src="assets/logo/logo-tk.png"/> Guru| SiMadina </h3> <strong></a>
                    <div id="sideNav" href="dashboard-guru.php">
                        <i class="fa fa-bars icon"></i> 
                    </div>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="biodata-guru.php"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="../admin/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="dashboard-guru.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="biodata-guru.php"><i class="fa fa-user"></i>Biodata<span class="fa "></span></a>
                    </li>   
                    <li>
                        <a href="#" ><i class="fa fa-user"></i>Pesan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="tulis-pesan-guru.php">Tulis Pesan</a>
                                </li>
                                <li>
                                    <a href="daftar-pesan-guru.php">Daftar Pesan</a>
                                </li>
                            </ul>
                    </li>
                    <li>
                        <a href="#"class="active-menu"><i class="fa fa-file"></i>Nilai Murid<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="input-nilai-guru.php">Input Nilai</a>
                            </li>
                            <li>
                                <a href="daftar-nilai-guru.php">Daftar Nilai</a>
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
                        GURU <small>Welcome Guru</small>
                    </h1>
                        <ol class="breadcrumb">
                            <li><a href="#">Nilai Murid</a></li>
                            <li class="active">Daftar Nilai Murid</li>
                        </ol>                           
                </div>
        <div id="page-inner">  
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <center>Daftar Nilai Murid | Guru</center>
                        </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>No Induk</th>
                                                <th>Nama</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>3</td>
                                                <td>Win 95+</td>
                                                <td>Win 95+</td>
                                                <td>
                                                <a href="#>"data-toggle="modal" class="btn btn-primary">Detail<span></span> </a>
                                                </td>
                                            </tr>
                                            <tr class="even gradeC">
                                                <td>4</td>
                                                <td>Win 95+</td>
                                                <td>Win 95+</td>
                                                <td>
                                                <a href="#>" data-toggle="modal" class="btn btn-primary">Detail<span></span> </a> 
                                                </td>
                                            </tr>
                                            <tr class="odd gradeA">
                                                <td>5</td>
                                                <td>Win 95+</td>
                                                <td>Win 95+</td>
                                                <td>
                                                <a href="#>" data-toggle="modal" class="btn btn-primary">Detail<span></span> </a> 
                                                </td>
                                            </tr>
                                            <tr class="even gradeA">
                                                <td>6</td>
                                                <td>Win 98+</td>
                                                <td>Win 95+</td>
                                                <td>
                                                <a href="#>" data-toggle="modal" class="btn btn-primary">Detail<span></span> </a>  
                                                </td>
                                            </tr>
                                            <tr class="odd gradeA">
                                                <td>7</td>
                                                <td>Win XP SP2+</td>
                                                <td>Win 95+</td>
                                                <td>
                                                <a href="#>" data-toggle="modal" class="btn btn-primary">Detail<span></span> </a>
                                                </td>
                                            </tr>
                                            <tr class="gradeU">
                                                <td>All others</td>
                                                <td>apa kek</td>
                                                <td>Win 95+</td>
                                                <td>
                                                <a href="#>" data-toggle="modal" class="btn btn-primary">Detail<span></span> </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>  
                            </div>
                        </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-6">
                </div>
            </div>
        </div>
               <footer><p><center> All right reserved | SiMadina 2022</center></p></footer>
    </div>
    </div>
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