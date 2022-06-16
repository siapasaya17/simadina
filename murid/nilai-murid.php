<?php 
session_start();
include '../admin/controller.php';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Nilai Murid| SiMadina</title>
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
                <a class="navbar-brand" href="dashboard-murid.php"><strong> <h3> <img style="margin-right: 0px;" width=25 height=35 src="assets/logo/logo-tk.png"/> Murid| SiMadina </h3> <strong></a>	
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
                        <li><a href="biodata-murid.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
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
                        <a href="nilai-murid.php" class="active-menu"><i class="fa fa-user"></i>Nilai<span class="fa "></span></a>
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
                        <a class="" href="jadwal-pelajaran.php"><i class="fa fa fa-file"></i> Jadwal Pelajaran </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
		<div id="page-wrapper">
		    <div class="header"> 
                <h1 class="page-header"> Nilai <small>Welcome Murid</small></h1>
					<ol class="breadcrumb">
					    <li><a href="#">Home</a></li>
					    <li class="active">Nilai</li>
					</ol> 			
		    </div>
            <div id="page-inner">
                <div class="row">       
                </div>
                <!-- /. ROW  -->
                <div class="row">
                        <div class="col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title text-center">Nilai Murid</div>
                                    </div>
                                </div>
                                &nbsp; &nbsp; <a target="_blank" href="cetak-raport.php?id_guru=<?php echo $_SESSION['id_murid']; ?>" class="btn btn-primary btn-lg" role="button"> Cetak </a> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                            <?php
                                            $query = "SELECT * FROM murid where id_murid = '$_SESSION[id_murid]'";
                                            $hasil = getData($query);
                                            $bs = "BS";
                                            $b = "B";
                                            $c= "C";
                                            $k= "K";
                                            while($result = mysqli_fetch_assoc($hasil)){

                                            ?>
                                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                        <thead>
                                                            <tr>
                                                            <th rowspan = "3">  No  </th> 
                                                                <th rowspan = "3"> <p style="text-align:center"> Indikator </th>
                                                                <th colspan = "4"> <p style="text-align:center"> Penilaian Perkembangan Anak </p> </th> 
                                                                <th colspan = "4"> <p style="text-align:center"> Penilaian Perkembangan Anak </p> </th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan = "4"> <p style="text-align:center"> Semester I </p> </td>
                                                                <td colspan = "4"> <p style="text-align:center"> Semester II </p> </td>
                                                            </tr>
                                                            <tr>
                                                                <td> BS </td>
                                                                <td> B </td>
                                                                <td> C </td>
                                                                <td> K </td>
                                                                <td> BS </td>
                                                                <td> B </td>
                                                                <td> C </td>
                                                                <td> K </td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                $no=1;
                                                                $query=mysqli_query($conn,"
                                                                select * from nilai
                                                                JOIN indikator ON indikator.kode_indikator = nilai.kode_indikator
                                                                ");
                                                                while($row=mysqli_fetch_array($query)){
                                                            ?>
                                                            <tr class="odd gradeX">
                                                                <td><?php echo $no++ ?></td>
                                                                <td><?php echo $row['nama_indikator']; ?></td>
                                                                <?php if($row['semester']=="I"){?>
                                                                <td><?php if($row['nilai']=="BS"){echo "<p>&#10004</p>";}?></td>
                                                                <td><?php if($row['nilai']=="B"){echo "<p>&#10004</p>";}?></td>
                                                                <td><?php if($row['nilai']=="C"){echo "<p>&#10004</p>";}?></td>
                                                                <td><?php if($row['nilai']=="K"){echo "<p>&#10004</p>";}?></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            <?php } else{?>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><?php if($row['nilai']=="BS"){echo "<p>&#10004</p>";}?></td>
                                                                <td><?php if($row['nilai']=="B"){echo "<p>&#10004</p>";}?></td>
                                                                <td><?php if($row['nilai']=="C"){echo "<p>&#10004</p>";}?></td>
                                                                <td><?php if($row['nilai']=="K"){echo "<p>&#10004</p>";}?></td>
                                                            <?php }?>
                                                        </tbody>
                                                        <?php
                                                        }
                                                        ?>
                                                    </table>
                                                </div>
                                        </div>
                                        <?php
                                        }
                                        ?>   
                                    </div>
                                </div>
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