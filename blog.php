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
                        <h2 class="page-header__title">Our Blogs</h2>
                        <ul class="tolak-breadcrumb list-unstyled">
                            <li><a href="Home">Home</a></li>
                            <li><span>Blogs</span></li>
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

    <section class="blog-three">
        <div class="container">
            <div class="row gutter-y-30">
                <?php
                $fetch_blog = $db_handle->runQuery("select * from blog order by blog_id desc limit 8");
                $no_fetch_blog = $db_handle->numRows("select * from blog order by blog_id desc limit 8");
                for ($i = 0; $i < $no_fetch_blog; $i++) {
                    ?>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                        <div class="blog-card-three__image">
                            <img src="admin/<?php echo $fetch_blog[$i]['file'];?>" alt="Blog">
                            <img src="admin/<?php echo $fetch_blog[$i]['file'];?>" alt="Blog">
                            <div class="blog-card-three__date">
                                <?php
                                $date = date_format(new DateTime($fetch_blog[$i]['date']), 'd');
                                $month = date_format(new DateTime($fetch_blog[$i]['date']), 'M');
                                $year = date_format(new DateTime($fetch_blog[$i]['date']), 'Y');
                                ?>
                                <span><?php echo $date;?></span>
                                <?php echo $month;?>
                                <div class="blog-card-three__date__year"><?php echo $year;?></div>
                            </div><!-- /.blog-card-three__date -->
                            <a href="Details" class="blog-card-three__image__link"><i class="icon-right-arrow"></i><span class="sr-only"><?php echo $fetch_blog[$i]['title'];?></span>
                                <!-- /.sr-only --></a>
                        </div><!-- /.blog-card-three__image -->
                        <div class="blog-card-three__content">
                            <h3 class="blog-card-three__title"><a href="Details?id=<?php echo $fetch_blog[$i]['blog_id'];?>"><?php echo $fetch_blog[$i]['title'];?></a></h3><!-- /.blog-card-three__title -->
                            <p class="blog-card-three__text"><?php echo substr($fetch_blog[$i]['description'],0, 100);?></p><!-- /.blog-card-three__text -->
                            <div class="blog-card-three__meta">
                                <div class="blog-card-three__meta__author">
                                    Admin:<a href="Home">Gneiss Technology</a>
                                </div>
                            </div>
                        </div><!-- /.blog-card-three__content -->
                    </div><!-- /.blog-card-three -->
                </div><!-- /.col-md-6 col-lg-4 -->
                    <?php
                }
                ?>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- /.blog-page -->

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