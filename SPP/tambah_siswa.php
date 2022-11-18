<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/litera/bootstrap.min.css" integrity="sha384-enpDwFISL6M3ZGZ50Tjo8m65q06uLVnyvkFO3rsoW0UC15ATBFz3QEhr3hmxpYsn" crossorigin="anonymous">
<style>
  p {text-align: center;}
</style>
    <title></title>
</head>
<body>
    <div class="row" style="margin-top:50px;">
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
        <form action="proses_tambah_siswa.php" method="post">
        <h3 align="center">Tambah Siswa</h3>
        Nama Siswa :
        <input type="text" name="nama" value="" class="form-control">
        NISN :
        <input type="text" name="nisn" value="" class="form-control">
        NIS :
        <input type="text" name="nis" value="" class="form-control">
        Kelas :
        <select name="id_kelas" class="form-control">
            <option>
                <?php 
                include "connect.php";
                $qry_kelas=mysqli_query($connect,"select * from kelas");
                while($data_kelas=mysqli_fetch_array($qry_kelas)){
                    echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';
                }
                ?>
            </option>        
        </select>
        No.Telepon : 
        <input type="text" name="no_telp" value="" class="form-control">
        Username :
        <input type="text" name="username" value="" class="form-control">
        Password :
        <input type="text" name="password" value="" class="form-control">
        Jenis Kelamin : 
        <select name="jk" class="form-control">
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        Alamat : 
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        <br>
        <p><input type="submit" name="simpan" value="Tambah Siswa" class="btn btn-primary"></p>
      </form>
    </div>
    <div class="col-md"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
 