<?php 
    include "header.php";
?>
<br>
<h3 align="center" style="color: light-black; font-family:montserrat; font-size: 35px;">Data Siswa</h3>
<br>
<div class="row">
    <?php 
    include "connect.php";
    $qry_siswa=mysqli_query($connect,"select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas");
    $no=0;
    while($data_siswa=mysqli_fetch_array($qry_siswa)){
    $no++;?>
        <div class="col-md-3">
            <div class="card" >
              <div class="card-body">
              <h5 style="color: light-black; font-family:montserrat; font-size: 20px;" class="card-title"><?=$data_siswa['nama']?></h5>
                <table>
                    <tr>
                        <td>NISN </td>
                        <td> : </td>
                        <td>
                            <h5 style="font-family:calibri; font-size: 16px;" class="card-text"><?=substr($data_siswa['nisn'], 0,20)?></h5>
                        </td>
                    </tr>
                    <tr>
                        <td>NIS </td>
                        <td> : </td>
                        <td>
                            <h5 style="font-family:calibri; font-size: 16px;" class="card-text"><?=substr($data_siswa['nis'], 0,20)?></h5>
                        </td>
                    </tr>
                    <tr>
                        <td>Username </td>
                        <td> : </td>
                        <td>
                            <h5 style="font-family:calibri; font-size: 16px;" class="card-text"><?=substr($data_siswa['username'], 0,20)?></h5>
                        </td>
                    </tr>
                    <tr>
                        <td>No. Telepon </td>
                        <td> : </td>
                        <td>
                            <h5 style="font-family:calibri; font-size: 16px;" class="card-text"><?=substr($data_siswa['no_telp'], 0,20)?></h5>
                        </td>
                    </tr>
                    <tr>
                        <td>Kelas </td>
                        <td> : </td>
                        <td>
                            <h5 style="font-family:calibri; font-size: 16px;" class="card-text"><?=substr($data_siswa['nama_kelas'], 0,20)?></h5>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin </td>
                        <td> : </td>
                        <td>
                        <?php if($data_siswa['jk']== "L" ){ ?>
                            <h5 style="font-family:calibri; font-size: 16px;" class="card-text"><?=substr($data_siswa['jk'], 0,20)?></h5>
                        <?php }elseif($data_siswa['jk'] == "P"){ ?>
                            <h5 style="font-family:calibri; font-size: 16px;" class="card-text"><?=substr($data_siswa['jk'], 0,20)?></h5>
                        <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="ubah_siswa.php?nisn=<?=$data_siswa['nisn']?>" class="btn btn-success">Ubah</a> | <a href="hapus_siswa.php?nisn=<?=$data_siswa['nisn']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
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

<p><a href="tambah_siswa.php" class="btn btn-primary"><b>Tambah Siswa</b></a></p>
<?php 
    include "footer.php";
?>

