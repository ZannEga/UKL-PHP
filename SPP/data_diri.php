<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php include "connect.php" ?>
        <tr>
            <td><h2>Nama</h2></td>
            <td><h2>:</h2></td>
            <td></td>
            <td><h2><?php echo $_SESSION['nama'] ?></h2></td>
        </tr>
        <tr>
            <td><h2>NISN</h2></td>
            <td><h2>:</h2></td>
            <td></td>
            <td><h2><?php echo $_SESSION['nisn'] ?></h2></td>
        </tr>
        <tr>
            <td><h2>NIS</h2></td>
            <td><h2>:</h2></td>
            <td></td>
            <td><h2><?php echo $_SESSION['nis'] ?></h2></td>
        </tr>
        <tr>
            <td><h2>Alamat</h2></td>
            <td><h2>:</h2></td>
            <td></td>
            <td><h2><?php echo $_SESSION['alamat'] ?></h2></td>
        </tr>
        <tr>
            <td><h2>No. Telepon</h2></td>
            <td><h2>:</h2></td>
            <td></td>
            <td><h2><?php echo $_SESSION['no_telp'] ?></h2></td>
        </tr>
        <tr>
            <td><h2>Jenis Kelamin</h2></td>
            <td><h2>:</h2></td>
            <td></td>
            <td><h2><?php echo $_SESSION['jk'] ?></h2></td>
        </tr>
        <tr>
            <td><h2>Username</h2></td>
            <td><h2>:</h2></td>
            <td></td>
            <td><h2><?php echo $_SESSION['username'] ?></h2></td>
        </tr>
    </table>
</body>
</html>

<?php
include "footer.php";
?>