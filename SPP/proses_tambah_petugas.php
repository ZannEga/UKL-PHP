<?php
if($_POST){
    $nama_petugas=$_POST['nama_petugas'];
    $id_petugas=$_POST['id_petugas'];
    $posisi=$_POST['posisi'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($nama_petugas)){
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } else {
        include "connect.php";
        $insert=mysqli_query($connect,"insert into petugas (nama_petugas, id_petugas, username, password, posisi) value ('".$nama_petugas."','".$id_petugas."','".$username."','".md5($password)."','".$posisi."')") or die(mysqli_error($connect));
        if($insert){
            echo "<script>alert('Sukses menambahkan petugas');location.href='tampil_petugas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan petugas');location.href='tambah_petugas.php';</script>";
        }
    }
}
?>