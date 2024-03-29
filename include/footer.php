<?php
date_default_timezone_set("Asia/Dhaka");
$inserted_at = date("Y-m-d H:i:s");
if(isset($_POST['newslatter'])){
    $email = $db_handle->checkValue($_POST['email']);
    $insert = $db_handle->insertQuery("INSERT INTO `newsletter`(`email`, `inserted_at`) VALUES ('$email','$inserted_at')");
    if($insert){
        echo "<script>
alert('Thank you! From now you will receive all updates from us.');
</script>";
    }
}
?>

<section class="mail-section mt-5">
    <div class="container">
        <div class="mail-section__wrapper">
            <div class="row">
                <div class="col-md-12 col-lg-4"></div>
                <div class="col-md-5 col-lg-3">
                    <div class="mail-section__content">
                        <h3 class="mail-section__content__title">Our Newsletter</h3>
                        <p class="mail-section__content__text">We are dolor sit amet csectetur</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-5">
                    <form action="#" class="mail-section__newsletter" method="post">
                        <input type="text" name="email" placeholder="Enter your email" required>
                        <button type="submit" name="newslatter" class="tolak-btn">
                            <b>Subscribe</b><span></span>
                            <span class="sr-only">Subscribe</span><!-- /.sr-only -->
                        </button>
                    </form><!-- /.footer-widget__newsletter mc-form -->
                    <div class="mc-form__response"></div><!-- /.mc-form__response -->
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="main-footer background-black">
    <div class="main-footer__bg background-black"
         style="background-image: url(assets/images/backgrounds/footer-bg-1-1.jpg);"></div>
    <!-- /.main-footer__bg -->
    <div class="main-footer__shape" style="background-image: url(assets/images/shapes/footer-shape-1.png);"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="footer-widget footer-widget--about">
                    <a href="Home" class="footer-widget__logo">
                        <img src="assets/images/logo-light.png" width="184" alt="Tolak HTML Template">
                    </a>
                    <ul class="footer-widget__info">
                        <li><span class="icofont-clock-time"></span>Open Hours:<br> Sat - Thus: 9.00
                            am. - 6.00 pm.
                        </li>
                        <li><span class="icofont-location-pin"></span>500/1 Mohammadnogor, Gollamary, Khulna</li>
                        <li><span class="icofont-phone"></span><a href="tel:01521411273">+8801521411273</a></li>
                        <li><span class="icofont-phone"></span><a href="tel:01705581992">+8801705581992</a></li>
                    </ul>
                    <div class="footer-widget__social">
                        <a href="https://www.facebook.com/profile.php?id=61557041577283">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            <span class="sr-only">Facebook</span>
                        </a>
                        <a href="https://www.linkedin.com/in/gneiss-technologies-a8a5ab2b8/">
                            <i class="fab fa-linkedin" aria-hidden="true"></i>
                            <span class="sr-only">Linkedin</span>
                        </a>
                        <a href="https://www.instagram.com/gneiss_technologies/">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                            <span class="sr-only">Instagram</span>
                        </a>
                    </div>
                    <div class="footer-widget__image">
                        <img src="assets/images/resources/footer-about.jpg" alt="tolak">
                    </div>
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-6 -->
            <div class="col-lg-3 col-6">
                <div class="footer-widget footer-widget--links">
                    <h2 class="footer-widget__title">Categories</h2><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__links">
                        <li><a href="#">Why choose us</a></li>
                        <li><a href="#">Our Service</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Core values</a></li>
                        <li><a href="#">Our projects</a></li>
                    </ul><!-- /.list-unstyled footer-widget__links -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-6 -->
            <div class="col-lg-3 col-6">
                <div class="footer-widget footer-widget--links footer-widget--last">
                    <h2 class="footer-widget__title">Quick Link</h2><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__links">
                        <li><a href="Home">Home</a></li>
                        <li><a href="About">About</a></li>
                        <li><a href="Blog">Blog</a></li>
                        <li><a href="Contact">Contact</a></li>
                    </ul><!-- /.list-unstyled footer-widget__links -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="main-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="main-footer__copyright">
                        &copy; Copyright <span class="dynamic-year"></span> by Gneiss | Developed with <a href="https://frogbid.com/" target="_blank">FrogBid.</a>
                    </p>
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled main-footer__bottom__list">
                        <li><a href="Shop">Shop</a></li>
                        <li><a href="Courses">Courses</a></li>
                        <li><a href="Services">Services</a></li>
                    </ul><!-- /.list-unstyled -->
                </div>
            </div><!-- /.main-footer__inner -->
        </div><!-- /.container -->
    </div><!-- /.main-footer__bottom -->
</footer>