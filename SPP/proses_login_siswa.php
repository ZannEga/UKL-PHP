<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        } else {
            include "connect.php";
            $qry_login=mysqli_query($connect,"select * from siswa where username = '".$username."' and password = '".md5($password)."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['nisn']=$dt_login['nisn'];
                $_SESSION['nis']=$dt_login['nis'];
                $_SESSION['nama']=$dt_login['nama'];
                $_SESSION['alamat']=$dt_login['alamat'];
                $_SESSION['no_telp']=$dt_login['no_telp'];
                $_SESSION['jk']=$dt_login['jk'];
                $_SESSION['username']=$dt_login['username'];
                $_SESSION['akses']='no';
                $_SESSION['status_login']=true;
                header("location: home.php");
            } else {
                echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
            }
        }
    }
?>