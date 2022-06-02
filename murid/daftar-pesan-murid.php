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
                        <a href="nilai-murid.php" class=""><i class="fa fa-user"></i>Nilai<span class="fa "></span></a>
                    </li>
                    <li>
                        <a href="" class="active-menu"><i class="fa fa-file"></i>Pesan<span class="fa arrow"></span></a>
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
                <h1 class="page-header">
                     Daftar Pesan <small>Welcome Murid</small>
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
                                            <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
                                                <div class="hpanel">
                                                    <div class="panel-heading hbuilt mailbox-hd">
                                                        <div class="text-center p-xs font-normal">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control input-sm" placeholder="Search email in your inbox..."> <span class="input-group-btn active-hook"> 
                                                                    <button type="button" class="btn btn-sm btn-default">Search</button> </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="table-responsive ib-tb">
                                                            <table class="table table-hover table-mailbox">
                                                                <tbody>
                                                                    <tr class="unread">
                                                                        <td class="">
                                                                            <div class="checkbox checkbox-single checkbox-success">
                                                                                <input type="checkbox" checked>
                                                                                <label></label>
                                                                            </div>
                                                                        </td>
                                                                        <td><a href="#">Jeremy Massey</a></td>
                                                                        <td><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></td>
                                                                        <td><i class="fa fa-paperclip"></i></td>
                                                                        <td class="text-right mail-date">Tue, Nov 25</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="">
                                                                            <div class="checkbox">
                                                                                <input type="checkbox">
                                                                                <label></label>
                                                                            </div>
                                                                        </td>
                                                                        <td><a href="#">Alan Matthews</a></td>
                                                                        <td><a href="#">Quisque quis turpis ac quam sagittis scelerisque vel uturna.</a></td>
                                                                        <td></td>
                                                                        <td class="text-right mail-date">Sun, Mar 27</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <footer><p><center> All right reserved | SiMadina 2022</center></p></footer>
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