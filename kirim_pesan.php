<?php
    include 'admin/controller.php';

    $today  = date("YmdHis", time());
    $time = date("h-i-s,d-m-Y", time());
    // $message = $_POST['message'];
    // $idGuru = $_POST['id_guru'];
    // $idMurid = $_POST['id_murid'];
    // $subject = $_POST['subject'];

    //test
    $message = "coba aja dulu";
    $idGuru = 1;
    $idMurid = 1;
    $subject = "coba pesan";
    
    if (!empty($message) && !empty($idGuru) && !empty($idMurid) ** !empty($subject)) {
        $id = (int)$today;
        var_dump($id);
        $query = "INSERT INTO pesan (id_pesan, id_guru, id_murid, isi_pesan, subject_pesan, waktu) 
            VALUES ({$id}, {$idGuru}, {$idMurid}, '{$message}', '{$subject}', '{$time}')";
        $sql = mysqli_query($conn, $query);
        if ($sql) {
            header("location: pesan.php");
        }
    }
?>