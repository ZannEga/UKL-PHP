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
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tampil_siswa.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tampil_siswa.php';</script>";
    } else {
        include "connect.php";
        if(empty($password)){
            $update=mysqli_query($connect,"update siswa set nama='".$nama."',nisn='".$nisn."', nis='".$nis."', alamat='".$alamat."', no_telp='".$no_telp."', jk='".$jk."', username='".$username."', id_kelas='".$id_kelas."' where nisn = '".$nisn."' ") or die(mysqli_error($connect));
            if($update){
                echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?nisn=".$nisn."';</script>";
            }
        } else {
            $update=mysqli_query($connect,"update siswa set nama='".$nama."',nisn='".$nisn."', nis='".$nis."', alamat='".$alamat."', no_telp='".$no_telp."', jk='".$jk."', username='".$username."', password='".md5($password)."', id_kelas='".$id_kelas."' where nisn = '".$nisn."'") or die(mysqli_error($connect));
            if($update){
                echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?nisn=".$nisn."';</script>";
            }
        }
        
    } 
}
?>
