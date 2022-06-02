<?php 
    include 'admin/controller.php';

    $idGuru = $_POST["id_guru"];
    $idMurid = $_POST["id_murid"];
    
    if (!empty($idGuru) && !empty($idMurid)) {
        $query = "SELECT * FROM pesan WHERE id_guru={$idGuru} AND id_murid={$idMurid}";
        $sql = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            var_dump($row);
        }
    } 
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <body>
        <form action="kirim_pesan.php" method="POST">
            <input name="message" type="text" placeholder="masukkan pesan" value="">
            <button type="submit">Kirim</button>
        </form>
    </body>
</html>