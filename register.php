<?php
session_start();
if(isset($_SESSION['user'])){
    echo "
    <script>
    window.location.href = 'Home';
</script>
    ";
}
include('admin/include/dbConfig.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");
if (isset($_POST['register'])){
    $inserted_at = date("Y-m-d H:i:s");
    $full_name = $db_handle->checkValue($_POST['full_name']);
    $contact_number = $db_handle->checkValue($_POST['contact_number']);
    $address = $db_handle->checkValue($_POST['address']);
    $email = $db_handle->checkValue($_POST['email']);
    $password = $db_handle->checkValue($_POST['password']);
    $keyword = 'GneissTechnology';
    $method = 'aes-256-cbc';
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));

    $encrypted = openssl_encrypt($password, $method, $keyword, 0, $iv);
    $ivHex = bin2hex($iv);

    $checkEmail = $db_handle->numRows("select * from users where email = '$email'");
    if($checkEmail == 0){
        $register = $db_handle->insertQuery("INSERT INTO `users`(`full_name`, `contact_number`, `address`, `email`, `password`, `pass_key`, `inserted_at`) VALUES ('$full_name','$contact_number','$address','$email','$encrypted','$ivHex','$inserted_at')");
        if($register){
            echo "
        <script>
        alert('Your Account is Successfully Created!');
        window.location.href = 'Login';
</script>
        ";
        } else {
            echo "
        <script>
        alert('Something Went Wrong!');
        window.location.href = 'Register';
</script>
        ";
        }
    } else {
        echo "
        <script>
        alert('This email is already registered with us!');
        window.location.href = 'Register';
</script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration || Gneiss Technologies</title>
    <!-- favicons Icons -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Tolak is a modern HTML Template for Business, It Solution, Corporate, Agency, Portfolio shops. The template perfectly fits Beauty Spa, Salon, and Wellness Treatments websites and businesses." />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/icofont/icofont.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.css" />
    <link rel="stylesheet" href="assets/vendors/tolak-icons/style.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.min.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/tolak.css" />
</head>

<body class="custom-cursor">

<?php include ('include/preloader.php');?>
<!-- /.preloader -->
<div class="page-wrapper">

    <?php include('include/topbar.php'); ?>
    <!-- /.topbar-one -->

    <?php include ('include/header.php');?>
    <!-- /.main-header-inner -->

    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="page-header__shape"></div>
        <div class="page-header__shape-two"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="page-header__content">
                        <h2 class="page-header__title">Register</h2>
                        <ul class="tolak-breadcrumb list-unstyled">
                            <li><a href="Home">Home</a></li>
                            <li><span>Register</span></li>
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
    <!-- Login Start -->
    <section class="login-page">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-lg-8 wow fadeInUp animated" data-wow-delay="300ms">
                    <div class="login-page__wrap">
                        <h3 class="login-page__wrap__title">Register</h3>
                        <form class="login-page__form" method="post" action="#">
                            <div class="login-page__form-input-box">
                                <input type="text" placeholder="Full Name *" name="full_name" required>
                            </div>
                            <div class="login-page__form-input-box">
                                <input type="text" placeholder="Contact Number *" name="contact_number" required>
                            </div>
                            <div class="login-page__form-input-box">
                                <input type="text" placeholder="Address *" name="address" required>
                            </div>
                            <div class="login-page__form-input-box">
                                <input type="email" placeholder="Email *" name="email" required>
                            </div>
                            <div class="login-page__form-input-box">
                                <input type="password" placeholder="Password *" name="password" required>
                            </div>
                            <div class="login-page__form-btn-box">
                                <button type="submit" class="tolak-btn tolak-btn--base" name="register">
                                    <b>Register</b><span></span>
                                </button>
                                <div class="login-page__form-forgot-password">
                                    <a href="Login">Already Have an Account?</a>
                                </div>
                            </div>
                        </form>
                    </div><!-- login-form -->
                </div>
            </div>
        </div>
    </section>
    <!-- Login End -->

    <?php include ('include/footer.php');?>
    <!-- /.main-footer-three -->

</div><!-- /.page-wrapper -->



<?php include ('include/mobile_nav.php');?>
<!-- /.mobile-nav__wrapper -->

<?php include ('include/search_popup.php');?>
<!-- /.search-popup -->



<?php include ('include/back_top.php');?>


<script src="assets/vendors/jquery/jquery-3.7.0.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/jarallax/jarallax.min.js"></script>
<script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="assets/vendors/nouislider/nouislider.min.js"></script>
<script src="assets/vendors/tiny-slider/tiny-slider.js"></script>
<script src="assets/vendors/wnumb/wNumb.min.js"></script>
<script src="assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
<script src="assets/vendors/wow/wow.js"></script>
<script src="assets/vendors/tilt/tilt.jquery.js"></script>
<script src="assets/vendors/simpleParallax/simpleParallax.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.min.js"></script>
<script src="assets/vendors/isotope/isotope.js"></script>
<script src="assets/vendors/countdown/countdown.min.js"></script>
<script src="assets/vendors/jquery-circleType/jquery.circleType.js"></script>
<script src="assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
<script src="assets/vendors/progress-bar/knob.js"></script>
<!-- template js -->
<script src="assets/js/tolak.js"></script>
</body>


<!-- Mirrored from bracketweb.com/tolak-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 09:08:02 GMT -->
</html>