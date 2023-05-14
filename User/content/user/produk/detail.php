<?php
require_once '../../../../koneksi.php';

$sql = "SELECT p.id, p.nama_produk,p.qty, p.tanggal, p.total_harga, p.nama_pemesan, p.alamat_pemesan, j.foto as foto_produk
FROM pesanan p left join produk j ON j.id = p.id_produk";
$rs = $dbh->query($sql);



$nomor = 0;
foreach ($rs as $r) {
?>




    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bootstrap 4, from LayoutIt!</title>

        <meta name="description" content="Source code generated using layoutit.com">
        <meta name="author" content="LayoutIt!">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    </head>

    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    Foto Produk </th>
                                <th>
                                    Nama Pemesan
                                </th>
                                <th>
                                    Quantity
                                </th>
                                <th>
                                    Tanggal
                                </th>
                                <th>
                                    Nama Pemesan
                                </th>
                                <th>Alamat Pemesan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <?= "<img src='../../../../Admin/content/admin/produk/$r[foto_produk]' width='120' height='70' />"; ?>
                                </td>
                                <td>
                                    <?= $r['nama_produk'] ?>
                                </td>
                                <td>
                                    <?= $r['qty'] ?>
                                </td>
                                <td>
                                    <?= $r['tanggal'] ?>
                                </td>
                                <td>
                                    <?= $r['nama_pemesan'] ?>
                                </td>
                                <td>
                                    <?= $r['alamat_pemesan'] ?>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </body>
<?php } ?>

    </html>