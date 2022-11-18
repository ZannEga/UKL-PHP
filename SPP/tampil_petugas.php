<?php 
    include "header.php";
?>
<br>
<h3 align="center" style="color: light-black; font-family:montserrat; font-size: 35px;">Data Petugas</h3>
<br>
<div class="row">
    <?php 
    include "connect.php";
    $qry_petugas=mysqli_query($connect,"select * from petugas");
    $no=0;
    while($data_petugas=mysqli_fetch_array($qry_petugas)){
    $no++;?>
        <div class="col-md-3">
            <div class="card" >
              <div class="card-body">
              <h5 style="color: light-black; font-family:montserrat; font-size: 20px;" class="card-title"><?=$data_petugas['nama_petugas']?></h5>
                <table>
                    <tr>
                        <td>ID Petugas </td>
                        <td> : </td>
                        <td>
                            <h5 style="font-family:calibri; font-size: 16px;" class="card-text"><?=substr($data_petugas['id_petugas'], 0,20)?></h5>
                        </td>
                    </tr>
                    <tr>
                        <td>Username </td>
                        <td> : </td>
                        <td>
                            <h5 style="font-family:calibri; font-size: 16px;" class="card-text"><?=substr($data_petugas['username'], 0,20)?></h5>
                        </td>
                    </tr>
                    <tr>
                        <td>Posisi </td>
                        <td> : </td>
                        <td>
                            <h5 style="font-family:calibri; font-size: 16px;" class="card-text"><?=substr($data_petugas['posisi'], 0,20)?></h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="ubah_petugas.php?id_petugas=<?=$data_petugas['id_petugas']?>" class="btn btn-success">Ubah</a> | <a href="hapus_petugas.php?id_petugas=<?=$data_petugas['id_petugas']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                </table>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
    <style>
        p {text-align: center;}
    </style>
</div>
<br>
<br>

<p><a href="tambah_petugas.php" class="btn btn-primary"><b>Tambah Petugas</b></a></p>
<?php 
    include "footer.php";
?>

