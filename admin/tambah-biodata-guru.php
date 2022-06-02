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
    <title>Daftar Akun | Admin SiMadina</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
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
                        <a href="persetujuan-raport-admin.php"><i class="fa fa-comments"></i> Acara<span class="fa arrow"></span></a>
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
                        Admin <small> Welcome Admin</small>
                    </h1>
                        <ol class="breadcrumb">
                            <li><a href="#">Akun</a></li>
                            <li class="active">Biodata Guru</li>
                        </ol>                 
            </div>
            <div id="page-inner">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="card-title">
                                    <div class="title text-center">Tambah Biodata Guru</div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="tambah-biodata-guru-aksi.php" method=POST enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputNama">Nama :</label>
                                                <input type="text" name="nama" class="form-control" id="exampleInputNama" required="" placeholder="Masukkan Nama">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputNIK">NIK :</label>
                                                <input type="text" name="nik" class="form-control" id="exampleInputNIK" placeholder="Masukkan NIK" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputTanggalLahir">Tanggal Lahir :</label>
                                                <input type="date" name="ttl" class="form-control" id="exampleInputTanggalLahir" placeholder="Masukkan TTL" required="">
                                            </div>
                                            <div class="form-group">
                                                    <label for="exampleInputJenisKelamin">Jenis Kelamin :</label> <br>
                                                     <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label> 
                                                    <label><input type="radio" name="jenis_kelamin" value="perempuan"/> Perempuan</label>
                                                </div>
                                            <div class="form-group">
                                                <label for="exampleInputAlamat">Alamat :</label>
                                                <input type="text" name="alamat" class="form-control" id="exampleInputAlamat" placeholder="Masukkan Alamat" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputTelepon">Telepon :</label>
                                                <input type="text" name="telpon" class="form-control" id="exampleInputTelepon"  placeholder="Masukkan No Telepon" required="">
                                            </div>
                                            <div  name="agama" class="sub-title" > Agama</div> 
                                            <div class="form-group">
                                                <select class="form-control" name="agama" required="">
                                                    <optgroup label="Pilih Agama">
                                                        <option value="Islam"> Islam </option>
                                                        <option value="Protestan"> Protestan</option>
                                                        <option value="Katolik"> Katolik</option>
                                                        <option value="Hindu"> Hindu</option>
                                                        <option value="Budha"> Budha</option>
                                                        <option value="Konghucu"> Konghucu</option>
                                                    </optgroup>   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">  
                                            <div class="form-group">
                                                <label for="exampleInputStatusPegawai">Status Pegawai :</label>
                                                <input type="text" name="status_pegawai" class="form-control" id="exampleInputStatusPegawai" placeholder="Masukkan Status Pegawai" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPTK">PTK :</label>
                                                <input type="text" name="ptk" class="form-control" id="exampleInputPTK" placeholder="Masukan PTK" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail">Email :</label>
                                                <input type="Email" name="email" class="form-control" id="exampleInputEmail" placeholder="Masukan Email" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputNIDN">NIDN :</label>
                                                <input type="text" name="nidn" class="form-control" id="exampleInputNIDN"  placeholder="Masukan NIDN" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputNamaIbuKandung">Nama Ibu Kandung :</label>
                                                <input type="NamaIbuKandung" name="nama_ibu" class="form-control" id="exampleInputNamaIbuKandung" placeholder="Masukan Nama Ibu Kandung" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputNamaAyahKandung">Nama Ayah Kandung :</label>
                                                <input type="NamaAyahKandung" name="nama_ayah" class="form-control" id="exampleInputNamaAyahKandung" value="" placeholder="Masukan Nama Ayah Kandung" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">Masukkan Foto : </label>
                                                <input type="file" id="InputFoto" name="pas_foto" required="">
                                            </div>
                                        </div>
                                    </div>     
                                        <center> <button type="submit" class="btn btn-primary">Submit</button> </center>
                                </form>
                            </div>
                        </div>
                    </div>               
                </div>
                <footer>
                    <p><center> All right reserved | SiMadina 2022</center></p>
                </footer>
            </div>


            <div class="row">
                <div class="col-md-6">
                </div>
            </div>
            </div>
                <footer><p><center> All right reserved | SiMadina 2022</center></p>
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