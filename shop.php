<?php
session_start();
include('admin/include/dbConfig.php');
$db_handle = new DBController();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Shop - Gneiss technology</title>
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
                        <h2 class="page-header__title">Products</h2>
                        <ul class="tolak-breadcrumb list-unstyled">
                            <li><a href="Home">Home</a></li>
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

    <section class="product-one">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row gutter-y-30">
                        <?php
                        $fetch_product = $db_handle->runQuery("select * from products order by product_id desc");
                        $no_fetch_product = $db_handle->numRows("select * from products order by product_id desc");
                        for ($i=0; $i<$no_fetch_product; $i++){
                        ?>
                        <div class="col-md-6 col-lg-3">
                            <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                <div class="product__item__img">
                                    <img src="admin/<?php echo $fetch_product[$i]['main_image'];?>" alt="tolak">
                                    <div class="product__item__btn">
                                        <a href="Product-Details?id=<?php echo $fetch_product[$i]['product_id'];?>"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div><!-- /.product-image -->
                                <div class="product__item__content">
                                    <div class="product__item__ratings">
                                        <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                    </div><!-- /.product-ratings -->
                                    <h4 class="product__item__title"><a href="Product-Details?id=<?php echo $fetch_product[$i]['product_id'];?>"><?php echo $fetch_product[$i]['product_name']?></a></h4><!-- /.product-title -->
                                    <div class="product__item__price"><?php echo $fetch_product[$i]['product_code'];?></div><!-- /.product-price -->
                                    <a href="Product-Details?id=<?php echo $fetch_product[$i]['product_id'];?>" class="tolak-btn product__item__link"><b>Details</b><span></span></a>
                                </div><!-- /.product-content -->
                            </div><!-- /.product-item -->
                        </div><!-- /.col-md-6 col-lg-4 -->
                            <?php
                        }
                        ?>
                    </div><!-- /.row -->
                </div><!-- /.col-lg-9 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.product-one product-one--page -->


    <?php include('include/footer.php'); ?>
    <!-- /.main-footer -->

</div><!-- /.page-wrapper -->


<?php include ('include/mobile_nav.php');?>
<!-- /.mobile-nav__wrapper -->

<?php include ('include/search_popup.php');?>
<!-- /.search-popup -->



<?php include ('include/back_top.php');?>


<?php include ('include/js.php');?>
</body>

</html>