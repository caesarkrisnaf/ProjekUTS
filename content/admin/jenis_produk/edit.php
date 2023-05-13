<?php
require_once 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM jenis_produk WHERE id = ?";
$r = $dbh->prepare($sql);
$r->execute(array($id));
$hasil = $r->fetch();
?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <form role="form" action="content/admin/jenis_produk/proses.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $hasil['id']; ?>">
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $hasil['nama']; ?>">
                </div>
        </div>
        <div class="box-footer">
            <button type="submit" name="proses" class="btn btn-primary" value="Update">Update</button>
        </div>
        </form>
    </div>
</div>
</div>