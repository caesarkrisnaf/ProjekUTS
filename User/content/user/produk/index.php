<?php
require_once '../koneksi.php';

$query = "SELECT p.id, p.kode,p.nama,p.harga,p.stok,j.nama as jenis_produk,p.foto 
FROM produk p left join jenis_produk j ON j.id = p.jenis_produk_id";

$rs = $dbh->query($query)
?>

<?php
$nomor = 0;
foreach ($rs as $r) {
?>

<div class="col-lg-3 col-md-4 col-sm-6 col-6">
    <div class="ltn__product-item text-center">
        <div class="product-img">
            <a href="#"><img src="../Admin/content/admin/produk/<?= $r['foto'] ?>" alt="#" style="width:500px;height:200px;"> </a>
            <div class="product-badge">
                <ul>
                    <li class="badge-2">10%</li>
                </ul>
            </div>
            <div class="product-hover-action product-hover-action-2">
                <ul>
                    <li class="add-to-cart">
                        <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal<?= $r['id'] ?>">
                            <span class="cart-text d-none d-xl-block">Order</span>
                            <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal<?= $r['id'] ?>">
                            <span>Detail</span>

                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="product-info">
            <h2 class="product-title"><a href="#"><?= $r['nama'] ?></a></h2>
            <div class="product-price">
                <span><?= $r['harga']; ?></span>
                <del>$21.00</del>
            </div>
        </div>
    </div>
</div>

<?php
}
?>

