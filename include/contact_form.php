<?php
require 'PHPMailer.php';
require 'SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer();
date_default_timezone_set("Asia/Dhaka");
$inserted_at = date("Y-m-d H:i:s");
$flag = 0;
if(isset($_POST['contact_data'])){
    $name = $db_handle->checkValue($_POST['name']);
    $email = $db_handle->checkValue($_POST['email']);
    $number = $db_handle->checkValue($_POST['number']);
    $message = $db_handle->checkValue($_POST['message']);

    $contact = $db_handle->insertQuery("INSERT INTO `contact_form_data`(`name`, `email`, `number`, `message`, `inserted_at`) VALUES ('$name','$email','$number','$message','$inserted_at')");
    if($contact){
        /*$email_to = 'gneisstechnologies@gmail.com';
        $mail->isSMTP();
        $mail->Host = 'sgp80.siteground.asia';  // Specify your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'business@enjoysexshop.com';
        $mail->Password = 'rD1y1r%c|(32';
        $mail->Port = 465;  // Specify the SMTP port
        $mail->SMTPSecure = 'ssl';  // Enable encryption, 'ssl' also possible

        // Email content
        $mail->setFrom('business@enjoysexshop.com', 'Enjoy');
        $mail->addAddress($email_to);  // Add recipient email
        $mail->Subject = 'Verify your email.';
        $mail->isHTML(true);
        $mail->Body = "
            <html>
                <body style='background-color: #eee; font-size: 16px;'>
                <div style='max-width: 600px; min-width: 200px; background-color: #ffffff; padding: 20px; margin: auto;'>
                
                    <p style='text-align: center;color:green;font-weight:bold'>Thank you for reaching out to us!</p>
                
                    <p style='color:black;text-align: center'>
                        6 digit authentication code for your email verification is: <strong>$verification_code</strong>
                    </p>
                </div>
                </body>
            </html>";

        // Send the email
        if ($mail->send()) {
            $flag = 1;
            exit;
        } else {
            echo "Something went wrong: " . $mail->ErrorInfo;
        }*/
        $flag = 1;
    }
}
?>

<section class="contact-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-one__info wow fadeInLeft" data-wow-delay="100ms">
                    <div class="contact-one__info__icon"><span class="icon-customer-service"></span></div>
                    <h3 class="contact-one__info__title">Let’s call together just <span>contact</span> line</h3>
                    <p class="contact-one__info__text"><a href="tel:01521411273">+8801521411273</a>, <a
                            href="tel:01705581992">+8801705581992</a></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-one__image wow fadeInRight" data-wow-delay="200ms">
                    <img src="assets/images/resources/contact-1-1.png" alt="tolak">
                </div>
            </div>
        </div>
    </div><!-- /.container -->
    <div class="container contact-one__container wow fadeInUp" data-wow-delay="100ms">
        <div class="contact-one__wrapper"
             style="background-image: url(assets/images/shapes/contact-1-shape-1.png);">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-one__image-two">
                        <img src="assets/images/resources/contact-1-2.jpg" alt="tolak">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-one__content">
                        <div class="sec-title text-left">
                            <?php
                            if($flag == 1){
                                ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Thanks!</strong> We have received your message and will contact you soon.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <?php
                            }
                            ?>
                            <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span>Get In
                                Contact<span class="sec-title__tagline__right"></span></h6>
                            <!-- /.sec-title__tagline -->
                            <h3 class="sec-title__title">Get free Business touch Customers me.</h3>
                            <!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="contact-one__content__text">
                            Business tailored it design, management & support services <br>business agency elit, sed
                            do eiusmod tempor.
                        </p>
                        <form class="contact-one__form form-one"
                              action="#" method="post">
                            <div class="form-one__group">
                                <div class="form-one__control">
                                    <input type="text" name="name" placeholder="Your Name" required>
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control">
                                    <input type="email" name="email" placeholder="Email address" required>
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control form-one__control--full">
                                    <input type="text" name="number" placeholder="Contact Number" required>
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control form-one__control--full">
                                    <textarea name="message" placeholder="Message" required></textarea><!-- /# -->
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control form-one__control--full">
                                    <button type="submit" name="contact_data" class="tolak-btn"><b>Send Request</b><span></span>
                                    </button>
                                </div><!-- /.form-one__control -->
                            </div><!-- /.form-one__group -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
</section>