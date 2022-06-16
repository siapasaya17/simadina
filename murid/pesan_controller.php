<?php
session_start();
include "../admin/controller.php";
include "../dbcon.php";
date_default_timezone_set('Asia/Makassar');

if (isset($_POST['delete-btn'])) {
  $del_id = $_POST['delete-btn'];
  $ref = "pesan/" . $del_id;
  $delete_query = $database->getReference($ref)->remove();
  if ($delete_query) {
    header('location:daftar-pesan-guru.php');
  } else {
    header('location:daftar-pesan-guru.php');
  }
}


if (isset($_POST['save_pesan_murid'])) {
  $query = "SELECT id_guru from guru where nik=" . $_POST['id_guru'] . ";";
  $sql = mysqli_query($conn, $query);
  $row_id_guru = mysqli_fetch_row($sql);
  $id_guru_res = $row_id_guru[0];
  $id_penulis = $_SESSION['id_murid'];
  $id_guru = $id_guru_res;
  $id_murid = $_SESSION['id_murid'];
  $isi_pesan = $_POST['isi_pesan'];
  $waktu = date('d F Y, h:i:s');

  $postData = [
    'id_penulis' => $id_penulis,
    'id_guru' => $id_guru,
    'id_murid' => $id_murid,
    'isi_pesan' => $isi_pesan,
    'waktu' => $waktu
  ];
  $postRef = $database->getReference('pesan')->push($postData);
  if ($postRef) {
    header('location:kirim-pesan-murid.php');
  }
}

if (isset($_POST['save_pesan_guru_lihat'])) {
  $id_penulis = $_SESSION['id_guru'];
  $id_guru = $_SESSION['id_guru'];
  $id_murid = $_POST['id_murid'];
  $isi_pesan = $_POST['isi_pesan'];
  $waktu = date('d F Y, h:i:s');

  $postData = [
    'id_penulis' => $id_penulis,
    'id_guru' => $id_guru,
    'id_murid' => $id_murid,
    'isi_pesan' => $isi_pesan,
    'waktu' => $waktu
  ];
  $postRef = $database->getReference('pesan')->push($postData);
  if ($postRef) {
    header('location:lihat-pesan-guru.php?nisn=' . $id_murid);
  }
}
