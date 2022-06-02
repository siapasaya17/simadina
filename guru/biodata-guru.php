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
    <title>Biodata Guru | SiMadina</title>
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
                        <a href="biodata-guru.php" class="active-menu"><i class="fa fa-user"></i>Biodata<span class="fa "></span></a>
                    </li>   
                    <li>
                        <a href="daftar-pesan-guru.php"><i class="fa fa-user"></i>Pesan<span class="fa arrow"></span></a>
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
                        <a href="input-nilai-guru.php"><i class="fa fa-file"></i>Nilai Murid<span class="fa arrow"></span></a>
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
                        Dashboard <small>Welcome Guru</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Biodata Guru</a></li>
                    </ol>                            
            </div>
            <div id="page-inner">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="card-title">
                                    <div class="title text-center">Biodata Guru</div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form method=POST action="edit-biodata-guru.php" enctype="multipart/form-data">
                                <?php
                                      $query = "SELECT * FROM guru where id_guru = '$_SESSION[id_guru]'";
                                      $hasil = getData($query);
                                      while($result = mysqli_fetch_assoc($hasil)){

                                    ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <td>
                                                <input type="hidden" name="id_guru" value="<?=$result['id_guru']?>">
                                            </td>
                                            <div class="form-group">
                                                <label for="exampleInputNama">Nama :</label>
                                                <input type="text" name="nama" class="form-control" id="exampleInputNama" value="<?=$result['nama']?>"  placeholder="Masukkan Nama">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputNIK">NIK :</label>
                                                <input type="text" name="nik" class="form-control" id="exampleInputNIK" value="<?=$result['nik']?>" placeholder="Masukkan NIK">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputTanggalLahir">Tanggal Lahir :</label>
                                                <input type="date" name="ttl" class="form-control" id="exampleInputTanggalLahir" value="<?=$result['ttl']?>" placeholder="Masukkan TTL">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputJenisKelamin">Jenis Kelamin :</label> <br>
                                                 <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php if($result['jenis_kelamin']=='laki-laki') echo 'checked'?>/> Laki-laki</label> 
                                                <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php if($result['jenis_kelamin']=='perempuan') echo 'checked'?>/> Perempuan</label> 
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputAlamat">Alamat :</label>
                                                <input type="text" name="alamat" class="form-control" id="exampleInputAlamat" value="<?=$result['alamat']?>" placeholder="Masukkan Alamat">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputTelepon">Telepon :</label>
                                                <input type="text" name="telpon" class="form-control" id="exampleInputTelepon" value="<?=$result['telpon']?>" placeholder="Masukkan No Telepon">
                                            </div>
                                            <!-- <div  name="agama" class="sub-title"> Agama</div>  -->
                                            <div class="form-group">
                                            <label for="exampleInputLevel">Agama</label>
                                                <select class="form-control" name="agama">
                                                    <optgroup label="Pilih Agama">
                                                        <option value="Islam" <?php if($result['agama']=='Islam'){echo 'selected';}?>> Islam </option>
                                                        <option value="Protestan"<?php if($result['agama']=='Protestan') {echo 'selected';}?>>Protestan</option>
                                                        <option value="Katolik"<?php if($result['agama']=='Katolik') {echo 'selected';}?>>Katolik</option>
                                                        <option value="Hindu"<?php if($result['agama']=='Hindu') {echo 'selected';}?>>Hindu</option>
                                                        <option value="Budha"<?php if($result['agama']=='Budha') {echo 'selected';}?>>Budha</option>
                                                        <option value="Konghucu"<?php if($result['agama']=='Konghucu') {echo 'selected';}?>>Konghucu</option>
                                                    </optgroup>   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">  
                                            
                                            <div class="form-group">
                                                <label for="exampleInputStatusPegawai">Status Pegawai :</label>
                                                <input type="text" name="status_pegawai" class="form-control" id="exampleInputStatusPegawai" value="<?=$result['status_pegawai']?>" placeholder="Masukkan StatusPegawai">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPTK">PTK :</label>
                                                <input type="text" name="ptk" class="form-control" id="exampleInputPTK" value="<?=$result['ptk']?>" placeholder="Masukan PTK">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail">Email :</label>
                                                <input type="Email" name="email" class="form-control" id="exampleInputEmail" value="<?=$result['email']?>" placeholder="Masukan Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputNIDN">NIDN :</label>
                                                <input type="text" name="nidn" class="form-control" id="exampleInputNIDN" value="<?=$result['nidn']?>" placeholder="Masukan NIDN">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputNamaIbuKandung">Nama Ibu Kandung :</label>
                                                <input type="NamaIbuKandung" name="nama_ibu" class="form-control" id="exampleInputNamaIbuKandung" value="<?=$result['nama_ibu']?>" placeholder="Masukan Nama Ibu Kandung">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputNamaAyahKandung">Nama Ayah Kandung :</label>
                                                <input type="NamaAyahKandung" name="nama_ayah" class="form-control" id="exampleInputNamaAyahKandung" value="<?=$result['nama_ayah']?>" placeholder="Masukan Nama Ayah Kandung">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">Masukkan Foto : </label>
                                                <input type="file" name="pas_foto" width='70' height='90' />
                                                <?php echo "<img src='foto-guru/$result[foto]' width='70' height='90' />";?>
                                            </div>
                                        </div>
                                    </div>     
                                        <center> <button type="submit" class="btn btn-primary">Submit</button> </center>
                                    <?php
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>               
                </div>
                <footer>
                    <p><center> All right reserved | SiMadina 2022</center></p>
                </footer>
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