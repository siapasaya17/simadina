<?php 
    include 'config.php';
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

    $query  = "SELECT * FROM guru";
        $sql    = mysqli_query($conn, $query);
        $count1 = mysqli_num_rows($sql);

    $query  = "SELECT * FROM murid";
        $sql    = mysqli_query($conn, $query);
        $count2 = mysqli_num_rows($sql);
 
	?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Dashboard Admin | SiMadina</title>
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
                        <a class="active-menu" href="dashboard-admin.php"><i class="fa fa-dashboard"></i> Dashboard</a>
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
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
		<div id="page-wrapper">
		    <div class="header"> 
                        <h1 class="page-header">
                            Dashboard <small>Welcome Admin  </small>
                        </h1>
                        <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	
						<ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Dashboard</li>
					    </ol> 
									
		    </div>
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
					    <div class="board">
                            <div class="panel panel-primary">
						        <div class="number">
							        <h3>
                                        <h3><?php echo $count1 ?></h3>
                                        <small>Guru</small>
							        </h3> 
						        </div>
                                <div class="icon">
                                <i class="fa fa-user fa-5x red"></i>
                                </div>
                            </div>
						</div>
                    </div>
					<div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="board">
                            <div class="panel panel-primary">
                                <div class="number">
                                    <h3>
                                        <h3><?php echo $count2 ?></h3>
                                        <small>Murid</small>
                                    </h3> 
						        </div>
                                <div class="icon">
                                <i class="fa fa-user fa-5x blue"></i>
                                </div>
                            </div>
						</div>
                    </div>
                </div> 	
				<div class="row">
				    <div class="col-md-12">
				    </div>		
				</div> 	
                <!-- /. ROW  -->
                <div class="row">
                        <div class="col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title text-center">KB IT AL-MADINA ACADEMY</div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-12">
                                        <!--   Kitchen Sink -->
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead>
                                                                    <tr>
                                                                        <th>NPSN</th>
                                                                        <th>: 69852808</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Alamat</th>
                                                                        <th>: JL.ADE IRMA SURYANI PANDA IV</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Kode Pos</th>
                                                                        <th>: 83122</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Kelurahan</th>
                                                                        <th>: Monjok</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Kecamatan</th>
                                                                        <th>: Kec. Selaparang</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>NPSN</th>
                                                                        <th>: 69852808</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>NPSN</th>
                                                                        <th>: 69852808</th>
                                                                    </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                            <!-- End  Kitchen Sink -->
                                        </div>
                                </div>
                        <!-- FOOOTER -->
				                <footer><p><center> All right reserved | SiMadina 2022</center></p></footer>
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