<?php
if($_POST){
    $nama_kelas=$_POST['nama_kelas'];
    $id_kelas=$_POST['id_kelas'];
    $jurusan=$_POST['jurusan'];
    $angkatan=$_POST['angkatan'];
    if(empty($id_kelas)){
        echo "<script>alert('ID kelas tidak boleh kosong');location.href='tampil_kelas.php';</script>";
    } elseif(empty($nama_kelas)){
        echo "<script>alert('nama kelas tidak boleh kosong');location.href='tampil_kelas.php';</script>";
    } else {
        include "connect.php";
        if(empty($angkatan)){
            $update=mysqli_query($connect,"update kelas set nama_kelas='".$nama_kelas."', jurusan='".$jurusan."', angkatan='".$angkatan."', id_kelas='".$id_kelas."' where id_kelas = '".$id_kelas."' ") or die(mysqli_error($connect));
            if($update){
                echo "<script>alert('Sukses update kelas');location.href='tampil_kelas.php';</script>";
            } else {
                echo "<script>alert('Gagal update kelas');location.href='ubah_kelas.php?id_kelas=".$id_kelas."';</script>";
            }
        } else {
            $update=mysqli_query($connect,"update kelas set nama_kelas='".$nama_kelas."', jurusan='".$jurusan."', angkatan='".$angkatan."', id_kelas='".$id_kelas."' where id_kelas = '".$id_kelas."'") or die(mysqli_error($connect));
            if($update){
                echo "<script>alert('Sukses update kelas');location.href='tampil_kelas.php';</script>";
            } else {
                echo "<script>alert('Gagal update kelas');location.href='ubah_kelas.php?id_kelas=".$id_kelas."';</script>";
            }
        }
        
    } 
}
?>
