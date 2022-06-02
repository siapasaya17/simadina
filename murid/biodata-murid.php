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
    <title>Biodata Murid| SiMadina</title>
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
                        <a class="#" href="dashboard-murid.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="biodata-murid.php" class="active-menu"><i class="fa fa-user"></i>Biodata<span class="fa"></span></a>
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
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
		<div id="page-wrapper">
		    <div class="header"> 
                <h1 class="page-header"> Biodata <small>Welcome Murid</small></h1>
					<ol class="breadcrumb">
					    <li><a href="#">Biodata</a></li>
					    <!-- <li class="active">Dashboard</li> -->
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
                                <form method=POST action="edit-biodata-murid.php" enctype="multipart/form-data">
                                <?php
                                      $query = "SELECT * FROM murid where id_murid = '$_SESSION[id_murid]'";
                                      $hasil = getData($query);
                                      while($result = mysqli_fetch_assoc($hasil)){

                                    ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <td>
                                                <input type="hidden" name="id_murid" value="<?=$result['id_murid']?>">
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
                                            <div class="form-group">
                                                    <label for="exampleInputnisn">NISN :</label>
                                                    <input type="text" name="nisn" class="form-control" id="exampleInputnisn" value="<?=$result['nisn']?>" placeholder="Masukkan NISN">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputkelurahan">Kelurahan :</label>
                                                    <input type="text" class="form-control" name="kelurahan" id="exampleInputkelurahan" value="<?=$result['kelurahan']?>" placeholder="Masukan Kelurahan">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputkecamatan">Kecamatan :</label>
                                                    <input type="text" class="form-control" name="kecamatan" id="exampleInputkecamatan" value="<?=$result['kecamatan']?>"placeholder="Masukan Kecamatan">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputjenistinggal">Jenis Tinggal :</label>
                                                    <input type="text" class="form-control" name="jenis_tinggal" id="exampleInputjenistinggal" value="<?=$result['jenis_tinggal']?>" placeholder="Masukan Jenis Tinggal">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail">Email :</label>
                                                    <input type="text" class="form-control" name="email" value="<?=$result['email']?>" id="exampleInputEmail" placeholder="Masukan Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputNIDN">NIDN :</label>
                                                    <input type="text" class="form-control" name="nidn" id="exampleInputNIDN" value="<?=$result['nidn']?>" placeholder="Masukan NIDN">
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
                                                    <label for="exampleInputNamaIbuKandung">Nama Ibu Kandung :</label>
                                                    <input type="text" class="form-control" name="nama_ibu" id="exampleInputNamaIbuKandung" value="<?=$result['nama_ibu']?>" placeholder="Masukan Nama Ibu Kandung">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputjenjangpendidikanibu">Jenjang Pendidikan Ibu :</label>
                                                    <input type="text" class="form-control" name="pdd_ibu" id="exampleInputjenjangpendidikanibu" value="<?=$result['pdd_ibu']?>" placeholder="Masukkan Jenjang Pendidikan Ibu">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputpekerjaanibu">Pekerjaan Ibu :</label>
                                                    <input type="text" class="form-control" name="pekerjaan_ibu" id="exampleInputpekerjaanibu" value="<?=$result['pekerjaan_ibu']?>" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPenghasilanIbu">Penghasilan Ibu :</label>
                                                    <input type="text" class="form-control" name="penghasilan_ibu" value="<?=$result['penghasilan_ibu']?>" id="exampleInputNamaIbuKandung" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputNamaAyahKandung">Nama Ayah Kandung :</label>
                                                    <input type="text" class="form-control" name="nama_ayah" value="<?=$result['nama_ayah']?>" id="exampleInputNamaAyahKandung" placeholder="Masukan Nama Ayah Kandung">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputpendidikanayah">Jenjang Pendidikan Ayah :</label>
                                                    <input type="text" class="form-control" name="pdd_ayah" value="<?=$result['pdd_ayah']?>" id="exampleInputjenjangpendidikanayah" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputNamaPekerjaanAyah">Pekerjaan Ayah :</label>
                                                    <input type="text" class="form-control" name="pekerjaan_ayah" value="<?=$result['pekerjaan_ayah']?>" id="exampleInputNamaIbuKandung" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPenghasilanAyah">Penghasilan Ayah :</label>
                                                    <input type="text" class="form-control" name="penghasilan_ayah" id="exampleInputpenghasilanayah" value="<?=$result['penghasilan_ayah']?>" placeholder=" ">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputnokk">No Kartu Keluarga :</label>
                                                    <input type="text" class="form-control" name="no_kk" id="exampleInputNamaIbuKandung" value="<?=$result['no_kk']?>" placeholder="Masukan No KK">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputKelas">Kelas :</label> <br>
                                                     <label><input type="radio" name="kelas" value="A" <?php if($result['kelas']=='A') echo 'checked'?>/> A </label> 
                                                     <label><input type="radio" name="kelas" value="B" <?php if($result['kelas']=='B') echo 'checked'?>/> B </label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputkebutuhankhusus">Kebutuhan Khusus :</label>
                                                    <input type="text" class="form-control" name="kebutuhan_khusus" id="exampleInputkebutuhankhusus" value="<?=$result['kebutuhan_khusus']?>" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputNamajarakrumah">Jarak Rumah Ke Sekolah (KM) :</label>
                                                    <input type="text" class="form-control" name="jarak_rumah" id="exampleInputjarakrumah" value="<?=$result['jarak_rumah']?>" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Masukkan Foto : </label>
                                                    <input type="file" name="foto" width='70' height='90' />
                                                    <?php echo "<img src='foto-murid/$result[foto]' width='70' height='90' />";?>
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