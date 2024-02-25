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
    <title>Interior Design - Gneiss technology</title>
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
                        <h2 class="page-header__title">Interior Design</h2>
                        <ul class="tolak-breadcrumb list-unstyled">
                            <li><a href="Home">Home</a></li>
                            <li><span>Interior Design</span></li>
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
                        <img src="assets/images/services/5.jpg" alt="tolak">
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
                    Welcome to Gneiss Technologies, where innovation meets aesthetics in the realm of Electronics-based
                    Interior Design. At the intersection of cutting-edge technology and sophisticated design, we
                    redefine interior spaces to seamlessly integrate electronics, creating intelligent and immersive
                    environments for both residential and commercial settings.
                </p>
                <p class="service-details__text">
                    At Gneiss Technologies, we understand that the modern world demands a harmonious blend of
                    functionality, style, and technology within our living and working spaces. Our passion lies in
                    transforming ordinary interiors into smart, responsive, and visually stunning environments that
                    cater to the diverse needs of our clients.
                </p>

                <p class="service-details__text">
                    Our team of skilled professionals at Gneiss Technologies is dedicated to pushing the boundaries of
                    conventional interior design by incorporating state-of-the-art electronics seamlessly into the
                    fabric of your spaces. Whether it's a home, office, retail outlet, or hospitality establishment, we
                    bring a unique fusion of creativity and technical expertise to each project.
                </p>
                <p class="service-details__text">
                    From intelligent lighting systems that adapt to your mood to integrated audiovisual solutions that
                    elevate your entertainment experience, we pride ourselves on delivering bespoke designs that enhance
                    the quality of life. Our commitment to excellence extends beyond aesthetics, as we prioritize
                    functionality and user experience to create spaces that are not just visually appealing but also
                    intuitively responsive.
                </p>
                <p class="service-details__text">
                    As a forward-thinking company, we stay abreast of the latest advancements in electronics and design,
                    ensuring that our clients benefit from the most cutting-edge solutions available in the market.
                    Gneiss Technologies is more than a design firm; it's a gateway to a future where your surroundings
                    actively contribute to your well-being and productivity.
                </p>
                <p class="service-details__text">
                    Join us on a journey where technology and design converge seamlessly at Gneiss Technologies, where
                    we redefine interior spaces to inspire and elevate every aspect of your daily life.
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