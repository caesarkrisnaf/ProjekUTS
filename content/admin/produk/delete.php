<?php
require_once '../../../koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM produk WHERE id= ?";
$r = $dbh->prepare($sql);
$r->execute(array($id));
header('location:../../../index.php?page/admin=produk');

?>