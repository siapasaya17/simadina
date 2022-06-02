<?php  
	include 'config.php';
	function addData($query){
		global $conn;
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo mysqli_error($conn);
		}
	}
	function updateData($query){ 
		global $conn;
		$result = mysqli_query($conn, $query);
	}
	function getData($query){
		global $conn;
		$result = mysqli_query($conn, $query);
		// $data = mysqli_fetch_assoc($result);
		return $result;
	}
	function deleteData($query){
		global $conn;
		$result = mysqli_query($conn, $query);
	}	
?>