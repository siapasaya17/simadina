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
    <title>Daftar Pesan | SiMadina</title>
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
                <a class="navbar-brand" href="dashboard-guru.php"><strong>
                        <h3> <img style="margin-right: 0px;" width=25 height=35 src="assets/logo/logo-tk.png" /> Guru| SiMadina </h3> <strong></a>
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
                        <a href="#" class="active-menu"><i class="fa fa-user"></i>Pesan<span class="fa arrow"></span></a>
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
                        <a href="#"><i class="fa fa-file"></i>Nilai Murid<span class="fa arrow"></span></a>
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
                    Daftar Pesan <small>Welcome Guru</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#">Daftar Pesan</a></li>
                </ol>
            </div>
            <div id="page-inner">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="card-title">
                                    <div class="title text-center">KB IT AL-MADINA ACADEMY</div>
                                </div>
                            </div>
                            <div class="mailbox-area mg-b-15">
                                <div class="container-fluid">
                                    <div class="row">
                                    </div>
                                    <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="hpanel">
                                            <div class="panel-heading hbuilt mailbox-hd">
                                                <h4>Daftar Pesan</h4>
                                                <!-- <div class="text-center p-xs font-normal">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control input-sm" placeholder="Search email in your inbox..."> <span class="input-group-btn active-hook">
                                                            <button type="button" class="btn btn-sm btn-default">Search</button> </span>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive ib-tb">
                                                    <table class="table table-hover table-mailbox" id="dataTables-pesan-guru">
                                                        <thead>
                                                            <tr>
                                                                <!-- <th>No</th> -->
                                                                <th>Nama Guru</th>
                                                                <th>Nama Murid</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            include("../dbcon.php");

                                                            if ($value) {
                                                                // var_dump($value,"sadasdasdasd");
                                                                // $i = 1;
                                                                foreach ($value as $key => $row) {
                                                                    if (strval($row['id_guru']) === $_SESSION['id_guru']) {
                                                                        $guru = $row['id_guru'];
                                                                        $query_nama_guru    = "SELECT nama FROM guru WHERE id_guru='$guru';";
                                                                        $sql = mysqli_query($conn, $query_nama_guru);
                                                                        $r_guru    = mysqli_fetch_row($sql);
                                                                        $nama_guru = $r_guru[0];

                                                                        $murid = $row['id_murid'];
                                                                        $query_nama_murid    = "SELECT nama FROM murid WHERE nisn='$murid';";
                                                                        $sql = mysqli_query($conn, $query_nama_murid);
                                                                        $r_murid    = mysqli_fetch_row($sql);
                                                                        $nama_murid = $r_murid[0];

                                                            ?>
                                                                        <tr>
                                                                            <!-- <td><?= $i++ ?></td> -->
                                                                            <td><?= $nama_guru ?></td>
                                                                            <td><?= $nama_murid ?></td>
                                                                            <td style="display:flex">
                                                                                <a href="lihat-pesan-guru.php?nisn=<?=$row['id_murid']; ?>" data-toggle="modal" class="btn btn-primary" style="margin-right:10px"><span class="glyphicon glyphicon-edit"></span> Lihat </a>
                                                                                <form action="pesan_controller.php" method="POST">

                                                                                    <button type="submit" name="delete-btn" value="<?=$key ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                                                                                </form>
                                                                            </td>
                                                                        </tr>
                                                                <?php

                                                                    }
                                                                }
                                                            } else {
                                                                ?>
                                                                <tr>
                                                                    <td colspan="4">Tidak Ada Data</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <footer>
                            <p>
                                <center> All right reserved | SiMadina 2022</center>
                            </p>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>


    <script src="assets/js/easypiechart.js"></script>
    <script src="assets/js/easypiechart-data.js"></script>

    <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

    <!-- <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-pesan-guru').dataTable();
            });
    </script> -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-pesan-guru').dataTable();
        });
    </script>

    <!-- Chart Js -->
    <script type="text/javascript" src="assets/js/Chart.min.js"></script>
    <script type="text/javascript" src="assets/js/chartjs.js"></script>
    <!-- <script type="module">
        // Import the functions you need from the SDKs you need
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/9.8.2/firebase-app.js";
        import {
            getAnalytics
        } from "https://www.gstatic.com/firebasejs/9.8.2/firebase-analytics.js";
        import {
            getDatabase,
            ref,
            set,
            get,
            child,
            update,
            remove
        } from "https://www.gstatic.com/firebasejs/9.8.2/firebase-database.js"
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyDVvjL7jTic3Fnjx2JKwbh2DBLijJKDkzo",
            authDomain: "simadina-613ff.firebaseapp.com",
            projectId: "simadina-613ff",
            storageBucket: "simadina-613ff.appspot.com",
            messagingSenderId: "718757056068",
            appId: "1:718757056068:web:fca7fd86d3630e821ff611",
            measurementId: "G-36RE37SK6B"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
        const db = getDatabase();
        // const refPesan = db.ref('pesan')

        const dbRef = ref(db);
        console.log(app,analytics,db,dbRef)
        //get data chat
        function getData() {
            // const cek = db.ref('pesan')

            const cek = get(child(dbRef, "pesan/")).then((snapshot) => {
                const data = snapshot.val()
                data.forEach(myFunc)
                console.log(data, "snap")
            });

            console.log(cek, "data")
        }

        let text = ''

        function myFunc(item) {
            const datacek = document.getElementById('demo');
            document.getElementById("demo").innerHTML = text;
            text += item.isi_pesan + "<br>";
            console.log(text)
        }

        console.log(db, "db")

        getData();
    </script> -->

</body>

</html>
<!-- <div id="page-inner">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="card-title">
                                    <div class="title">Pesan Konsultasi Perkembangan Murid</div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example" table cellspacing="0" cellpadding="0">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example" table cellspacing="0" cellpadding="0" > 
                                                <tbody>
                                                    <tr class="odd gradeX">
                                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>", method="GET">
                                                            <td width="90%" bgcolor="#ffffff">
                                                                <div class="form-group">
                                                                    <input type="name" name="name-student" class="form-control" id="exampleInputFile" placeholder="Masukan Nama Penuju">
                                                                </div>
                                                            </td>
                                                            <td width = "10%" bgcolor="#ffffff">
                                                                <button class="btn btn-primary btn-lg" role="button" name="search-student">Cari</button>
                                                            </td>
                                                        </form>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                            </div>
                            <?php
                            if (isset($_GET['search-student'])) {
                                $nama = $_GET['name-student'];
                                $query = "SELECT * FROM murid WHERE nama LIKE '%$nama%'";
                                $hasil = getData($query);
                            ?>
                            <div class="panel-body">
                                <div class="table-responsive ib-tb">
                                    <table class="table table-hover table-mailbox">
                                        <tbody>
                                            <?php while ($student = mysqli_fetch_assoc($hasil)) { ?>
                                            <tr class="unread">
                                                <td><a href="#"><?= $student['nama'] ?></a></td>
                                                <td>
                                                    <form action="create-messaga.php" method="POST">
                                                        <button class="btn btn-primary" name="send-messagez">Kirim Pesan</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <?php } ?> 
                        </div>
                    </div>
                </div>  
                        <footer><p><center> All right reserved | SiMadina 2022</center></p></footer>
            </div> -->