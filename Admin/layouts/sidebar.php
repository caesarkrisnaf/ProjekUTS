<?php
$menus = [
    'Dashboard' => 'index.php',
    'Produk' => 'index.php?page/admin=produk',
    'Jenis Produk' => 'index.php?page/admin=jenis_produk',
    'Pemesan' => 'index.php?page/admin=pemesan',
    'Logout' => 'logout.php'

];

$icons = [
    'Dashboard' => 'fa-tachometer-alt',
    'Pelanggan' => 'fa-list-alt',
    'Produk' => 'fa-list-alt',
    'Jenis Produk' => 'fa-list-alt',
    'Pemesan' => 'fa-list-alt',
    'Logout' => 'fa-user'
];

?>

<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Caesar Krisna</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <ul class="sidebar-menu">
            <?php foreach ($menus as $title => $link) : ?>
                <li class="active treeview">
                    <a href="<?= $link ?>">
                        <i class="fa fa- <?= $icons[$title]; ?>"></i>
                        <span><?= $title ?></span>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </section>
</aside>