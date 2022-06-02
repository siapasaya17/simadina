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
<div class="indikator"></div>
<script>
    $(document).ready(function(){
        load_indikator();
        function load_indikator(perkembangan)
        {
            console.log("loading perkembangan");
            $.ajax({
                method:"POST",
                url:"indikator.php",
                data: {perkembangan:perkembangan},
                success:function(hasil)
                {
                    $('.indikator').html(hasil);
                }
            });
        }
        $('#perkembangan_select').change(function(){
            console.log("change perkembangan");
            // var perkembangan = $("#perkembangan").val();
            // load_indikator(perkembangan);
        });
    });
</script>