<?php
ini_set("display_erors",0);
$besardiskon=0;
$gaji=0;
$hasil=0;
if (isset($_GET["gaji"]) AND isset($_GET["diskon"])){
    $gaji = $_GET["gaji"];
    $diskon = $_GET["diskon"];
    $hasil = $gaji*$diskon/100;
    $besardiskon = $gaji-$hasil;
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kalkulator Diskon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1 class="text-center"> Kalkulator Diskon</h1>
    <div class="row">             
    <div class="col-6">
    <form action="" method="GET">
    <label for="gaji" class="form-label">Harga Awal Rupiah (rupiah) :</label>
  <input type="number" class="form-control" name="gaji" placeholder="Harga Awal">
    </div><div class="col-6">
  <label for="diskon" class="form-label">Diskon (%) :</label>
  <input type="number" class="form-control" name="diskon" placeholder="Diskon">
    </div>
    </div>
    <input type="submit" name="submit" value="Hitung Diskonnya" class="btn btn-primary mt-3 ps-3 ps-5 pe-5"> 
        </form>  
    <br><br>
    <div class="modal-dialog">
    <div class="col-6">
    <h2 class="text">Diskon Anda :</h2>   
        <table class="table table-bordered">
  <tbody>
    <tr>
      <td>Harga Sebelum Diskon</td>
      <td>Rp.<?php echo $gaji; ?>  </td>
    </tr>
    <tr>
      <td>Besar Diskon</td>
      <td>Rp.<?php echo $besardiskon; echo "<br>"; echo $diskon; echo "%";?></td>
    </tr>
    <tr>
      <td>Harga Setelah Diskon</td>
      <td>Rp.<?php echo $hasil; ?></td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>
          
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>