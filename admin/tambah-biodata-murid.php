<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Dashboard Murid| SiMadina</title>
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
                <a class="navbar-brand" href="dashboard-murid.php"><strong><i class="icon fa fa-dashboard"></i> Murid| SiMadina</strong></a>	
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
                        <li><a href="../admin/index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
		<div id="page-wrapper">
		    <div class="header"> 
                <h1 class="page-header"> Admin <small>Welcome Admin</small></h1>
					<ol class="breadcrumb">
					    <li><a href="#">Akun</a></li>
					    <li class="active">Biodata Murid</li>
					</ol> 			
		    </div>
                <div id="page-inner">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title text-center">Biodata Murid</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form action="tambah-biodata-murid-aksi.php" method=POST enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputNama">Nama :</label>
                                                    <input type="text" class="form-control" name="nama" id="exampleInputNama" placeholder="Masukkan Nama" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputNIK">NIK :</label>
                                                    <input type="text" class="form-control" name="nik" id="exampleInputNIK" placeholder="Masukkan NIK">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputTanggalLahir">Tanggal Lahir :</label>
                                                    <input type="date" class="form-control" name="ttl" id="exampleInputTanggalLahir" placeholder="Masukkan TTL">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputJenisKelamin">Jenis Kelamin :</label> <br>
                                                     <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label> 
                                                    <label><input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputAlamat">Alamat :</label>
                                                    <input type="text" class="form-control" name="alamat" id="exampleInputAlamat" placeholder="Masukkan Alamat">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputTelepon">Telepon :</label>
                                                    <input type="text" class="form-control" name="telpon" id="exampleInputTelepon" placeholder="Masukkan No Telepon">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputStatusPegawai">NISN :</label>
                                                    <input type="text" class="form-control" name="nisn" id="exampleInputStatusPegawai" placeholder="Masukkan NISN">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPTK">Kelurahan :</label>
                                                    <input type="text" class="form-control" name="kelurahan" id="exampleInputPTK" placeholder="Masukkan Kelurahan">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPTK">Kecamatan :</label>
                                                    <input type="text" class="form-control" name="kecamatan" id="exampleInputPTK" placeholder="Masukkan Kecamatan">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPTK">Jenis Tinggal :</label>
                                                    <input type="text" class="form-control" name="jenis_tinggal" id="exampleInputPTK" placeholder="Masukkan Jenis Tinggal">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail">Email :</label>
                                                    <input type="text" class="form-control" name="email" id="exampleInputEmail" placeholder="Masukkan Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputNIDN">NIDN :</label>
                                                    <input type="text" class="form-control" name="nidn" id="exampleInputNIDN" placeholder="Masukkan NIDN">
                                                </div>
                                                <div class="sub-title">Agama</div>
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
                                                    <label for="exampleInputNamaIbuKandung">Nama Ibu Kandung :</label>
                                                    <input type="text" class="form-control" name="nama_ibu" id="exampleInputNamaIbuKandung" placeholder="Masukan Nama Ibu Kandung">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputNamaIbuKandung">Jenjang Pendidikan Ibu :</label>
                                                    <input type="text" class="form-control" name="pdd_ibu" id="exampleInputNamaIbuKandung" placeholder="Masukan Jenjang Pendidikan Ibu">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputNamaIbuKandung">Pekerjaan Ibu :</label>
                                                    <input type="text" class="form-control" name="pekerjaan_ibu" id="exampleInputNamaIbuKandung" placeholder="Masukkan Pekerjaan Ibu">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputNamaIbuKandung">Penghasilan Ibu :</label>
                                                    <input type="text" class="form-control" name="penghasilan_ibu" id="exampleInputNamaIbuKandung" placeholder="Masukkan Penghasilan bu">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputNamaAyahKandung">Nama Ayah Kandung :</label>
                                                    <input type="text" class="form-control" name="nama_ayah" id="exampleInputNamaAyahKandung" placeholder="Masukkan Nama Ayah Kandung">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputNamaIbuKandung">Jenjang Pendidikan Ayah :</label>
                                                    <input type="text" class="form-control" name="pdd_ayah" id="exampleInputNamaIbuKandung" placeholder="Masukkan Jenjang Pendidikan Ayah">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputNamaIbuKandung">Pekerjaan Ayah :</label>
                                                    <input type="text" class="form-control" name="pekerjaan_ayah" id="exampleInputNamaIbuKandung" placeholder="Masukkan Pekerjaan Ayah">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputNamaIbuKandung">Penghasilan Ayah :</label>
                                                    <input type="text" class="form-control" name="penghasilan_ayah" id="exampleInputNamaIbuKandung" placeholder="Masukkan Penghasilan Ayah">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputNamaIbuKandung">No Kartu Keluarga :</label>
                                                    <input type="text" class="form-control" name="no_kk" id="exampleInputNamaIbuKandung" placeholder="Masukkan No KK">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputJenisKelamin">Kelas :</label> <br>
                                                     <label><input type="radio" name="kelas" value="laki-laki" /> A</label> 
                                                    <label><input type="radio" name="kelas" value="perempuan" /> B</label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputNamaIbuKandung">Kebutuhan Khusus :</label>
                                                    <input type="text" class="form-control" name="kebutuhan_khusus" id="exampleInputNamaIbuKandung" placeholder="Masukkan Kebutuhan Khusus">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputNamaIbuKandung">Jarak Rumah Ke Sekolah (KM) :</label>
                                                    <input type="text" class="form-control" name="jarak_rumah" id="exampleInputNamaIbuKandung" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Masukkan Foto : </label>
                                                    <input type="file" name="pas_foto">
                                                </div>
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