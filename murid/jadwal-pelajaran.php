<?php 
    session_start();
    $koneksi = new mysqli("localhost", "root", "", "madina");
    include '../admin/config.php';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Jadwal Pelajaran | SiMadina</title>
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
                <a class="navbar-brand" href="dashboard-guru.php"><strong> <h3> <img style="margin-right: 0px;" width=25 height=35 src="assets/logo/logo-tk.png"/> Murid| SiMadina </h3> <strong></a>
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
                        <li><a href="biodata-guru.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../admin/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                        <a class="" href="dashboard-murid.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="biodata-murid.php" class=""><i class="fa fa-user"></i>Biodata<span class="fa "></span></a>
                    </li>	
                    <li>
                        <a href="nilai-murid.php" class=""><i class="fa fa-user"></i>Nilai<span class="fa "></span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-file"></i>Pesan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="kirim-pesan-murid.php">Kirim Pesan</a>
                            </li>
                            <li>
                                <a href="daftar-pesan-murid.php">Daftar Pesan</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="active-menu" href="jadwal-pelajaran.php"><i class="fa fa fa-file"></i> Jadwal Pelajaran </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div class="header"> 
                <h1 class="page-header">
                    Jadwal Pelajaran <small>Welcome</small>
                </h1>
                    <ol class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li class="active">Jadwal Pelajaran</li>
                    </ol>                   
            </div>
            <div id="page-inner">   
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">    
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <center>Daftar Mata pelajaran | Murid</center>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>File Name</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody> 
                                                            <?php
                                                                $no=1;
                                                                $row = $conn->query("SELECT * FROM `jadwal`") or die(mysqli_error());
                                                                while($fetch = $row->fetch_array()){
                                                                ?>
                                                                <tr>
                                                                    <?php 
                                                                    $name = explode('/', $fetch['file']);
                                                                    ?>
                                                                    <td><?php echo $no++ ?></td>
                                                                    <td><?php echo $fetch['name']?></td>
                                                                    <td><a href="../admin/download.php?file=<?php echo $name[1]?>" class="btn btn-primary"><span class="glyphicon glyphicon-download"></span> Download</a></td>

                                                                </tr>
                                                                <?php
                                                                }
                                                                ?>
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
            </div>
            <div class="row">  
                <div class="col-md-6"></div>
            </div>
        </div>
            <footer> <p><center> All right reserved | SiMadina 2022</center></p> </footer>
    </div> 
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
     
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    
    
    <script src="assets/js/easypiechart.js"></script>
    <script src="assets/js/easypiechart-data.js"></script>
    
    <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
    
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    <!-- Chart Js -->
    <script type="text/javascript" src="assets/js/Chart.min.js"></script>  
    <script type="text/javascript" src="assets/js/chartjs.js"></script> 

</body>

</html>