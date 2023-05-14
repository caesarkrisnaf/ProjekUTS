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

    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="add_to_cart_modal<?= $r['id'] ?>" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="ltn__quick-view-modal-inner">
                            <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-add-to-cart-content clearfix">
                                            <div class="modal-product-img">
                                                <img src="../Admin/content/admin/produk/<?= $r['foto'] ?>" alt="#">
                                            </div>
                                            <form action="content/user/produk/proses.php" method="POST">
                                                <div class="modal-product-info">
                                                    <h5><a href="#"><?= $r['nama'] ?></a></h5>
                                                    <div class="ltn__checkout-single-content mt-50">
                                                        <h4 class="title-2">Form Pemesanan</h4>
                                                        <div class="ltn__checkout-single-content-info">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="input-item">
                                                                        <input type="text" name="id_produk" placeholder="Id Produk" value="<?= $r['id'] ?>" hidden>
                                                                        <input type="text" name="nama_produk" placeholder="Nama Produk" value="<?= $r['nama'] ?>" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="input-item" style="padding-bottom: 20px;">
                                                                        <input type="number" name="qty" placeholder="Massukan Quantity" id="qty-<?= $r['id'] ?>" onchange="changeTotalHarga('<?= $r['id'] ?>')">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12" style="padding-bottom: 20px;">
                                                                    <div class="input-item">
                                                                        <input type="date" name="tanggal" value="<?= date('Y-m-d') ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="input-item">
                                                                        <input type="text" placeholder="Harga" id="harga-<?= $r['id'] ?>" value="<?= $r['harga'] ?>" hidden>
                                                                        <input type="text" name="total_harga" placeholder="Total Harga" id="total_harga-<?= $r['id'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="input-item">
                                                                        <input type="text" name="nama_pemesan" placeholder="Nama Pemesan">
                                                                    </div>
                                                                </div>
                                                                <div class="input-item input-item-textarea ltn__custom-icon">
                                                                    <textarea name="alamat" placeholder="Massukan Alamat Anda"></textarea>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="btn-wrapper">
                                                            <button name="proses" type="submit" class="theme-btn-1 btn btn-effect-1">Simpan</button>
                                                        </div>
                                                    </div>
                                            </form>
                                        </div>
                                        <!-- additional-info -->
                                        <div class="additional-info d-none--">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br> Use (fiama10) discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="img/icons/payment.png" alt="#">
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

<?php } ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"></script>
<script>
    function changeTotalHarga(id) {
        const qty = $("#qty-"+id).val();
        const harga = $("#harga-"+id).val();

        const total = qty * harga;

        $("#total_harga-"+id).val(total);
    }
</script>