<div class="form-group">
    <label for="exampleInputAlamat">Indikator :</label>
    <select id="jurusan_form" class="form-control" name="jurusan_form">
        <option selected value="">-Pilih-</option>
        <option>-</option>
        <?php 
            include '../admin/controller.php';
            $perkembanganId = "";
            if (isset($_POST['perkembangan'])) {
                $perkembanganId = $_POST['perkembangan'];
                $query = "SELECT * FROM indikator WHERE kode_sub_lingkup=$perkembanganId";
                $DataIndikator = mysqli_query($conn, $query);
                var_dump($DataIndikator);
                while ($indikator = mysqli_fetch_assoc($DataIndikator)) {
                    $id = $indikator['kode_indikator'];
                    $nama = $indikator['nama_indikator'];
                    var_dump($nama);

                    // echo "<option value='$id'>$nama</option>";
                }
            }
        ?>
    </select>
</div>