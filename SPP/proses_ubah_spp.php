<?php
if($_POST){
    $nama_spp=$_POST['nama_spp'];
    $id_spp=$_POST['id_spp'];
    $posisi=$_POST['posisi'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($id_spp)){
        echo "<script>alert('ID spp tidak boleh kosong');location.href='tampil_spp.php';</script>";
    } elseif(empty($nama_spp)){
        echo "<script>alert('nama spp tidak boleh kosong');location.href='tampil_spp.php';</script>";
    } else {
        include "connect.php";
        if(empty($password)){
            $update=mysqli_query($connect,"update spp set nama_spp='".$nama_spp."', posisi='".$posisi."', username='".$username."', id_spp='".$id_spp."' where id_spp = '".$id_spp."' ") or die(mysqli_error($connect));
            if($update){
                echo "<script>alert('Sukses update spp');location.href='tampil_spp.php';</script>";
            } else {
                echo "<script>alert('Gagal update spp');location.href='ubah_spp.php?id_spp=".$id_spp."';</script>";
            }
        } else {
            $update=mysqli_query($connect,"update spp set nama_spp='".$nama_spp."', posisi='".$posisi."', username='".$username."', password='".md5($password)."', id_spp='".$id_spp."' where id_spp = '".$id_spp."'") or die(mysqli_error($connect));
            if($update){
                echo "<script>alert('Sukses update spp');location.href='tampil_spp.php';</script>";
            } else {
                echo "<script>alert('Gagal update spp');location.href='ubah_spp.php?id_spp=".$id_spp."';</script>";
            }
        }
        
    } 
}
?>
