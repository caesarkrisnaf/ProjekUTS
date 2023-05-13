<?php
require_once 'koneksi.php';
?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <form role="form" action="content/admin/produk/proses.php" method="POST" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode</label>
                        <input type="text" name="kode" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jenis Produk</label>
                        <?php
                        $sqljenis = "SELECT * FROM jenis_produk";
                        $rsjenis = $dbh->query($sqljenis);
                        ?>
                        <select class="form-control" name="jenis" id="jenis">
                            <?php
                            foreach ($rsjenis as $rowjenis) {
                            ?>
                                <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Gambar Produk</label>
                        <input type="file" name="foto">
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" name="proses" class="btn btn-primary" value="Simpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>