<?php
require_once '../../../../koneksi.php';
$nama = $_POST['nama_produk'];
$quantity = $_POST['qty'];
$tanggal = $_POST['tanggal'];
$total_harga = $_POST['total_harga'];
$nama_pemesan = $_POST['nama_pemesan'];
$alamat = $_POST['alamat'];
$id_produk = $_POST['id_produk'];

$ar_data[] = $nama;
$ar_data[] = $quantity;
$ar_data[] = $tanggal;
$ar_data[] = $total_harga;
$ar_data[] = $nama_pemesan;
$ar_data[] = $alamat;
$ar_data[] = $id_produk;

$sql = "INSERT INTO pesanan (nama_produk,qty,tanggal,total_harga,nama_pemesan,alamat_pemesan, id_produk) 
    VALUES (?,?,?,?,?,?,?)";

if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Anda Berhasil Memesan');
    window.location.href='../../../index.php';
    </script>");
