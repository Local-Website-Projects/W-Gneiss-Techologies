<?php
session_start();
include('admin/include/dbConfig.php');
$db_handle = new DBController();
if(isset($_GET['id'])){
    $fetch_blog_details = $db_handle->runQuery("select * from blog where blog_id = {$_GET['id']}");
}
else{
    echo "
    <script>
    window.location.href = 'Home';
</script>
    ";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Blank - Gneiss technology</title>
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
                        <h2 class="page-header__title">Blog Details</h2>
                        <ul class="tolak-breadcrumb list-unstyled">
                            <li><a href="Home">Home</a></li>
                            <li><span>Blog Details</span></li>
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
    </section>
    <!-- /.page-header -->

    <section class="blog-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="blog-details__content">
                        <div class="blog-details__image">
                            <img src="admin/<?php echo $fetch_blog_details[0]['file'];?>" alt="blog">
                        </div><!-- /.blog-details__image -->
                        <div class="blog-details__meta">
                            <div class="blog-details__meta__date">
                                <?php
                                $date = date_format(new DateTime($fetch_blog_details[0]['date']), 'd');
                                $month = date_format(new DateTime($fetch_blog_details[0]['date']), 'M');
                                $year = date_format(new DateTime($fetch_blog_details[0]['date']), 'Y');
                                ?>
                                <a href="Home">Gneiss Technology</a> / <?php echo $month .' '. $date .', '.$year;?>
                            </div>
                        </div><!-- /.list-unstyled blog-details__meta -->
                        <h3 class="blog-details__title">
                            <?php echo $fetch_blog_details[0]['title'];?>
                        </h3><!-- /.blog-details__title -->
                        <p class="blog-details__text">
                            <?php echo $fetch_blog_details[0]['description'];?>
                        </p><!-- /.blog-details__text -->
                    </div><!-- /.blog-details -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- /.blog-one blog-one--page -->

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