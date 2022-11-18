<?php
if($_POST){
    $nama=$_POST['nama'];
    $nisn=$_POST['nisn'];
    $nis=$_POST['nis'];
    $alamat=$_POST['alamat'];
    $no_telp=$_POST['no_telp'];
    $jk=$_POST['jk'];
    $username=$_POST['username'];
    $password= $_POST['password'];
    $id_kelas=$_POST['id_kelas'];
    if(empty($nama)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "connect.php";
        $qryAngkatan = mysqli_query($connect, "SELECT * FROM kelas WHERE id_kelas=$id_kelas");
        $dataAngkatan = mysqli_fetch_assoc($qryAngkatan);
        $d = $dataAngkatan['angkatan'];

        if ($d == 1){
            $thn = 2020;
        } else if ($d == 2){
            $thn = 2021;
        }
        $insert=mysqli_query($connect,"insert into siswa (nama, nisn, nis, alamat, no_telp, jk, username, password, id_kelas) value ('".$nama."','".$nisn."','".$nis."','".$alamat."','".$no_telp."','".$jk."','".$username."','".md5($password)."','".$id_kelas."')") or die(mysqli_error($connect));
        $insert_spp=mysqli_query($connect, "insert into spp (nisn, angkatan, tahun, nominal) value ($nisn, $d, $thn, 7200000)");
        if($insert){
            echo "<script>alert('Sukses menambahkan siswa');location.href='tampil_siswa.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan siswa');location.href='tambah_siswa.php';</script>";
        }
    }
}
?>