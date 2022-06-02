<?php 
include 'config.php';
if (isset($_GET['id_murid'])) {
	if ($_GET['id_murid'] != "") {
		
		$id_murid = $_GET['id_murid'];

		$query = mysqli_query($conn,"SELECT * FROM murid WHERE id_murid='$id_murid'");
		$d = mysqli_fetch_array($query);

	}else{
		header("location:akun-murid.php");
	}
}else{
	header("location:akun-murid.php");
}
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Membuat Akun | Admin SiMadina</title>
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
               <!-- DROPDOWN USER -->
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
        <div id="page-wrapper">
            <div class="header"> 
                    <h1 class="page-header">
                            Admin <small>Welcome Admin</small>
                    </h1>
                    <ol class="breadcrumb">
                      <li><a href="#">Akun</a></li>
                      <li class="active">Buat Akun</li>
                    </ol>                 
            </div>
            <div id="page-inner">
            <div class="row">
            </div>
            <div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="card-title">
                    <div class="title text-center">BUAT AKUN BIODATA MURID</div>
                </div>
            </div>
            <div class="row">
                        <div class="col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form method="POST" action="edit-akun-murid-aksi.php?id=<?php echo $id_murid; ?>" enctype="multipart/form-data">
                                        <td>
                                            <input type="hidden" name="id_murid" value="<?php echo $d['id_murid']; ?>">
                                        </td>
                                        <div class="form-group">
                                            <label for="exampleInputnama">Nama :</label>
                                            <input type="text" class="form-control" name="nama" value="<?php echo $d['nama']; ?>" placeholder="Masukkan Nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputnik">NIK:</label>
                                            <input type="text" class="form-control" name="nik" value="<?php echo $d['nik']; ?>" placeholder="Masukkan Username">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputttl">Tanggal Lahir :</label>
                                            <input type="date" name="ttl" class="form-control" value="<?php echo $d['ttl']; ?>" placeholder="Masukkan TTL">
                                            </div>
                                        <div class="form-group">
                                                <select class="form-control" name="jenis_kelamin">
                                                    <optgroup label="Jenis Kelamin">
                                                        <option value="Laki-Laki"> Laki-Laki </option>
                                                        <option value="Perempuan"> Perempuan</option>
                                                    </optgroup>   
                                                </select>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label for="exampleInputjenis_kelamin">Jenis Kelamin :</label> <br>
                                            <label><input type="radio" name="jenis_kelamin" value="laki-laki" > Laki-laki</label> 
                                            <label><input type="radio" name="jenis_kelamin" value="perempuan" > Perempuan</label>
                                        </div> -->
                                        <div class="form-group">
                                            <label for="exampleInputalamat"> Alamat :</label>
                                            <input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat']; ?>" placeholder="Masukkan Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputtelpon"> Telepon :</label>
                                            <input type="text" class="form-control" name="telpon" value="<?php echo $d['telpon']; ?>" placeholder="Masukkan Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputnisn">NISN :</label>
                                            <input type="text" class="form-control" name="nisn" value="<?php echo $d['nisn']; ?>" placeholder="Masukkan Status Pegawai">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputkelurahan">Kelurahan :</label>
                                            <input type="text" class="form-control" name="kelurahan" value="<?php echo $d['kelurahan']; ?>" placeholder="Masukan PTK">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputkecamatan">Kecamatan :</label>
                                            <input type="text" class="form-control" name="kecamatan" value="<?php echo $d['kecamatan']; ?>" placeholder="Masukan PTK">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputjenis_tinggal">Jenis Tinggal :</label>
                                            <input type="text" class="form-control" name="jenis_tinggal" value="<?php echo $d['jenis_tinggal']; ?>" placeholder="Masukan PTK">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputemail">Email :</label>
                                            <input type="text" class="form-control" name="email" value="<?php echo $d['email']; ?>" placeholder="Masukan Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputnidn">NIDN :</label>
                                            <input type="text" class="form-control" name="nidn" value="<?php echo $d['nidn']; ?>" placeholder="Masukan NIDN">
                                        </div>
                                        <div  name="agama" class="sub-title"> Agama</div> 
                                        <div class="form-group">
                                                <select class="form-control" name="agama">
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
                                        <div class="form-group">
                                                    <label for="exampleInputnama_ibu">Nama Ibu Kandung :</label>
                                                    <input type="text" class="form-control" name="nama_ibu" value="<?php echo $d['nama_ibu']; ?>" placeholder="Masukan Nama Ibu Kandung">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputpdd_ibu">Jenjang Pendidikan Ibu :</label>
                                                    <input type="text" class="form-control" name="pdd_ibu"  value="<?php echo $d['pdd_ibu']; ?>" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputpekerjaan_ibu">Pekerjaan Ibu :</label>
                                                    <input type="text" class="form-control" name="pekerjaan_ibu" value="<?php echo $d['pekerjaan_ibu']; ?>"placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputpenghasilan_ibu">Penghasilan Ibu :</label>
                                                    <input type="text" class="form-control" name="penghasilan_ibu" value="<?php echo $d['penghasilan_ibu']; ?>" placeholder="">
                                                <div class="form-group">
                                                    <label for="exampleInputnama_ayah">Nama Ayah Kandung :</label>
                                                    <input type="text" class="form-control"  name="nama_ayah" value="<?php echo $d['nama_ayah']; ?>" placeholder="Masukan Nama Ayah Kandung">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputpendidikan_ayah">Jenjang Pendidikan Ayah :</label>
                                                    <input type="text" class="form-control" name="pdd_ayah" value="<?php echo $d['pdd_ayah']; ?>" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputpekerjaan_ayah">Pekerjaan Ayah :</label>
                                                    <input type="text" class="form-control" name="pekerjaan_ayah" value="<?php echo $d['pekerjaan_ayah']; ?>" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputpenghasilan_ayah">Penghasilan Ayah :</label>
                                                    <input type="text" class="form-control" name="penghasilan_ayah" value="<?php echo $d['penghasilan_ayah']; ?>" placeholder=" ">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputno_kk">No Kartu Keluarga :</label>
                                                    <input type="text" class="form-control" name="no_kk" value="<?php echo $d['no_kk']; ?>" placeholder="Masukan No KK">
                                                </div>
                                                <!-- <div class="form-group">
                                                    <label for="exampleInputkelas">Kelas :</label> <br>
                                                     <label><input type="radio" name="kelas" value="A" /> A</label> 
                                                    <label><input type="radio" name="kelas" value="B" /> B</label>
                                                </div> -->
                                                <div class="form-group">
                                                <select class="form-control" name="kelas">
                                                    <optgroup label="Pilih Kelas">
                                                        <option value="A"> A </option>
                                                        <option value="B"> B </option>
                                                    </optgroup>   
                                                </select>
                                        </div>
                                                <div class="form-group">
                                                    <label for="exampleInputkebutuhan_khusus">Kebutuhan Khusus :</label>
                                                    <input type="text" class="form-control" name="kebutuhan_khusus" value="<?php echo $d['kebutuhan_khusus']; ?>" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputjarak_rumah">Jarak Rumah Ke Sekolah (KM) :</label>
                                                    <input type="text" class="form-control" name="jarak_rumah" value="<?php echo $d['jarak_rumah']; ?>" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Masukkan Foto : </label>
                                                    <input type="file" id="InputFoto" name="foto">
                                                <br>
                                                <?php 
                                                        if ($d['foto'] == "") { ?>
                                                            <img src="https://via.placeholder.com/500x500.png?text=PAS+FOTO+SISWA" style="width:100px;height:100px;">
                                                        <?php }else{ ?>
                                                            <img src="foto-murid/<?php echo $d['foto']; ?>" style="width:100px;height:100px;">
                                                <?php 
                                            }  
                                            ?>
                                            </div>
                                        </div>
                                        <center><button type="submit" class="btn btn-default">Submit</button> </center>
                                    </form>
                                </div>
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