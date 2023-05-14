<?php
require_once '../koneksi.php';



$id = $_GET['id'];
$sql = "SELECT p.id, p.nama_produk,p.qty, p.tanggal ,p.total_harga, p.nama_pemesan, p.alamat_pemesan, j.foto as foto_produk
FROM pesanan p left join produk j ON j.id = p.id_produk WHERE p.id = ?";

$r = $dbh->prepare($sql);
$r->execute(array($id));
$hasil = $r->fetch();
?>

<div class="container">
    <h2>Detail Pemesanan</h2>
    <div class="row">
        <div class="col-sm-4">
            <table>
                <tr>
                    <td><?= "<img src='content/admin/produk/$hasil[foto_produk]' width='200' height='200' />"; ?></td>
                </tr>


            </table>
        </div>
        <div class="col-sm-8">
            <table>
                <tr>
                    <td>
                        <h4> Nama produk<h4>
                    </td>
                    <td>
                        <h4>&nbsp;:&nbsp;</h4>
                    </td>
                    <td>
                        <h4><?= $hasil['nama_produk']; ?><h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Quantity<h4>
                    </td>
                    <td>
                        <h4>&nbsp;:&nbsp;</h4>
                    </td>
                    <td>
                        <h4><?= $hasil['qty']; ?><h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Tanggal<h4>
                    </td>
                    <td>
                        <h4>&nbsp;:&nbsp;</h4>
                    </td>
                    <td>
                        <h4><?= $hasil['tanggal']; ?><h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Total Harga<h4>
                    </td>
                    <td>
                        <h4>&nbsp;:&nbsp;</h4>
                    </td>
                    <td>
                        <h4><?= $hasil['total_harga']; ?><h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4> Nama Pemesan<h4>
                    </td>
                    <td>
                        <h4>&nbsp;:&nbsp;</h4>
                    </td>
                    <td>
                        <h4><?= $hasil['nama_pemesan']; ?><h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Alamat Pemesan<h4>
                    </td>
                    <td>
                        <h4>&nbsp;:&nbsp;</h4>
                    </td>
                    <td>
                        <h4><?= $hasil['alamat_pemesan']; ?><h4>
                    </td>
                </tr>
            </table>
            <a class="btn btn-primary" href="index.php?page/admin=produk">Kembali</a>
        </div>
    </div>
</div>