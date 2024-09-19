<?php
ini_set("display_erors",0);
$thr=0;
$gaji=0;
$hasil=0;
if (isset($_GET["gaji"]) AND isset($_GET["thr"])){
    $gaji = $_GET["gaji"];
    $thr = $_GET["thr"];
    $gajizakat = $gaji*12;
    $zakat = 82312725;
    $hasil = $gaji*12+$thr*2.5/100-$gaji;

    if ($gajizakat + $thr >= $zakat) {
        $hasil = true;
      } elseif ($gajizakat + $thr <= $zakat){
        echo "Maaf Jumlah Uang Anda Zakat Belum Mencapai Nisab";
        echo $hasil = 0;
}
}

?>









<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kalkulator Zakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
    <h1 class="text-center"> Kalkulator Zakat</h1>
    <div class="row">             
    <div class="col-12">
    <form action="" method="GET">
    <label for="gaji" class="form-label">jumlah pendapatan per bulan :</label>
  <input type="number" class="form-control" name="gaji" placeholder="Harga Awal">
  <label for="diskon" class="form-label">bonus, thr dan lainnya :</label>
  <input type="number" class="form-control" name="thr" placeholder="Diskon">
    </div>
    </div>
    <input type="submit" name="submit" value="Hitung" class="btn btn-success mt-3 ps-3 ps-5 pe-5"> 
        </form>  
    <br><br>
    <div class="col-6">
    <h2 class="text-center">jumlah penghasilan zakat anda :</h2>
    <h3 class="text-center"><?php echo $hasil; ?></h3>
    <h3 class="text-center"><?php echo $gajizakat; ?></h3>
    <table class="table">
  <tbody>
    <tr>
      <td>pendapatan per bulan :</td>
      <td><?php echo $gaji; ?></td>
    </tr>
    <tr>
      <td>bonus, thr dan lainnya :</td>
      <td><?php echo $thr; ?></td>
    </tr>
  </tbody>
</table>
<br><br>
<button type="button" class="btn btn-success">Bayar Zakat Penghasilan</button>
<br><br>
<h2 class="text-center">Metode Pembayaran</h2>
<br>
<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <img src="lgbsi.png" width="30px">
    BSI Virtual Account
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <img src="bca.png" width="30px">
    BCA Virtual Account
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <img src="mandiri.png" width="30px">
    Mandiri Virtual Account
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option3">
  </li>
</ul>
</div>
</div>

          
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>