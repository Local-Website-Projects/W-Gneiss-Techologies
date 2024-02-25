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
                        <h2 class="page-header__title">Service Details</h2>
                        <ul class="tolak-breadcrumb list-unstyled">
                            <li><a href="Home">Home</a></li>
                            <li><span>Services Details</span></li>
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

    <section class="service-details">
        <div class="container">
            <div class="row gutter-y-30">
                <div class="col-md-12 col-xl-8">
                    <div class="service-details__thumbnail">
                        <img src="assets/images/resources/service-d-2.jpg" alt="tolak">
                    </div><!-- /.service-details__thumbnail -->
                </div><!-- /.col-md-12 col-lg-8 -->
                <div class="col-md-12 col-xl-4">
                    <div class="service-details__sidebar">
                        <h3 class="service-details__sidebar__title">All Services:</h3><!-- /.service-sidebar__title -->
                        <ul class="list-unstyled service-details__sidebar__nav">
                            <li><a href="Details_Services">Business of Growth</a></li>
                            <li><a href="Details_Services">Solution to Business</a></li>
                            <li><a href="Details_Services">Markting of Solution</a></li>
                            <li><a href="Details_Services">Technology Services</a></li>
                            <li><a href="Details_Services">Marketing Business</a></li>
                            <li><a href="Details_Services">Support of Business</a></li>
                        </ul><!-- /.list-unstyled service-sidebar__nav -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-12 col-lg-4 -->
            </div><!-- /.row -->
            <div class="service-details__content">
                <p class="service-details__text">
                    will reenergize your ome and enhance your life. From everyday housekeeping to routine cleanings, our professional this to It uses a dictionary of 2200 Latin
                    d with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonableis therefore always free from repetition, injected humour,
                    anything embarrassing hidden in the middle of text. reenergize your ome and enhance your life. From everyday housekeeping to routine cleanings, our
                    uses a dictionary of 2200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                </p>
                <p class="service-details__text">
                    will reenergize your ome and enhance your life. From everyday housekeeping to routine cleanings, our professional this to It uses a dictionary of 2200 Latin
                    d with a handful of model sentence structures,
                </p>
                <div class="row gutter-y-30">
                    <div class="col-lg-6">
                        <p class="service-details__text">
                            Business tailored it design, management & support services business tab for business agency elit, sed do eiusmod tempor.
                        </p>
                        <div class="row gutter-y-30">
                            <div class="col-md-6">
                                <div class="service-details__skill">
                                    <div class="progress-box">
                                        <div class="graph-outer">
                                            <input type="text" class="dial" data-fgColor="#3d72fc" data-bgColor="#c8c8c8" data-width="60" data-height="60" data-linecap="normal" value="45">
                                            <div class="inner-text count-box">
                                                <span class="count-text" data-stop="45" data-speed="2000"></span><span class="count-Parsent">%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="service-details__skill__title">Solution Business</h5>
                                    <p class="service-details__skill__text">Level is high</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-details__skill">
                                    <div class="progress-box">
                                        <div class="graph-outer">
                                            <input type="text" class="dial" data-fgColor="#3d72fc" data-bgColor="#c8c8c8" data-width="60" data-height="60" data-linecap="normal" value="36">
                                            <div class="inner-text count-box">
                                                <span class="count-text" data-stop="36" data-speed="2000"></span><span class="count-Parsent">%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="service-details__skill__title">Maketing Team</h5>
                                    <p class="service-details__skill__text">Level is high</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled service-details__list">
                                    <li><i class="fas fa-check-circle"></i>We provide a revolutionary</li>
                                    <li><i class="fas fa-check-circle"></i>This man for it solution.</li>
                                </ul><!-- /.list-unstyled team-details__list -->
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled service-details__list">
                                    <li><i class="fas fa-check-circle"></i>We provide a revolutionary</li>
                                    <li><i class="fas fa-check-circle"></i>This man for it solution.</li>
                                </ul><!-- /.list-unstyled team-details__list -->
                            </div>
                        </div>
                        <p class="service-details__text">
                            <span>Solution:</span> tailored it design, management & support services business tab for business agency elit, sed do eiusmod tempor.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-details__content__image">
                            <img src="assets/images/resources/service-d-content.jpg" alt="tolak">
                        </div>
                    </div>
                </div>
                <p class="service-details__text service-details__text--last">
                    will reenergize your ome and enhance your life. From everyday housekeeping to routine cleanings, our professional this to It uses a dictionary of 2200 Latin
                    d with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonableis therefore always free from repetition, injected humour,
                    anything embarrassing hidden in the middle of text. reenergize your ome and enhance your life. From everyday housekeeping to routine cleanings, our
                    uses a dictionary of 2200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                </p>
            </div>
        </div><!-- /.container -->
    </section><!-- /.service-details -->

    <section class="funfact-two funfact-two--service-details">
        <div class="container">
            <ul class="list-unstyled funfact-two__list">
                <li class="funfact-two__item count-box">
                    <div class="funfact-two__icon"><i class="icon-briefing"></i></div><!-- /.funfact-two__icon -->
                    <div class="funfact-two__content">
                        <h3 class="funfact-two__count"><span class="count-text" data-stop="426" data-speed="1500"></span> k+</h3>
                        <!-- /.funfact-two__count -->
                        <p class="funfact-two__text">Completed Project</p><!-- /.funfact-two__text -->
                    </div><!-- /.funfact-two__content -->
                </li><!-- /.funfact-two__item -->
                <li class="funfact-two__item count-box">
                    <div class="funfact-two__icon"><i class="icon-ancestors"></i></div><!-- /.funfact-two__icon -->
                    <div class="funfact-two__content">
                        <h3 class="funfact-two__count"><span class="count-text" data-stop="1425" data-speed="1500"></span> +</h3>
                        <!-- /.funfact-two__count -->
                        <p class="funfact-two__text">Happy Clients</p><!-- /.funfact-two__text -->
                    </div><!-- /.funfact-two__content -->
                </li><!-- /.funfact-two__item -->
                <li class="funfact-two__item count-box">
                    <div class="funfact-two__icon"><i class="icon-admin"></i></div><!-- /.funfact-two__icon -->
                    <div class="funfact-two__content">
                        <h3 class="funfact-two__count"><span class="count-text" data-stop="750" data-speed="1500"></span> +</h3>
                        <!-- /.funfact-two__count -->
                        <p class="funfact-two__text">Business Partners</p><!-- /.funfact-two__text -->
                    </div><!-- /.funfact-two__content -->
                </li><!-- /.funfact-two__item -->
                <li class="funfact-two__item count-box">
                    <div class="funfact-two__icon"><i class="icon-trophy"></i></div><!-- /.funfact-two__icon -->
                    <div class="funfact-two__content">
                        <h3 class="funfact-two__count"><span class="count-text" data-stop="884" data-speed="1500"></span> k+</h3>
                        <!-- /.funfact-two__count -->
                        <p class="funfact-two__text">Award Win</p><!-- /.funfact-two__text -->
                    </div><!-- /.funfact-two__content -->
                </li><!-- /.funfact-two__item -->
            </ul><!-- /.list-unstyled funfact-two__list -->
        </div><!-- /.container -->
    </section><!-- /.funfact-two -->

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