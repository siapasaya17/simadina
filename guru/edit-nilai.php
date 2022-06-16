
<?php
	include('../admin/config.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Edit Akun| Guru SiMadina</title>
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
                <a class="navbar-brand" href="index.html"><strong><i class="icon fa fa-dashboard"></i> Guru| SiMadina</strong></a>
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
                        <a href="#" class="active-menu"><i class="fa fa-file"></i>Nilai Murid<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="input-nilai-guru.php">Input Nilai</a>
                            </li>
                            <li>
                                <a href="daftar-nilai-guru.php">Daftar Nilai</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="" href="jadwal-pelajaran.php"><i class="fa fa fa-file"></i> Jadwal Pelajaran </a>
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
                            <li><a href="#">Daftar Akun</a></li>
                            <li class="active">Edit Akun</li>
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
                                            $id_murid = $_GET['id_murid'];
                                            $data = mysqli_query($conn,"SELECT * from nilai inner join murid on nilai.id_murid=murid.id_murid ");
                                            while($d = mysqli_fetch_array($data)){
                                                ?>
                                                <div class="panel-body">
                                                    <form method="POST" action="edit-nilai-aksi.php">
                                                            <div class="form-group">
                                                                <label for="exampleInputNik">Nama :</label>
                                                                <input type="text" class="form-control" name="nama"  value="<?php echo $d['nama']; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputAlamat">ID Murid</label>
                                                                <input type="text" class="form-control" name="id_murid" value="<?php echo $d['id_murid']; ?>" placeholder="Masukkan ">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputNik">Kelas :</label>
                                                                <input type="text" class="form-control" name="kelas" value="<?php echo $d['kelas']; ?>" placeholder="Masukkan ">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputNik">No Induk :</label>
                                                                <input type="text" class="form-control" name="nisn" value="<?php echo $d['nisn']; ?>" placeholder="Masukkan ">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputNik">Semester :</label>
                                                                <input type="text" class="form-control" name="semester" value="<?php echo $d['semester']; ?>" placeholder="Masukkan ">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputNik">Lingkup :</label>
                                                                <input type="text" class="form-control" name="kode_ligkup" value="<?php echo $d['kode_lingkup']; ?>" placeholder="Masukkan ">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputNik">Perkembangan :</label>
                                                                <input type="text" class="form-control" name="kode_sub_lingkup" value="<?php echo $d['kode_sub_lingkup']; ?>" placeholder="Masukkan ">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputNik">Indikator :</label>
                                                                <input type="text" class="form-control" name="kode_indikator" value="<?php echo $d['kode_indikator']; ?>" placeholder="Masukkan ">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputNik">Nilai :</label>
                                                                <input type="text" class="form-control" name="nilai" value="<?php echo $d['nilai']; ?>" placeholder="Masukkan ">
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