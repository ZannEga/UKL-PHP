<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous">
    <title></title>
</head>
<body>
    <div class="row" style="margin-top:50px;">
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
    <?php 
    include "connect.php";
    $qry_get_siswa=mysqli_query($connect,"select * from siswa where nisn = '".$_GET['nisn']."'");
    $dt_siswa=mysqli_fetch_array($qry_get_siswa);
    ?>
    <h3>Ubah Siswa</h3>
    <form action="proses_ubah_siswa.php" method="post">
        <input type="hidden" name="nisn" value= "<?=$dt_siswa['nisn']?>">
        Nama siswa :
        <input type="text" name="nama" value=   "<?=$dt_siswa['nama']?>" class="form-control">
        NIS :
        <input type="text" name="nis" value=   "<?=$dt_siswa['nis']?>" class="form-control">
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
        Jenis Kelamin : 
        <?php 
        $arr_jk=array
        ('Laki-laki'=>'L',
        'Perempuan'=>'P');
        ?>
        <select name="jk" class="form-control">
            <option></option>
            <option value ="L">L</option>
            <option value ="P">P</option>
        </select>
        Telepon : 
        <input type="text" name="no_telp" value="<?=$dt_siswa['no_telp']?>" class="form-control">
        Alamat : 
        <input type="text" name="alamat" class="form-control" rows="4" value="<?=$dt_siswa['alamat']?>">
        Username : 
        <input type="text" name="username" value="<?=$dt_siswa['username']?>" class="form-control">
        Password : 
        <input type="text" name="password" value="<?=$dt_siswa['password']?>" class="form-control">
        <br>
        <input type="submit" name="simpan" value="Ubah Siswa" class="btn btn-primary">
    </form>
    </div>
    <div class="col-md"></div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
     crossorigin="anonymous"></script>
</body>
</html>
