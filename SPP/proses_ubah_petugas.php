<?php
if($_POST){
    $nama_petugas=$_POST['nama_petugas'];
    $id_petugas=$_POST['id_petugas'];
    $posisi=$_POST['posisi'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($id_petugas)){
        echo "<script>alert('ID petugas tidak boleh kosong');location.href='tampil_petugas.php';</script>";
    } elseif(empty($nama_petugas)){
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='tampil_petugas.php';</script>";
    } else {
        include "connect.php";
        if(empty($password)){
            $update=mysqli_query($connect,"update petugas set nama_petugas='".$nama_petugas."', posisi='".$posisi."', username='".$username."', id_petugas='".$id_petugas."' where id_petugas = '".$id_petugas."' ") or die(mysqli_error($connect));
            if($update){
                echo "<script>alert('Sukses update petugas');location.href='tampil_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update petugas');location.href='ubah_petugas.php?id_petugas=".$id_petugas."';</script>";
            }
        } else {
            $update=mysqli_query($connect,"update petugas set nama_petugas='".$nama_petugas."', posisi='".$posisi."', username='".$username."', password='".md5($password)."', id_petugas='".$id_petugas."' where id_petugas = '".$id_petugas."'") or die(mysqli_error($connect));
            if($update){
                echo "<script>alert('Sukses update petugas');location.href='tampil_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update petugas');location.href='ubah_petugas.php?id_petugas=".$id_petugas."';</script>";
            }
        }
        
    } 
}
?>
