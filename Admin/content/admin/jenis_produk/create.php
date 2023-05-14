<?php
require_once '../koneksi.php';
?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <form role="form" action="content/admin/jenis_produk/proses.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
        </div>
        <div class="box-footer">
            <button type="submit" name="proses" class="btn btn-primary" value="Simpan">Simpan</button>
        </div>
        </form>
    </div>
</div>
</div>