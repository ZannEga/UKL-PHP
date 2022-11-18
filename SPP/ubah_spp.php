<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous">
    <title></title>
</head>
<body>
    <div class="row" style="margin-top:50px;">
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
    <?php 
    include "connect.php";
    $qry_get_spp=mysqli_query($connect,"select * from spp where id_spp = '".$_GET['id_spp']."'");
    $dt_spp=mysqli_fetch_array($qry_get_spp);
    ?>
    <h3>Ubah spp</h3>
    <form action="proses_ubah_spp.php" method="post">
        <input type="hidden" name="id_spp" value= "<?=$dt_spp['id_spp']?>">
        Nominal SPP :
        <input type="text" name="nominal" value=   "<?=$dt_spp['nominal']?>" class="form-control">
        <br>
        <input type="submit" name="simpan" value="Ubah SPP" class="btn btn-primary">
    </form>
    </div>
    <div class="col-md"></div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
     crossorigin="anonymous"></script>
</body>
</html>
