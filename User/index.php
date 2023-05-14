<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from tunatheme.com/tf/html/fiama-preview/fiama/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 May 2023 13:25:27 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fiama - Flower Shop eCommerce HTML Template</title>
    <?php require_once('layouts/_partials/css.php'); ?>
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <!-- Body main wrapper start -->


    <!-- HEADER AREA START (header-3) -->
    <?php include_once('layouts/header.php'); ?>
    <!-- HEADER AREA END -->
    <div class="body-wrapper">
        <!-- Utilize Cart Menu Start -->

        <!-- Utilize Mobile Menu End -->

        <div class="ltn__utilize-overlay"></div>

        <!-- SLIDER AREA START (slider-6) -->
        <?php
       
        include_once('content/user/dashboard/index.php');
      
        ?>
        <!-- SLIDER AREA END -->

        <!-- FEATURE AREA START ( Feature - 3) -->

        <!-- FEATURE AREA END -->

        <!-- BANNER AREA START -->

        <!-- BANNER AREA END -->

        <!-- PRODUCT AREA START -->
        <div class="ltn__product-area ltn__product-gutter  pt-65 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area text-center">
                            <h1 class="section-title section-title-border">new arrival items</h1>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <!-- ltn__product-item -->
                    
                    <?php  include_once('content/user/produk/index.php'); ?>

                </div>
            </div>
        </div>
        <!-- PRODUCT SLIDER AREA END -->

        <!-- BANNER AREA START -->
     
        <!-- BRAND LOGO AREA END -->

        <!-- FOOTER AREA START -->
        <?php include_once('layouts/footer.php');  ?>
        <!-- FOOTER AREA END -->

        <?php  include_once('content/user/produk/produk.php'); ?>

        <!-- MODAL AREA START (Add To Cart Modal) -->
      <?php include_once('content/user/produk/create_pemesanan.php'); ?>
        
        <!-- MODAL AREA START (Wishlist Modal) -->
        <div class="ltn__modal-area ltn__add-to-cart-modal-area">
            <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
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
                                            <div class="modal-product-img">
                                                <img src="img/product/7.png" alt="#">
                                            </div>
                                            <div class="modal-product-info">
                                                <h5><a href="product-details.html">Brake Conversion Kit</a></h5>
                                                <p class="added-cart"><i class="fa fa-check-circle"></i> Successfully added to your Wishlist</p>
                                                <div class="btn-wrapper">
                                                    <a href="wishlist.html" class="theme-btn-1 btn btn-effect-1">View Wishlist</a>
                                                </div>
                                            </div>
                                            <!-- additional-info -->
                                            <div class="additional-info d-none">
                                                <p>We want to give you <b>10% discount</b> for your first order, <br> Use discount code at checkout</p>
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
        <!-- MODAL AREA END -->

    </div>
    <!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <?php require_once('layouts/_partials/js.php'); ?>
</body>

<!-- Mirrored from tunatheme.com/tf/html/fiama-preview/fiama/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 May 2023 13:25:49 GMT -->

</html>