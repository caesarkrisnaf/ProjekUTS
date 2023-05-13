<?php 
require_once '../../../koneksi.php';
$Nama = $_POST['nama'];
$Proses = $_POST['proses'];


$ar_data[] = $Nama;

if ($Proses == "Simpan") {
    //data baru
    $sql = "INSERT INTO jenis_produk (nama) 
    VALUES (?)";
} else if ($Proses == "Update") {
    $ar_data[] = $_POST['id']; // ? 8
    $sql = "UPDATE jenis_produk SET nama=? WHERE id=?";
}
if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
 }
 header('location:../../../index.php?page/admin=jenis_produk');
