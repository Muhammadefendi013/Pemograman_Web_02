<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM BELANJA</title>
    <style>
        .nomer {
            text-align: center;
        }

        th {
            background-color: blue;
        }

        th,td {
            padding: 10px;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<h2>Belanja Online</h2>
<table border="1" style="float: right; margin-right: 1cm;">
    <thead>
        <tr>
            <th>Nomor</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="nomer">1</td>
            <td>TV</td>
            <td>Rp 4.200.000,-</td>
        </tr>
        <tr>
            <td class="nomer">2</td>
            <td>KULKAS</td>
            <td>Rp 3.100.000,-</td>
        </tr>
        <tr>
            <td class="nomer">3</td>
            <td>MESIN CUCI</td>
            <td>Rp 3.800.000,-</td>
        </tr>
    </tbody>
</table>
<form method=POST action="form_belanja.php"777>
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-4">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-6">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-2">
      <input id="jumlah" name="jumlah" type="number" min="0" placeholder="Jumlah" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-4">
      <button name="submit" type="submit" class="btn btn-success">Kirim</button>
    </div>
  </div>
</form>
<?php
$proses = $_POST['proses'];
$customer = $_POST['customer'];
$pilih = $_POST['produk'];
// $tv = $_POST['produk'];
// $kulkas = $_POST['produk'];
// $mesin_cuci = $_POST['produk'];
$jumlah = $_POST['jumlah'];
if($pilih == 'TV') {
    $harga = 4200000;
} elseif($pilih == 'KULKAS') {
    $harga = 3100000;
} elseif($pilih == 'MESIN CUCI') {
    $harga = 3800000;
}
$total = $jumlah * $harga;


//Menampilkan data
echo "Nama Customer : $customer";
echo "<br/>Produk Pilihan : $pilih";
echo "<br/>Jumlah : $jumlah";
echo "<br/>Total Harga : $total";
?>
</body>
</html>