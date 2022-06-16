<?php 
session_start();
include '../admin/controller.php';
?>

<!-- <!DOCTYPE html> -->
<html>
<head>
 <title>Cetak Raport Siswa</title>
</head>
<body>
 <style type="text/css">
 body{
 font-family: sans-serif;
 }
 .table-nonborder{
     border-collapse: collapse;
 }
 .table-nonborder th,.table-nonborder td{
     border: 0px;
 }
 table{
 margin: 20px auto;
 border-collapse: collapse;
 }
 table th,
 table td{
 border: 1px solid #3c3c3c;
 padding: 3px 8px;
 }
 a{
 background: blue;
 color: #fff;
 padding: 8px 10px;
 text-decoration: none;
 border-radius: 2px;
 }
    .tengah{
        text-align: center;
    }

    .pull-right{
        float: right;
    }

    .pull-left{
        float: left;
    }
 </style>
 <div class="row">
    <div class="col-md-12">
        <div class="panel-body">
            <br>
            <table class="table-nonborder" rules="none">
            <?php
                 $query = "SELECT * FROM murid where id_murid = '$_SESSION[id_murid]'";
                 $hasil = getData($query);
                 while($result = mysqli_fetch_assoc($hasil)){
            ?>
                <tr>
                    <td></td>
                    <td>Nama Paud</td>
                    <td>: &nbsp;TK AL MADINA</td>
                    <td></td>
                    <td>Nama Siswa</td>
                    <td>: &nbsp;<?php echo $result['nama']; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Alamat</td>
                    <td>: &nbsp;<?php echo $result['alamat']; ?></td>
                    <td></td>
                    <td>No Induk</td>
                    <td>: &nbsp<?php echo $result['nisn']; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Tahun Pelajaran</td>
                    <td>:&nbsp;&nbsp;2021-2022</td>
                </tr>
                <?php
                }
                ?>
            </table>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                        <th rowspan = "3">  No  </th> 
                            <th rowspan = "3"> Indikator </th>
                            <th colspan = "4"> <p style="text-align:center"> Penilaian Perkembangan Anak </p> </th> 
                            <th colspan = "4"> <p style="text-align:center"> Penilaian Perkembangan Anak </p> </th>
                        </tr>
                        <tr>
                            <td colspan = "4"> <p style="text-align:center"> Semester I </p> </td>
                            <td colspan = "4"> <p style="text-align:center"> Semester II </p> </td>
                        </tr>
                        <tr>
                            <td> BS </td>
                            <td> B </td>
                            <td> C </td>
                            <td> K </td>
                            <td> BS </td>
                            <td> B </td>
                            <td> C </td>
                            <td> K </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no=1;
                            $query=mysqli_query($conn,"
                            select * from nilai
                            JOIN indikator ON indikator.kode_indikator = nilai.kode_indikator
                            ");
                            while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr class="odd gradeX">
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['nama_indikator']; ?></td>
                            <?php if($row['semester']=="I"){?>
                            <td><?php if($row['nilai']=="BS"){echo "<p>&#10004</p>";}?></td>
                            <td><?php if($row['nilai']=="B"){echo "<p>&#10004</p>";}?></td>
                            <td><?php if($row['nilai']=="C"){echo "<p>&#10004</p>";}?></td>
                            <td><?php if($row['nilai']=="K"){echo "<p>&#10004</p>";}?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <?php } else{?>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><?php if($row['nilai']=="BS"){echo "<p>&#10004</p>";}?></td>
                            <td><?php if($row['nilai']=="B"){echo "<p>&#10004</p>";}?></td>
                            <td><?php if($row['nilai']=="C"){echo "<p>&#10004</p>";}?></td>
                            <td><?php if($row['nilai']=="K"){echo "<p>&#10004</p>";}?></td>
                            <?php }?>
                    </tbody>
                    <?php
                    }
    
                    ?>

                    </table>
                    <?php
                    function tgl_indo($tanggal){
                        $bulan = array (
                            1 =>   'Januari',
                            'Februari',
                            'Maret',
                            'April',
                            'Mei',
                            'Juni',
                            'Juli',
                            'Agustus',
                            'September',
                            'Oktober',
                            'November',
                            'Desember'
                        );
                        $pecahkan = explode('-', $tanggal);
                        
                        // variabel pecahkan 0 = tanggal
                        // variabel pecahkan 1 = bulan
                        // variabel pecahkan 2 = tahun
                     
                        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                    }
                    ?>
                        <div class="pull-left">
                            <br><br><br>
                            <br>Orang Tua/Wali,
                            <br><br>
                            <br><br><br><br>
                                <span class="nama">-----------------------</span>
                        </div>
                        <div class="pull-right">
                            <br>
                            <br>Mataram, <?php echo tgl_indo(date('Y-m-d')); ?><br>
                            <br>Guru Pendamping,
                            <br><br>
                            <br><br><br><br>
                                <span class="nama">-----------------------</span>
                        </div>
                        <div id="ttd" style="text-align: center">
                            <br><br><br><br><br><br><br><br><br><br><br><br>
                            <br>Mengetahui,<br>
                            <br>Kepala Lembaga 
                            <br><br>
                            <br><br>
                            <br><br>
                            <span class="nama">-----------------------</span><br>
                        </div>
                </div>
            </div>   
        </div>
    </div>
<script>
 window.print();
</script>
</body>
</html>