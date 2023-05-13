<?php
require_once 'koneksi.php';



$id = $_GET['id'];
$sql = "SELECT p.id, p.kode,p.nama,p.harga,p.stok,j.nama as jenis_produk,p.foto 
FROM produk p left join jenis_produk j ON j.id = p.jenis_produk_id WHERE p.id = ?";

$r = $dbh->prepare($sql);
$r->execute(array($id));
$hasil = $r->fetch();
?>

<div class="container">
  <h2>Detail Produk</h2>
  <div class="row">
    <div class="col-sm-4">
      <h3>Foto Produk</h3>
    <?= "<img src='content/admin/produk/$hasil[foto]' width='200' height='200' />"; ?>
    </div>
    <div class="col-sm-8">
      <h4>Kode Produk : <?= $hasil['kode'];  ?></h4>
      <h4>Nama Produk : <?= $hasil['nama']; ?></h4>
      <h4>Stok Produk : <?= $hasil['stok']; ?></h4>
      <h4>Harga : <?= $hasil['harga']; ?></h4>
      <h4>Jenis Produk : <?= $hasil['jenis_produk']; ?></h4>
      <a class="btn btn-primary" href="index.php?page/admin=produk">Kembali</a>
    </div>
  </div>
</div>