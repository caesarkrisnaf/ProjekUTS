<?php
require_once '../../../koneksi.php';
$_Kode = $_POST['kode'];
$_Nama = $_POST['nama'];
$_Harga = $_POST['harga'];
$_Stok = $_POST['stok'];
$_Jenis = $_POST['jenis'];
$_Gambar = $_FILES['foto']['name'];
$_Tmp = $_FILES['foto']['tmp_name'];
$_Proses = $_POST['proses'];


$fotobaru = date('dmYhis') . $_Gambar;
$path = "images/" . $fotobaru;

if (move_uploaded_file($_Tmp, $path)) {
    $ar_data[] = $_Kode;
    $ar_data[] = $_Nama;
    $ar_data[] = $_Harga;
    $ar_data[] = $_Stok;
    $ar_data[] = $_Jenis;
    $ar_data[] = $path;

}
    if ($_Proses == "Simpan") {
        //data baru
        $sql = "INSERT INTO produk(kode,nama,harga,stok,jenis_produk_id,foto) VALUES (?,?,?,?,?,?)";
    } else if ($_Proses == "Update") {
        $ar_data[] = $_POST['id'];
        $sql = "UPDATE produk SET kode=?,nama=?,harga=?,stok=?,jenis_produk_id=?,foto=? WHERE id=?";
    }
    if (isset($sql)) {
        $st = $dbh->prepare($sql);
        $st->execute($ar_data);
      
}
header('location:../../../index.php?page/admin=produk');
?>
