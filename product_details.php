<?php
session_start();
include('admin/include/dbConfig.php');
$db_handle = new DBController();
if(isset($_GET['id'])){
    $product = $db_handle->runQuery("select * from products where product_id = {$_GET['id']}");
}else {
    echo "
    <script>
    window.location.href= 'Home';
</script>
    ";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Product Details - Gneiss technology</title>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <?php include('include/css.php'); ?>
</head>

<body class="custom-cursor">

<?php include('include/preloader.php'); ?>
<!-- /.preloader -->
<div class="page-wrapper">
    <?php include('include/topbar.php'); ?>
    <!-- /.topbar-one -->

    <?php include('include/header.php'); ?>
    <!-- /.main-header -->
    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="page-header__shape"></div>
        <div class="page-header__shape-two"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="page-header__content">
                        <h2 class="page-header__title">Products Details</h2>
                        <ul class="tolak-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span>Products</span></li>
                        </ul><!-- /.thm-breadcrumb list-unstyled -->
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="page-header__layer wow fadeInUp" data-wow-delay="100ms">
                        <img src="assets/images/backgrounds/page-banner-layer.png" alt="tolak">
                        <div class="page-header__layer__shape"></div>
                        <div class="page-header__layer__bg wow fadeInRight" data-wow-delay="200ms"></div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="product-details">
        <div class="container">
            <!-- /.product-details -->
            <div class="row">
                <div class="col-lg-6 col-xl-6 wow fadeInLeft" data-wow-delay="200ms">
                    <div class="product-details__img">
                        <img src="admin/<?php echo $product[0]['main_image'];?>" alt="">
                        <div class="product-details__img-search">
                            <a class="img-popup" href="admin/<?php echo $product[0]['main_image'];?>"><span class="icon-magnifying-glass"></span></a>
                        </div><!-- /.product-image -->
                    </div>
                </div><!-- /.column -->
                <div class="col-lg-6 col-xl-6 wow fadeInRight" data-wow-delay="300ms">
                    <div class="product-details__content">
                        <div class="product-details__top">
                            <h3 class="product-details__title"><?php echo $product[0]['product_name'];?></h3><!-- /.product-title -->
                            <div class="product-details__price"><?php echo $product[0]['product_code'];?></div><!-- /.product-price -->
                        </div>
                        <div class="product-details__review">
                            <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                            <a href="product-details.html">2 Customer Reviews</a>
                        </div><!-- /.review-ratings -->
                        <div class="product-details__divider"></div><!-- /.divider -->
                        <div class="product-details__excerpt">
                            <p class="product-details__excerpt-text1">
                                <?php echo $product[0]['small_desc'];?>
                            </p>
                            <p class="product-details__excerpt-text2">Product Code: <?php echo $product[0]['product_code'];?> <br>Available in store</p>
                        </div><!-- /.excerp-text -->

                        <div class="product-details__buttons mt-5">
                            <a href="Order?product=<?php echo $product[0]['product_code'];?>" class="tolak-btn"><b>Order Now</b><span></span></a>
                            <!-- Button trigger modal -->
                        </div><!-- /.qty-btn -->
                    </div>
                </div>
            </div>
            <!-- /.product-details -->
            <!-- /.product-description -->
            <div class="product-details__description wow fadeInUp" data-wow-delay="300ms">
                <h3 class="product-details__description__title">Description</h3>
                <?php echo $product[0]['long_desc'];?>
            </div>
            <!-- /.product-description -->
            <!-- /.product-comment -->
            <div class="product-details__comment wow fadeInUp" data-wow-delay="400ms">
                <h3 class="product-details__review-title">Comments (2)</h3>
                <!--Start Comment Box-->
                <div class="product-details__comment-box">
                    <figure class="product-details__comment-box__thumb"><img src="assets/images/products/product-c-1-1.jpg" alt="tolak">
                    </figure><!-- comment-image -->
                    <h4 class="product-details__comment-box__meta">Kevin martin<span class="product-details__comment-box__date">20 June, 2023 . 4:00 pm</span></h4>
                    <!-- comment-meta -->
                    <div class="product-details__comment-box__ratings">
                        <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                    </div><!-- comment-ratings -->
                    <p class="product-details__comment-box__text">
                        It has survived not only five centuries, but also the leap into electronic typesetting unchanged. It
                        was popularised in the sheets containing lorem ipsum is simply free text. Class aptent taciti
                        sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum sollicitudin
                        varius mauris non dignissim.
                    </p><!-- comment-text -->
                </div>
                <!--End Comment Box-->
                <!--Start Comment Box-->
                <div class="product-details__comment-box">
                    <figure class="product-details__comment-box__thumb"><img src="assets/images/products/product-c-1-2.jpg" alt="tolak">
                    </figure><!-- comment-image -->
                    <h4 class="product-details__comment-box__meta">Sarah albert<span class="product-details__comment-box__date">20 June, 2023 . 4:00 pm</span></h4>
                    <!-- comment-meta -->
                    <div class="product-details__comment-box__ratings">
                        <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                    </div><!-- comment-ratings -->
                    <p class="product-details__comment-box__text">
                        It has survived not only five centuries, but also the leap into electronic typesetting unchanged. It
                        was popularised in the sheets containing lorem ipsum is simply free text. Class aptent taciti
                        sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum sollicitudin
                        varius mauris non dignissim.
                    </p><!-- comment-text -->
                </div>
                <!--End Comment Box-->
            </div>
            <!-- /.product-comment -->
            <!-- /.product-comment-form -->
            <div class="product-details__form wow fadeInUp" data-wow-delay="500ms">
                <h3 class="product-details__form-title">Add a review</h3>
                <div class="product-details__form-ratings">
                    <p class="product-details__form-ratings__label">Rate this product?</p>
                    <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                </div><!-- review-ratings -->
                <form class="comments-form__form contact-form-validated product-details__form__form form-one">
                    <div class="form-one__group">
                        <div class="form-one__control form-one__control--full">
                            <textarea name="message" placeholder="Write  a message"></textarea><!-- /# -->
                        </div><!-- /.form-one__control -->
                        <div class="form-one__control">
                            <input type="text" name="name" placeholder="Your name">
                        </div><!-- /.form-one__control -->
                        <div class="form-one__control">
                            <input type="email" name="email" placeholder="Email address">
                        </div><!-- /.form-one__control -->
                        <div class="form-one__control form-one__control--full">
                            <button type="submit" class="tolak-btn"><b>Submit Review</b><span></span></button>
                        </div><!-- /.form-one__control -->
                    </div><!-- /.form-one__group -->
                </form>
                <div class="result"></div>
            </div>
            <!-- /.product-comment-form -->
        </div>
    </section>
    <!-- Products End -->

    <?php include('include/footer.php'); ?>
    <!-- /.main-footer -->

</div><!-- /.page-wrapper -->


<?php include('include/mobile_nav.php');?>
<!-- /.mobile-nav__wrapper -->

<?php include('include/search_popup.php');?>
<!-- /.search-popup -->



<?php include('include/back_top.php');?>


<?php include('include/js.php');?>
</body>

</html>