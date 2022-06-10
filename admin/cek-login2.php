<?php
	//mengaktifkan session php
	session_start();
	include 'config.php';

	function antiInjection($str) {
    $r = stripslashes(strip_tags(htmlspecialchars($str, ENT_QUOTES)));
    return $r;
  	}
		
		session_start();
		$username = antiInjection($_POST['username']);
		$password = ($_POST['password']);
		
		
		
		$query    = "SELECT * FROM user WHERE username='$username' and password='$password'";
		$sql = mysqli_query($conn, $query);
		$row    = mysqli_fetch_array($sql);
		
		if(mysqli_num_rows($sql) >0)
		{
			$_SESSION['id']    =$row['id'];
			$_SESSION['level'] 		= $row['level'];
			$_SESSION['nama'] 		= $row['nama'];
			$_SESSION['username'] 	= $row['username'];
			$_SESSION['password'] 	= $row['password'];
			$_SESSION['id_guru']    =$row['id_guru'];
			$_SESSION['id_murid']    =$row['id_murid'];
			
			if($row['level']=="Admin"){
				$id = $_GET['id'];// dak ini valuenya ?
				header('location:dashboard-admin.php');
			}else if($row['level']=="Guru"){
				$id = $_GET['id'];// dak ini valuenya ?
				header('location:../guru/dashboard-guru.php');
			}else if($row['level']=="Murid"){
				$id = $_GET['id'];// dak ini valuenya ?
				header('location:../murid/dashboard-murid.php');
			}else{
				header("location:index.php?pesan1=gagal1");
			}
			
			//header('location:index.php');
			
	
			}else {
				header('location:index.php?error='.base64_encode('username dan password Invalid!!!'));
				exit();
			}
		
?>
