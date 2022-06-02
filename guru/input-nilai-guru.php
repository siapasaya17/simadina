<?php
include '../admin/controller.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Input nilai | SiMadina</title>
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
    <script src="../js/jquery.min.js"></script>
  	<script src="../js/bootstrap.min.js"></script>
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
                        <a href="dashboard-guru.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="biodata-guru.php"><i class="fa fa-user"></i>Biodata<span class="fa "></span></a>
                    </li>   
                    <li>
                        <a href="#" ><i class="fa fa-user"></i>Pesan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
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
        <div id="page-wrapper">
            <div class="header"> 
                    <h1 class="page-header">
                        Guru <small>Welcome Guru</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Nilai Murid</a></li>
                        <li class="active">Input Nilai</li>
                    </ol>                        
            </div>
                <div id="page-inner">
                    <div class="row">
                    </div>
                    <div class="row">    
                    </div>  
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title text-center"> INPUT NILAI MURID</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <form>
                                                    <div>
                                                        <div class="form-group">
                                                            <label for="exampleInputNik">Kelas :</label> 
                                                                <select name="" id="" class="form-control">
                                                                    <option value="">-----Pilih Kelas-----</option>
                                                                    <option value="a"> Kelas A</option>
                                                                    <option value="b"> Kelas B</option>
                                                                </select>
                                                        </div>
                                                        <div class="form-group">
                                                        <label for="exampleInputNama">Nama :</label>
                                                        <input type="text" name="nama" class="form-control" id="exampleInputNama" value=""  placeholder="Masukkan Nama">
                                                        </div>
                                                        <div class="form-group">
                                                        <label for="exampleInputnoinduk">No Induk :</label>
                                                        <input type="text" name="" class="form-control" id="exampleInputNama" value=""  placeholder="Masukkan Nama">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputAlamat">Semester :</label>
                                                                <select id="semester" class="form-control" name="semester"  required="">
                                                                    <option selected>-Pilih-</option>
                                                                    <option>Semester I </option>
                                                                    <option>Semester II </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputAlamat">Lingkup :</label>
                                                            <?php
                                                                $queryLingkup = "SELECT * FROM lingkup";
                                                                $DataLingkup = mysqli_query($conn, $queryLingkup);
                                                            ?>
                                                            <select id="lingkup" class="form-control" name="lingkup" >
                                                                    <option selected value="0">-Pilih-</option>
                                                                    <?php
                                                                        while ($lingkup = mysqli_fetch_assoc($DataLingkup)) {
                                                                    ?>
                                                                    <option value="<?=$lingkup['kode_lingkup']?>"><?=$lingkup['nama_lingkup']?></option>
                                                                    <?php
                                                                        }
                                                                    ?>
                                                            </select>
                                                        </div>
                                                        <div class="perkembangan"></div>
                                                        <script>
                                                            $(document).ready(function(){
                                                                load_perkembangan();
                                                                function load_perkembangan(lingkup)
                                                                {
                                                                    console.log(lingkup);
                                                                    $.ajax({
                                                                        method:"POST",
                                                                        url:"perkembangan.php",
                                                                        data: {lingkup:lingkup},
                                                                        success:function(hasil)
                                                                        {
                                                                            $('.perkembangan').html(hasil);
                                                                        }
                                                                    });
                                                                }
                                                                $('#lingkup').change(function(){
                                                                    var lingkup = $("#lingkup").val();
                                                                    console.log("change lingkup");
                                                                    load_perkembangan(lingkup);
                                                                });
                                                            });
                                                        </script>     
                                                        <!-- <div class="form-group">
                                                            <label for="exampleInputAlamat">Indikator :</label>
                                                                <select id="jurusan" class="form-control" name="jurusan"  required="">
                                                                    <option selected>-Pilih-</option>
                                                                    <option>1. Berdiri Dengan Tumit Diatas Satu Kaki Dengan Seimbang </option>
                                                                    <option>2. Naik Ayun-ayunan Dan Merayap di Terowongan tanpa jatuh </option>
                                                                    <option>3. Mengeskpresikan Berbagai Kepala, Tangan, dan Kaki Sesuai Dengan Irama/Musik dengan Lentur </option>
                                                                    <option>4. Mengurus Diri Sendiri Tanpa Bantuan Seperti : Makan, Mandi, Menyisir Rambut, Mengancing Baju, Memakai Sepatu dan Mengikat Tali Sepatu </option>
                                                                </select>
                                                        </div>   -->
                                                        <div class="form-group">
                                                            <label for="exampleInputAlamat">Nilai :</label>
                                                            <select id="keterangan" class="form-control" name="keterangan"  required="">
                                                                <option selected>-Pilih-</option>
                                                                <option>BS</option>
                                                                <option>B</option>
                                                                <option>C</option>
                                                                <option>K</option>
                                                        </select>
                                                        </div>
                                                    <center><button type="submit" class="btn btn-default">Kirim</button> </center>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        <!-- FOOOTER -->
                                    <footer><p><center> All right reserved | SiMadina 2022</center></p></footer>
                                </div>
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