<div class="form-group">
    <label for="exampleInputAlamat">Perkembangan :</label>
    <select id="perkembangan_select" class="form-control" name="perkembangan">
        <option selected value="">-Pilih-</option>
        <?php 
            include '../admin/controller.php';
            $lingkupId = "";
            if (isset($_POST['lingkup'])) {
                $lingkupId = $_POST['lingkup'];
                $query = "SELECT * FROM sub_lingkup WHERE kode_lingkup=$lingkupId";
                $DataPerkembangan = mysqli_query($conn, $query);
                while ($perkembangan = mysqli_fetch_assoc($DataPerkembangan)) {
                    $id = $perkembangan['kode_sub_lingkup'];
                    $nama = $perkembangan['nama_sub_lingkup'];
                    var_dump($nama);

                    echo "<option value='$id'>$nama</option>";
                }
            }
        ?>
    </select>
</div>
