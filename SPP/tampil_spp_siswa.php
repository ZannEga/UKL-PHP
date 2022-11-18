<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<h3>Data SPP</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NISN</th>
                <th>NAMA SISWA</th>
                <th>ANGKATAN</th>
                <th>TAHUN</th>
                <th>NOMINAL</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "connect.php";
            $qry_spp=mysqli_query($connect,"select * from spp join siswa on siswa.nisn=spp.nisn");
            $no=0;
            while($data_spp=mysqli_fetch_array($qry_spp)){
            $no++;?>
            <tr>
                <td><?=$no?></td>
                <td><?=$data_spp['nisn']?></td>
                <td><?=$data_spp['nama']?></td>
                <td><?=$data_spp['angkatan']?></td>
                <td><?=$data_spp['tahun']?></td>
                <td><?=$data_spp['nominal']?></td>
                <td><a href="ubah_spp.php?id_spp=<?=$data_spp['id_spp']?>" class="btn btn-success">Ubah</a> | <a href="hapus_spp.php?id_spp=<?=$data_spp['id_spp']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<?php
include "footer.php";
?>