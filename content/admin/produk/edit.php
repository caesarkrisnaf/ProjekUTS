<?php
require_once 'koneksi.php';



$id = $_GET['id'];
$sql = "SELECT p.id, p.kode,p.nama,p.harga,p.stok,j.id as jenis_produk,p.foto 
FROM produk p left join jenis_produk j ON j.id = p.jenis_produk_id WHERE p.id = ?";

$r = $dbh->prepare($sql);
$r->execute(array($id));
$hasil = $r->fetch();

?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <form role="form" action="content/admin/produk/proses.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $hasil['id']; ?>">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode</label>
                        <input type="text" name="kode" class="form-control" value="<?php echo $hasil['kode']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $hasil['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Harga</label>
                        <input type="text" name="harga" class="form-control" value="<?php echo $hasil['harga']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Stok</label>
                        <input type="text" name="stok" class="form-control" value="<?php echo $hasil['stok']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Jenis Produk </label>
                        <?php
                        $sqljenis = "SELECT * FROM jenis_produk";
                        $rsjenis = $dbh->query($sqljenis);

                        ?>
                        <select id="jenis" name="jenis" class="form-control">
                            <?php foreach ($rsjenis as $rowjenis) { ?>
                                <option value="<?php echo $rowjenis['id'] ?>" <?= $hasil['jenis_produk'] == $rowjenis['id'] ? 'selected' : '' ?>> <?php echo $rowjenis['nama'] ?>
                                    <?php ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Gambar Produk</label>
                        <input type="file" name="foto">
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" name="proses" class="btn btn-primary" value="Update">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>