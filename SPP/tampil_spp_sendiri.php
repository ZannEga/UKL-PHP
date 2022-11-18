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
        <?php include "connect.php"; 
        $qry_spp=mysqli_query($connect,"select * from spp join siswa on siswa.nisn=spp.nisn");
        $dataSpp=mysqli_fetch_assoc($qry_spp);
        ?>
        <tr>
            <td><h2>Nama</h2></td>
            <td> </td>
            <td><h2> : </h2></td>
            <td></td>
            <td><h2><?php echo $dataSpp['nama']; ?></h2></td>
        </tr>
        <tr>
            <td><h2>Tahun</h2></td>
            <td> </td>
            <td><h2> : </h2></td>
            <td></td>
            <td><h2><?php echo $dataSpp['tahun']; ?></h2></td>
        </tr>
        <tr>
            <td><h2>Nominal Belum Terbayarkan </h2></td>
            <td> </td>
            <td><h2> : </h2></td>
            <td></td>
            <td><h2><?php echo $dataSpp['nominal']; ?></h2></td>
        </tr>
    </table>
</body>
</html>

<?php
include "footer.php";
?>