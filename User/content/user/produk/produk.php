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

<!-- MODAL AREA START (Quick View Modal) -->
<div class="ltn__modal-area ltn__quick-view-modal-area">
    <div class="modal fade" id="quick_view_modal<?= $r['id'] ?>" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <!-- <i class="fas fa-times"></i> -->
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ltn__quick-view-modal-inner">
                        <div class="modal-product-item">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="modal-product-img">
                                        <img src="../Admin/content/admin/produk/<?= $r['foto'] ?>" alt="#">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="modal-product-info shop-details-info pl-0">
                                        <span>Nama</span> :  <span><?= $r['nama'] ?></span>
                                       
                                        <div class="product-price-ratting mb-20">
                                            <ul>
                                                <li>
                                                    <div class="product-price">
                                                        <span>Harga</span> : <span><?= $r['harga'] ?></span>
                                                        <del>$65.00</del>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="modal-product-brief">
                                         <span>Stok</span> : <span><?= $r['stok'] ?></span>
                                        </div>
                                        <div class="modal-product-meta ltn__product-details-menu-1 mb-20">
                                            <span>Jenis Produk</span> : <span><?= $r['jenis_produk'] ?></span>
                                        </div>
                                       
                                        <div class="ltn__social-media mb-30">
                                            <ul>
                                                <li class="d-meta-title">Tersedia di :</li>
                                                <li><a href="#" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                                                <li><a href="#" title="Pinterest"><i class="icon-social-pinterest"></i></a></li>
                                                <li><a href="#" title="Instagram"><i class="icon-social-instagram"></i></a></li>

                                            </ul>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL AREA END -->

<?php
}
?>