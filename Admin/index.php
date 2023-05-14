<?php
session_start();

if (!isset($_SESSION['is_login'])) {
  header("Location:login.php");
} 
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Toys Justice</title>
  <?php require_once('layouts/_partials/css.php'); ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php require_once('layouts/navbar.php'); ?>
    <?php require_once('layouts/sidebar.php'); ?>

    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <section class="content">
        <?php
        if (isset($_GET['page/admin'])) {
          if ($_GET['page/admin'] == "produk") {
            include_once('content/admin/produk/index.php');
          } else if ($_GET['page/admin'] == "create_produk") {
            include_once('content/admin/produk/create.php');
          } else if ($_GET['page/admin'] == "edit_produk") {
            include_once('content/admin/produk/edit.php');
          } else if ($_GET['page/admin'] == "detail_produk") {
            include_once('content/admin/produk/detail.php');
            //jenis_produk 
          } else if ($_GET['page/admin'] == "jenis_produk") {
            include_once('content/admin/jenis_produk/index.php');
          } else if ($_GET['page/admin'] == "create_jenis_produk") {
            include_once('content/admin/jenis_produk/create.php');
          } else if ($_GET['page/admin'] == "edit_jenis_produk") {
            include_once('content/admin/jenis_produk/edit.php');
            //pemesan
          } else if ($_GET['page/admin'] == "pemesan"){
              include_once('content/admin/pemesan/index.php');            
          } else if($_GET['page/admin'] == "detail_pemesan") {
            include_once('content/admin/pemesan/detail.php');
          }
          
        } else {
          include_once('content/admin/dashboard/index.php');
        }
        ?>
      </section>

    </div>
    <?php require_once('layouts/footer.php'); ?>
    <div class="control-sidebar-bg"></div>
  </div>
</body>
<?php require_once('layouts/_partials/js.php') ?>

</html>