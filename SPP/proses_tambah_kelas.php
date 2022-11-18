<?php
if($_POST){
    $nama_kelas=$_POST['nama_kelas'];
    $id_kelas=$_POST['id_kelas'];
    $jurusan=$_POST['jurusan'];
    $angkatan=$_POST['angkatan'];
    if(empty($nama_kelas)){
        echo "<script>alert('nama kelas tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    } elseif(empty($id_kelas)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    } elseif(empty($jurusan)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    } else {
        include "connect.php";
        $insert=mysqli_query($connect,"insert into kelas (nama_kelas, id_kelas, jurusan, angkatan) value ('".$nama_kelas."','".$id_kelas."','".$jurusan."','".$angkatan."')") or die(mysqli_error($connect));
        if($insert){
            echo "<script>alert('Sukses menambahkan kelas');location.href='tampil_kelas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan kelas');location.href='tambah_kelas.php';</script>";
        }
    }
}
?>