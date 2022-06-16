<?php
session_start();
include "../dbcon.php";
date_default_timezone_set('Asia/Makassar');
if(isset($_POST['save_pesan'])){
  $id_guru = $_SESSION['id'];
  $id_murid = $_POST['id_murid'];
  $isi_pesan = $_POST['isi_pesan'];
  $waktu = date('d F Y, h:i:s');

  $postData = [
    'id_guru' => $id_guru,
    'id_murid' => $id_murid,
    'isi_pesan' => $isi_pesan,
    'waktu' => $waktu
  ];
  $postRef = $database->getReference('pesan')->push($postData);
  if($postRef){
    header('location:tulis-pesan-guru.php');
  }
}
