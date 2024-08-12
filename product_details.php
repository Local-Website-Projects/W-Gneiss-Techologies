<?php
session_start();
include('admin/include/dbConfig.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");
if(isset($_GET['id'])){
    $product = $db_handle->runQuery("select * from products where product_id = {$_GET['id']}");
}else {
    echo "
    <script>
    window.location.href= 'Home';
</script>
    ";
}

if(isset($_POST['review'])){
    $message = $db_handle->checkValue($_POST['message']);
    $rating = $db_handle->checkValue($_POST['rating']);
    $inserted_at = date("Y-m-d H:i:s");
    $review = $db_handle->insertQuery("INSERT INTO `product_review`(`user_id`, `message`, `rating`, `inserted_at`,`product_code`) VALUES ('{$_SESSION['user']}','$message','$rating','$inserted_at','{$_GET['id']}')");
    if($review){
        echo "
        <script>
        alert('Thanks! Your comment always inspire us.');
</script>
        ";
    } else {
        echo "
        <script>
        alert('Sorry! Something went wrong.');
</script>
        ";
    }
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
                            <?php
                            $avg_rating = $db_handle->runQuery("select SUM(rating) as rating from product_review where product_code={$_GET['id']}");
                            $no_rating = $db_handle->numRows("select * from product_review where product_code = {$_GET['id']}");
                            if($no_rating > 0){
                                $total_rating = $avg_rating[0]['rating'];
                                $newRating = round($total_rating / $no_rating);
                            } else {
                                $newRating = 0;
                            }
                            for($p=0; $p<$newRating; $p++){
                                ?>
                                <span class="fa fa-star"></span>
                                <?php
                            }
                            $rmn = 5 - $newRating;
                            for ($q=0; $q < $rmn; $q++){
                                ?>
                                <i class="far fa-star"></i>
                                <?php
                            }
                            ?>
                            <?php
                            $number_comment = $db_handle->runQuery("SELECT COUNT(id) as no FROM product_review WHERE product_code = '{$_GET['id']}'");
                            ?>
                            <a href="#"><?php echo $number_comment[0]['no'];?> Customer Reviews</a>
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
                <h3 class="product-details__review-title">Comments (<?php echo $number_comment[0]['no'];?>)</h3>
                <?php
                $fetch_review = $db_handle->runQuery("select * from users, product_review where users.user_id = product_review.user_id and product_review.product_code={$_GET['id']} order by product_review.id desc");
                $no_fetch_review = $db_handle->numRows("select * from users, product_review where users.user_id = product_review.user_id and product_review.product_code={$_GET['id']} order by product_review.id desc");
                for ($i=0; $i<$no_fetch_review; $i++){
                    ?>
                    <!--Start Comment Box-->
                    <div class="product-details__comment-box">
                        <h4 class="product-details__comment-box__meta"><?php echo $fetch_review[$i]['full_name'];?><span class="product-details__comment-box__date">
                                <?php
                                echo date_format(new DateTime($fetch_review[$i]['inserted_at']), 'd M, Y');
                                ?>
                            </span></h4>
                        <!-- comment-meta -->
                        <div class="product-details__comment-box__ratings">
                            <?php
                            $rating = $fetch_review[$i]['rating'];
                            for ($r=1; $r<=$rating; $r++){
                                ?>
                                <span class="fa fa-star"></span>
                                <?php
                            }
                            $remain = 5 - $rating;
                            for ($x=0; $x<$remain; $x++){
                                ?>
                                <i class="far fa-star"></i>
                                <?php
                            }
                            ?>
                        </div><!-- comment-ratings -->
                        <p class="product-details__comment-box__text">
                            <?php
                            echo $fetch_review[$i]['message'];
                            ?>
                        </p><!-- comment-text -->
                    </div>
                    <!--End Comment Box-->
                    <?php
                }
                ?>
            </div>
            <!-- /.product-comment -->

            <?php
            if(isset($_SESSION['user'])){
                ?>
                <!-- /.product-comment-form -->
                <div class="product-details__form wow fadeInUp" data-wow-delay="500ms">
                    <h3 class="product-details__form-title">Add a review</h3>
                    <div class="product-details__form-ratings">
                        <p class="product-details__form-ratings__label">Rate this product?</p>
                    </div><!-- review-ratings -->
                    <form class="comments-form__form product-details__form__form form-one" action="#" method="post">
                        <div class="form-one__group">
                            <div class="form-one__control form-one__control--full">
                                <textarea name="message" placeholder="Write your opinion about this product" required></textarea><!-- /# -->
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control form-one__control--full">
                                <input type="number" name="rating" placeholder="Rate This product out of 5">
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control form-one__control--full">
                                <button type="submit" class="tolak-btn" name="review"><b>Submit Review</b><span></span></button>
                            </div><!-- /.form-one__control -->
                        </div><!-- /.form-one__group -->
                    </form>
                    <div class="result"></div>
                </div>
                <!-- /.product-comment-form -->
                <?php
            }
            ?>
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