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
    <title>Home - Gneiss technology</title>
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
    <!-- main-slider-start -->
    <section class="main-slider-one">
        <div class="main-slider-one__carousel tolak-owl__carousel owl-carousel" data-owl-options='{
		"loop": true,
		"animateOut": "fadeOut",
		"animateIn": "fadeIn",
		"items": 1,
		"autoplay": true,
		"autoplayTimeout": 7000,
		"smartSpeed": 1000,
		"nav": false,
        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
		"dots": true,
		"margin": 0
	    }'>
            <div class="item">
                <div class="main-slider-one__item">
                    <div class="main-slider-one__shape tolak-tilt"
                         data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                        <img src="assets/images/shapes/slider-1-shape-1.png" alt="tolak">
                    </div>
                    <div class="main-slider-one__bg"
                         style="background-image: url(assets/images/backgrounds/slider-1-1.jpg);"></div>
                    <svg class="main-slider-one__bg-svg" xmlns="http://www.w3.org/2000/svg">
                        <rect class='circle0 steap' x="5.2%" y="0" rx="0" ry="0" width="100%" height="100%"/>
                        <rect class='circle1 steap' x="15.6%" y="0" rx="0" ry="0" width="100%" height="100%"/>
                        <rect class='circle2 steap' x="26%" y="0" rx="0" ry="0" width="100%" height="100%"/>
                        <rect class='circle3 steap' x="36.4%" y="0" rx="0" ry="0" width="100%" height="100%"/>
                        <rect class='circle4 steap' x="46.8%" y="0" rx="0" ry="0" width="100%" height="100%"/>
                        <rect class='circle5 steap' x="57%" y="0" rx="0" ry="0" width="100%" height="100%"/>
                        <rect class='circle6 steap' x="67.7%" y="0" rx="0" ry="0" width="100%" height="100%"/>
                        <rect class='circle7 steap' x="78.1%" y="0" rx="0" ry="0" width="100%" height="100%"/>
                        <rect class='circle8 steap' x="88.5%" y="0" rx="0" ry="0" width="100%" height="100%"/>
                        <rect class='circle9 steap' x="100%" y="0" rx="0" ry="0" width="100%" height="100%"/>
                    </svg>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-slider-one__content">
                                    <h5 class="main-slider-one__sub-title">Wellcome To Gneiss Technology!</h5>
                                    <!-- slider-sub-title -->
                                    <h2 class="main-slider-one__title">Your Circuit Design Partner<br> for Next-Gen
                                        Soluti<span>o</span>ns
                                    </h2><!-- slider-title -->
                                    <div class="main-slider-one__text">
                                        <p class="main-slider-one__text__one">Building circuits with integrity and
                                            responsibility, <br>because technology shapes the world we live in.</p>
                                    </div><!-- slider-text -->
                                    <div class="main-slider-one__btn">
                                        <a href="Contact" class="tolak-btn tolak-btn--base"><b>Contact
                                                Now</b><span></span></a>
                                    </div><!-- slider-btn -->
                                    <div class="main-slider-one__floating-text">Gneiss</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="main-slider-one__item">
                    <div class="main-slider-one__shape tolak-tilt"
                         data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                        <img src="assets/images/shapes/slider-1-shape-1.png" alt="tolak">
                    </div>
                    <div class="main-slider-one__bg"
                         style="background-image: url(assets/images/backgrounds/slider-1-2.jpg);"></div>
                    <svg class="main-slider-one__bg-svg" xmlns="http://www.w3.org/2000/svg">
                        <rect class='circle0 steap' x="5.2%" y="0" rx="0" ry="0" width="100%" height="100%"/>
                        <rect class='circle1 steap' x="15.6%" y="0" rx="0" ry="0" width="100%" height="100%"/>
                        <rect class='circle2 steap' x="26%" y="0" rx="0" ry="0" width="100%" height="100%"/>
                        <rect class='circle3 steap' x="36.4%" y="0" rx="0" ry="0" width="100%" height="100%"/>
                        <rect class='circle4 steap' x="46.8%" y="0" rx="0" ry="0" width="100%" height="100%"/>
                        <rect class='circle5 steap' x="57%" y="0" rx="0" ry="0" width="100%" height="100%"/>
                        <rect class='circle6 steap' x="67.7%" y="0" rx="0" ry="0" width="100%" height="100%"/>
                        <rect class='circle7 steap' x="78.1%" y="0" rx="0" ry="0" width="100%" height="100%"/>
                        <rect class='circle8 steap' x="88.5%" y="0" rx="0" ry="0" width="100%" height="100%"/>
                        <rect class='circle9 steap' x="100%" y="0" rx="0" ry="0" width="100%" height="100%"/>
                    </svg>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-slider-one__content">
                                    <h5 class="main-slider-one__sub-title">Wellcome To Gneiss Technology!</h5>
                                    <!-- slider-sub-title -->
                                    <h2 class="main-slider-one__title">Engineering Connectivity,<br> Driving Innovation
                                        F<span>o</span>rward
                                    </h2><!-- slider-title -->
                                    <div class="main-slider-one__text">
                                        <p class="main-slider-one__text__one">Integrity in every connection, ethics in
                                            every innovation <br>- powering a brighter future.</p>
                                    </div><!-- slider-text -->
                                    <div class="main-slider-one__btn">
                                        <a href="Contact" class="tolak-btn tolak-btn--base"><b>Contact
                                                Now</b><span></span></a>
                                    </div><!-- slider-btn -->
                                    <div class="main-slider-one__floating-text">Gneiss</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-slider-one__social">
            <h5 class="main-slider-one__social__title">Follow Social:</h5>
            <a href="https://facebook.com/">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                <span class="sr-only">Facebook</span>
            </a>
            <a href="https://pinterest.com/">
                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                <span class="sr-only">Pinterest</span>
            </a>
            <a href="https://twitter.com/">
                <i class="fab fa-twitter" aria-hidden="true"></i>
                <span class="sr-only">Twitter</span>
            </a>
            <a href="https://instagram.com/">
                <i class="fab fa-instagram" aria-hidden="true"></i>
                <span class="sr-only">Instagram</span>
            </a>
        </div><!-- slider-social -->
        <div class="main-slider-one__project wow fadeInUp" data-wow-delay="200ms">
            <div class="main-slider-one__project__icon"><span class="icon-check-mark"></span></div>
            <h5 class="main-slider-one__project__number count-box"><span class="count-text" data-stop="128"
                                                                         data-speed="1500"></span>+</h5>
            <p class="main-slider-one__project__title">Complete Projects</p>
        </div><!-- slider-social -->
    </section>
    <!-- main-slider-end -->

    <!-- Feature Start -->
    <section class="feature-one">
        <div class="feature-one__bg"></div>
        <div class="container">
            <div class="sec-title text-center">
                <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span>Our Company Status<span
                            class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
                <h3 class="sec-title__title">The Success of our Solution</h3><!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="feature-one__carousel tolak-owl__carousel tolak-owl__carousel--with-shadow tolak-owl__carousel--basic-nav owl-carousel owl-theme"
                 data-owl-options='{
			"items": 4,
			"margin": 30,
			"loop": false,
			"smartSpeed": 700,
			"nav": false,
			"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
			"dots": true,
			"autoplay": false,
			"responsive": {
				"0": {
					"items": 1
				},
				"768": {
					"items": 3
				},
				"992": {
					"items": 3
				},
				"1200": {
					"items": 4
				}
			}
			}'>
                <div class="item">
                    <div class="feature-one__item text-center wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-one__item__top-ball"><img src="assets/images/shapes/feature-1-ball.png"
                                                                      alt="tolak"></div>
                        <div class="feature-one__item__icon">
                            <span class="icon-customer-service"></span>
                        </div>
                        <h4 class="feature-one__item__title">Service</h4>
                        <p class="feature-one__item__text">we are offer customizable solutions designed to meet your
                            specific requirements.</p>
                        <div class="feature-one__item__year">2020</div>
                        <div class="feature-one__item__bottom-ball"></div>
                    </div><!-- feature-item -->
                </div>
                <div class="item">
                    <div class="feature-one__item text-center wow fadeInUp" data-wow-delay="150ms">
                        <div class="feature-one__item__top-ball"><img src="assets/images/shapes/feature-1-ball.png"
                                                                      alt="tolak"></div>
                        <div class="feature-one__item__icon">
                            <span class="icon-shopping-cart"></span>
                        </div>
                        <h4 class="feature-one__item__title">Shop</h4>
                        <p class="feature-one__item__text">Explore our curated collection of premium. products to
                            elevate your everyday life. Shop now and redefine your lifestyle with us!</p>
                        <div class="feature-one__item__year">2021</div>
                        <div class="feature-one__item__bottom-ball"></div>
                    </div><!-- feature-item -->
                </div>
                <div class="item">
                    <div class="feature-one__item text-center wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-one__item__top-ball"><img src="assets/images/shapes/feature-1-ball.png"
                                                                      alt="tolak"></div>
                        <div class="feature-one__item__icon">
                            <span class="icon-check-mark"></span>
                        </div>
                        <h4 class="feature-one__item__title">Courses</h4>
                        <p class="feature-one__item__text">Empower Your Future with Cutting-Edge Electronics: Enroll in
                            Our Dynamic Course Today!</p>
                        <div class="feature-one__item__year">2022</div>
                        <div class="feature-one__item__bottom-ball"></div>
                    </div><!-- feature-item -->
                </div>
                <div class="item">
                    <div class="feature-one__item text-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-one__item__top-ball"><img src="assets/images/shapes/feature-1-ball.png"
                                                                      alt="tolak"></div>
                        <div class="feature-one__item__icon">
                            <span class="icon-advertisement"></span>
                        </div>
                        <h4 class="feature-one__item__title">Blog</h4>
                        <p class="feature-one__item__text">Unlock the doors to knowledge with our educational blog
                            section Explore a treasure trave of insights, tips, and resources curated to fuel your
                            learning journey</p>
                        <div class="feature-one__item__year">2023</div>
                        <div class="feature-one__item__bottom-ball"></div>
                    </div><!-- feature-item -->
                </div>
            </div>
        </div>
    </section>
    <!-- Feature End -->

    <section class="about-one">
        <div class="about-one__bg" style="background-image: url(assets/images/shapes/about-bg-1.jpg);"></div>
        <div class="about-one__shape" style="background-image: url(assets/images/shapes/about-1-shape-1.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="about-one__content">
                        <div class="sec-title text-left">
                            <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span> About Us<span class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
                            <h3 class="sec-title__title">Gneiss Technology: Pioneering Tomorrow's Connectivity</h3>
                            <!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="about-one__content__text">
                            At Gneiss Technology, we specialize in cutting-edge circuit design solutions, pushing the
                            boundaries of technological innovation.
                        </p>
                        <ul class="about-one__content__list">
                            <li><span class="icofont-checked"></span>
                                <p>Tech Forge</p>
                            </li>
                            <li><span class="icofont-checked"></span>
                                <p>Circuit Innovate</p>
                            </li>
                            <li><span class="icofont-checked"></span>
                                <p>Connect Craft</p>
                            </li>
                            <li><span class="icofont-checked"></span>
                                <p>Future Fit</p>
                            </li>
                            <li><span class="icofont-checked"></span>
                                <p>Power Pair</p>
                            </li>
                            <li><span class="icofont-checked"></span>
                                <p>Design Drive</p>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="about-one__content__btn">
                            <a href="About" class="tolak-btn"><b>About More</b><span></span></a>
                            <h5 class="about-one__content__btn__text">Watching video</h5>
                            <img class="about-one__content__btn__arrow" src="assets/images/shapes/arrow.png"
                                 alt="tolak">
                        </div>
                        <div class="about-one__video-btn">
                            <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                <i class="fa fa-play"></i>
                                <span class="video-popup__btn-ripple"></span>
                            </a>
                        </div>
                    </div><!-- /.about__content -->
                </div><!-- /.col-xl-6 -->
                <div class="col-xl-6">
                    <div class="tolak-stretch-element-inside-column">
                        <div class="about-one__image wow slideInRight">
                            <img src="assets/images/resources/about-1-1.jpg" alt="tolak">
                            <div class="about-one__image__text">
                                <span></span>4+ years of experience
                            </div>
                        </div><!-- /.about__image -->
                    </div><!-- /.tolak-stretch-element-inside-column -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- /.about-one -->

    <!-- Product Start -->
    <div class="sec-title text-center" style="margin-top: 120px;">
        <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span>Products<span
                    class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
        <h3 class="sec-title__title">Our Top Rated Products</h3><!-- /.sec-title__title -->
    </div>
    <section class="product-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-one__carousel tolak-owl__carousel tolak-owl__carousel--with-shadow tolak-owl__carousel--basic-nav owl-carousel owl-theme"
                         data-owl-options='{
			"items": 1,
			"margin": 0,
			"loop": false,
			"smartSpeed": 700,
			"nav": false,
			"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
			"dots": true,
			"autoplay": false,
			"responsive": {
				"0": {
					"items": 1
				},
				"576": {
					"items": 2,
					"margin": 30
				},
				"992": {
					"items": 3,
					"margin": 30
				},
				"1200": {
					"items": 4,
					"margin": 30
				}
			}
		}'>
                        <div class="item">
                            <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                <div class="product__item__img">
                                    <img src="assets/images/products/product-1-1.jpg" alt="tolak">
                                    <div class="product__item__btn">
                                        <a href="Product-Details"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div><!-- /.product-image -->
                                <div class="product__item__content">
                                    <div class="product__item__ratings">
                                        <span class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span>
                                    </div><!-- /.product-ratings -->
                                    <h4 class="product__item__title"><a href="Product-Details">Boss Sofa</a></h4>
                                    <!-- /.product-title -->
                                    <div class="product__item__price">$82.00</div><!-- /.product-price -->
                                    <a href="Product-Details" class="tolak-btn product__item__link"><b>Details</b><span></span></a>
                                </div><!-- /.product-content -->
                            </div><!-- /.product-item -->
                        </div><!-- /.item -->
                    </div><!-- /.row -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- Product End -->

    <!-- CTA Start -->
    <section class="cta-one">
        <div class="cta-one__bg">
            <div class="cta-one__bg__shape" style="background-image: url(assets/images/shapes/cta-bg-1.png);"></div>
        </div>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-7 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="cta-one__image">
                        <img src="assets/images/resources/cta-1-1.jpg" alt="tolak">
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="100ms">
                    <div class="cta-one__content">
                        <div class="cta-one__box">
                            <div class="cta-one__box__icon"><span class="icon-best-price"></span></div>
                            <h3 class="cta-one__box__title">Aeroponic Gardening (Ongoing Project)</h3>
                            <p class="cta-one__box__text">Gneiss Technologies is a growing tech company, is embarking on
                                an exciting journey into the realm of aeroponics farming. </p>
                        </div>
                        <p class="cta-one__content__text">We are lookout for a passionate team who are eager to join us
                            <a href="Contact">(
                                Join Us )</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA End -->

    <?php include ('include/faq.php');?>
    <!-- /.funfact-one -->

    <!-- CTA Start -->

    <section class="cta-two">
        <div class="container">
            <div class="cta-two__bg" style="background-image: url(assets/images/shapes/cta-bg-2.png);">
                <div class="row">
                    <div class="col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="cta-two__info" style="background-image: url(assets/images/shapes/cta-2-1.jpg);">
                            <div class="cta-two__info__icon"><span class="icon-phone-call"></span></div>
                            <h4 class="cta-two__info__title">Call This Now</h4>
                            <p class="cta-two__info__text">
                                <a href="tel:01521411273">+880 1521 411 273</a><br>
                                <a href="tel:01705581992 ">+880 1705 581 992 </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cta-two__content">
                            <h4 class="cta-two__content__title">Solution Company <a href="tel:01521411273">Call
                                    Now!</a></h4>
                            <p class="cta-two__content__text">We can provide you with a<br> Customized product.</p>
                            <a class="cta-two__content__rm" href="Contact">Read More<span
                                        class="fas fa-angle-double-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="cta-two__image">
                            <img src="assets/images/resources/cta-2-2.png" alt="tolak">
                        </div>
                        <a href="tel:01705581992" class="cta-two__call-text">Call Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA End -->

    <?php include ('include/team.php');?>
    <!-- /.team-one -->

    <section class="our-solution" style="background-image: url(assets/images/backgrounds/solution-bg-1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="our-solution__image">
                        <div class="our-solution__border-one"></div>
                        <div class="our-solution__border-two"></div>
                        <img src="assets/images/resources/solution-1-1.png" alt="tolak">
                        <div class="our-solution__border-three"></div>
                        <div class="our-solution__image__shape"><img src="assets/images/shapes/solution-1-shape-1.png"
                                                                     alt="tolak"></div>
                    </div><!-- /.our-solution__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="our-solution__content">
                        <div class="sec-title text-left">
                            <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span>Our Solution
                                Business<span class="sec-title__tagline__right"></span></h6>
                            <!-- /.sec-title__tagline -->
                            <h3 class="sec-title__title">We Are Committed to Deliver Top Services.</h3>
                            <!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="our-solution__content__text">
                            We are lookout for a passionate team who are eager to join us in pioneering a new era.
                        </p>
                        <div class="row">
                            <p class="our-solution__content__text" style="padding-left: 30px;">
                                Joining our aeroponics project means becoming part of a collaborative team dedicated to
                                pushing the boundaries of what is possible in sustainable agriculture. Together, we will
                                work towards developing solutions that not only increase food production but also
                                minimize resource usage and environmental impact.
                            </p>
                            <p class="our-solution__content__text" style="padding-left: 30px;">
                                If you are ready to take on a challenge and contribute to a project that has the
                                potential to reshape the future of farming, then Gneiss Technologies invites you to join
                                us. Apply now and be a part of this exciting journey towards a more sustainable and
                                abundant food supply for generations to come.
                            </p>
                        </div>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- /.our-solution -->

    <!-- Feature Start -->
    <section class="feature-two">
        <div class="container">
            <div class="row gutter-y-30">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-two__item text-center wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-two__item__icon">
                            <span class="icon-cooperation"></span>
                        </div>
                        <h4 class="feature-two__item__title">Circuit Designer</h4>
                        <a href="Contact">Apply Now</a>
                    </div><!-- feature-item -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-two__item feature-two__item--reverse text-center wow fadeInUp"
                         data-wow-delay="200ms">
                        <div class="feature-two__item__icon">
                            <span class="icon-ads-campaign"></span>
                        </div>
                        <h4 class="feature-two__item__title">Programmer</h4>
                        <a href="Contact">Apply Now</a>
                    </div><!-- feature-item -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-two__item text-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-two__item__icon">
                            <span class="icon-advertisig-agency"></span>
                        </div>
                        <h4 class="feature-two__item__title">Team Member</h4>
                        <a href="Contact">Apply Now</a>
                    </div><!-- feature-item -->
                </div>
            </div>
        </div>
    </section>
    <!-- Feature End -->


    <?php include ('include/previous_works.php');?>
    <!-- /.project-one -->


    <div class="client-carousel ">
        <div class="container">
            <div class="client-carousel__one tolak-owl__carousel owl-theme owl-carousel" data-owl-options='{
            "items": 5,
            "margin": 30,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":false,
            "dots":false,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "responsive":{
                "0":{
                    "items":1
                },
                "360":{
                    "items":2
                },
                "575":{
                    "items":3
                },
                "768":{
                    "items":3
                },
                "992":{
                    "items": 4
                },
                "1200":{
                    "items": 5
                }
            }
            }'>
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png"
                         alt="tolak">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png"
                         alt="tolak">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png"
                         alt="tolak">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png"
                         alt="tolak">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png"
                         alt="tolak">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png"
                         alt="tolak">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png"
                         alt="tolak">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png"
                         alt="tolak">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png"
                         alt="tolak">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png"
                         alt="tolak">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png"
                         alt="tolak">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png"
                         alt="tolak">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png"
                         alt="tolak">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png"
                         alt="tolak">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png"
                         alt="tolak">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png"
                         alt="tolak">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png"
                         alt="tolak">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png"
                         alt="tolak">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png"
                         alt="tolak">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png"
                         alt="tolak">
                </div><!-- /.owl-slide-item-->
            </div><!-- /.thm-owl__slider -->
        </div><!-- /.container -->
    </div>
    <!-- /.client-carousel -->

    <?php include ('include/contact_form.php');?>
    <!-- /.contact -->

    <section class="blog-one">
        <div class="container">
            <div class="sec-title text-center">
                <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span>Our LArgest Blog<span
                            class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
                <h3 class="sec-title__title">Latest News From The Blog</h3><!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="blog-one__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme"
                 data-owl-options='{
			"items": 1,
			"margin": 30,
			"loop": false,
			"smartSpeed": 700,
			"nav": false,
			"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
			"dots": true,
			"autoplay": false,
			"responsive": {
				"0": {
					"items": 1
				},
				"768": {
					"items": 2
				},
				"992": {
					"items": 3
				}
			}
			}'>
                <?php
                $fetch_blog = $db_handle->runQuery("select * from blog order by blog_id desc limit 8");
                $no_fetch_blog = $db_handle->numRows("select * from blog order by blog_id desc limit 8");
                for ($i=0; $i<$no_fetch_blog; $i++){
                    ?>
                    <div class="item">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="blog-card__image">
                                <img src="admin/<?php echo $fetch_blog[$i]['file'];?>"
                                     alt="Blog">
                                <img src="admin/<?php echo $fetch_blog[$i]['file'];?>"
                                     alt="Blog">
                                <a href="Details?id=<?php echo $fetch_blog[$i]['blog_id'];?>" class="blog-card__image__link"><span class="sr-only"><?php echo $fetch_blog[$i]['title'];?></span>
                                    <!-- /.sr-only --></a>
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__bg"></div>
                            <div class="blog-card__meta">
                                <?php
                                $date = date_format(new DateTime($fetch_blog[$i]['date']), 'd');
                                $month = date_format(new DateTime($fetch_blog[$i]['date']), 'M');
                                $year = date_format(new DateTime($fetch_blog[$i]['date']), 'Y');
                                ?>
                                <div class="blog-card__meta__date"><span><?php echo $date;?></span><?php echo $month;?></div><!-- /.blog-card__date -->
                                <div class="blog-card__meta__year"><?php echo $year;?></div><!-- /.blog-card__yarn -->
                            </div>
                            <div class="blog-card__content">
                                <h3 class="blog-card__title"><a href="Details?id=<?php echo $fetch_blog[$i]['blog_id'];?>"><?php echo $fetch_blog[$i]['title'];?></a></h3><!-- /.blog-card__title -->
                                <p class="blog-card__text"><?php
                                    echo substr($fetch_blog[$i]['description'],0, 100);
                                    ?>...</p><!-- /.blog-card__text -->
                                <a href="Details?id=<?php echo $fetch_blog[$i]['blog_id'];?>" class="blog-card__link">
                                    Read more
                                    <i class="icofont-rounded-double-right"></i>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                            <div class="blog-card__border"></div>
                        </div><!-- /.blog-card -->
                    </div><!-- /.item -->
                    <?php
                }
                ?>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- /.blog-one -->

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