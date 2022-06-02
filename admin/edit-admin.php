<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Membuat Akun Guru | Admin SiMadina</title>
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
                <a class="navbar-brand" href="index.html"><strong><i class="icon fa fa-dashboard"></i> Admin| SiMadina</strong></a>
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
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
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
                        <a href="buat-akun.php" class="active-menu" ><i class="fa fa-user"></i> Akun<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="buat-akun.php">Buat Akun</a>
                                </li>
                            <li>
                                <a href="daftar-akun-admin.php">Daftar Akun</a>
                            </li>
                            </ul>
                    </li>   
                    <li>
                        <a href="#"><i class="fa fa-file"></i> Mapel<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="masukkan-jadwal-admin.php">Masukkan Jadwal</a>
                                </li>
                            </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-comments"></i> Acara<span class="fa arrow"></span></a>
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
        <div id="page-wrapper">
            <div class="header"> 
                        <h1 class="page-header">
                            Guru <small>Welcome Admin</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><a href="#">Guru</a></li>
                            <li class="active">Buat Akun</li>
                        </ol>                       
            </div>
            <div id="page-inner">
                <!-- /. ROW  -->
                <div class="row">
                </div> 
                <!-- /. ROW  -->
                <div class="row">
                        <div class="col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title text-center">EDIT AKUN USER</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="panel panel-default">
                                            <?php
                                            include 'config.php';
                                            $id = $_GET['id'];
                                            $data = mysqli_query($conn,"select * from user where id='$id'");
                                            while($d = mysqli_fetch_array($data)){
                                                ?>
                                                <div class="panel-body">
                                                    <form method="POST" action="edit-admin-aksi.php">
                                                        <div class="form-group">
                                                            <td>
                                                                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                                                            </td>
                                                                <label class="control-label" style="position:relative; top:7px;">Level:</label>
                                                                    <select id="level" class="form-control" name="level"  required="">
                                                                        <option >Pilih Level </option>
                                                                            <option >Admin </option>
                                                                            <option >Guru</option>
                                                                            <option >Murid</option>
                                                                    </select>
                                                        </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputNik">Nama :</label>
                                                                <input type="text" class="form-control" name="nama"  value="<?php echo $d['nama']; ?>" placeholder="Masukkan Nama">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputAlamat">Username:</label>
                                                                <input type="text" class="form-control" name="username" value="<?php echo $d['username']; ?>" placeholder="Masukkan Username">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputNik">Password :</label>
                                                                <input type="text" class="form-control" name="password" value="<?php echo $d['password']; ?>" placeholder="Masukkan Password">
                                                            </div>
                                                            <center> <button type="submit" class="btn btn-default">Submit</button> </center>
                                                    </form>
                                                        <?php
                                                            }
                                                        ?>
                                                </div>
                                        </div>
                                    </div>
                                    <!-- FOOOTER -->
                                        <footer><p><center> All right reserved | SiMadina 2022</center></p>
                                        </footer>
                                </div>
                            </div>
                        </div>
                </div>            
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
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