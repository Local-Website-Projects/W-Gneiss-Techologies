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
    <title>IoT Home Automation - Gneiss technology</title>
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
                        <h2 class="page-header__title">IoT Home Automation</h2>
                        <ul class="tolak-breadcrumb list-unstyled">
                            <li><a href="Home">Home</a></li>
                            <li><span>IoT Home Automation</span></li>
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
                <div class="col-md-12 col-xl-7">
                    <div class="service-details__thumbnail">
                        <img src="assets/images/services/7.jpg" alt="tolak">
                    </div><!-- /.service-details__thumbnail -->
                </div><!-- /.col-md-12 col-lg-8 -->
                <div class="col-md-12 col-xl-5">
                    <div class="service-details__sidebar">
                        <h3 class="service-details__sidebar__title">All Services:</h3><!-- /.service-sidebar__title -->
                        <ul class="list-unstyled service-details__sidebar__nav">
                            <li><a href="Electronic-Hardware-Design">Electronic Hardware Design</a></li>
                            <li><a href="Printed-Circuit-Board-Design">Printed Circuit Board Design</a></li>
                            <li><a href="PCB-Manufacturing-Assembly">PCB Manufacturing Assembly</a></li>
                            
                            <li><a href="Interior-Design">Interior Design</a></li>
                            <li><a href="Household-Decoration-Protection">Household Decoration Protection</a></li>
                            <li><a href="IoT-Home-Automation">IoT Home Automation</a></li>
                        </ul><!-- /.list-unstyled service-sidebar__nav -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-12 col-lg-4 -->
            </div><!-- /.row -->
            <div class="service-details__content">
                <p class="service-details__text">
                    Welcome to the future of smart living with Gneiss Technologies' cutting-edge IoT Home Automation
                    solutions. At Gneiss, we are committed to transforming your living spaces into intelligent,
                    connected environments that seamlessly adapt to your lifestyle.
                </p>
                <p class="service-details__text">
                    Our IoT Home Automation products are designed to enhance convenience, energy efficiency, and
                    security in your home. Imagine being able to control your lighting, thermostat, and security systems
                    effortlessly from the palm of your hand. Gneiss Technologies makes this a reality by crafting
                    innovative electronics products and circuit modules that cater to the unique needs of our customers.
                </p>

                <p class="service-details__text">
                    What sets Gneiss apart is our dedication to customer satisfaction. We specialize in customizable PCB
                    design, assembly, and manufacturing, ensuring that every product we create aligns perfectly with
                    your requirements. Whether you're a homeowner looking to integrate smart devices into your living
                    space or a business seeking tailored IoT solutions, Gneiss Technologies is your reliable partner.
                </p>
                <p class="service-details__text">
                    Our expert team at Gneiss Tech is not just about delivering products; we are committed to providing
                    unparalleled technical support. We understand that the world of IoT can be complex, and that's why
                    our team is here to guide you every step of the way. From concept to implementation, Gneiss
                    Technologies ensures a seamless and user-friendly experience for all our customers.
                </p>
                <p class="service-details__text">
                    Experience the future of smart living with Gneiss Technologies - where innovation meets
                    customization, and your satisfaction is our priority. Join us on this journey towards a smarter,
                    more connected world, tailored to meet your unique needs. Welcome to Gneiss Technologies – Your
                    Gateway to Intelligent Living.
                </p>
            </div>
        </div><!-- /.container -->
    </section><!-- /.service-details -->

    <?php include ('include/funfact.php');?>
    <!-- /.funfact-two -->

    <?php include('include/footer.php'); ?>
    <!-- /.main-footer -->

</div><!-- /.page-wrapper -->


<?php include('include/mobile_nav.php'); ?>
<!-- /.mobile-nav__wrapper -->

<?php include('include/search_popup.php'); ?>
<!-- /.search-popup -->


<?php include('include/back_top.php'); ?>


<?php include('include/js.php'); ?>
</body>

</html>