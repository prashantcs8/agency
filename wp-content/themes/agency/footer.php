<?php
//if (isset($_POST['submit'])) {
//    /* Simple order form script 
//      Uses $_POST variables: email, name, phone, message
//     * */
//
//    $full_name = htmlspecialchars($_POST['full_name']);
//    $email = htmlspecialchars($_POST['email']);
//    $phone_number = htmlspecialchars($_POST['phone_number']);
//    $message = htmlspecialchars($_POST['message']);
//
//    /* You can edit the templates below to customize reservation emails. Remember to change $mail_address to your email address. */
//
//    $to = "testing20@iwesh.com";
//    $mail_subject = "Contact Us";
//    $mail_content = "Someone DOWNLOAD the file!\r\n \r\nName: " . $full_name . " \r\nPhone: " . $phone_number . "\r\nEmail: " . $email . "\r\nMessage: " . $message . "\r\n";
//    //$mail_address = "testing20@iwesh.com";   /*  Your email **/
//    $mail_content = wordwrap($mail_content, 70, "\r\n");
//    $headers = 'X-Mailer: PHP/' . phpversion();
//    mail($to, $mail_subject, $mail_content, $headers);
//
//    $to = $_POST['email'];
//    $mail_subject = "Contact Us";
//    //$mail_content = "Someone DOWNLOAD the file!\r\n \r\nName: ".$full_name." \r\nPhone: ".$phone_number."\r\nEmail: ".$email."\r\nMessage: ".$message."\r\n";
//    $mail_content = "Your message was sent successfully. We will contact you as soon as we review your message.";
//    //$mail_address = "testing20@iwesh.com";   /*  Your email **/
//    $mail_content = wordwrap($mail_content, 70, "\r\n");
//    $headers = 'X-Mailer: PHP/' . phpversion();
//    mail($to, $mail_subject, $mail_content, $headers);
//}
?>



<div class="footer_part" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left">
<?php
$about_us_heading_footer = get_option('options_about_us_heading_footer');
$about_us_content_footer = get_option('options_about_us_content_footer');
?>
                    <?php if ($about_us_heading_footer != '') {
                        echo '<h3>' . $about_us_heading_footer . '</h3>';
                    } ?>
                    <?php if ($about_us_content_footer != '') {
                        echo '<p>' . $about_us_content_footer . '</p>';
                    } ?>
                        <?php $no_social_links = get_option('options_social_links'); ?>
                        <?php if ($no_social_links > 0) { ?>
                        <ul class="social-icon">
                            <?php
                            for ($i = 0; $i < $no_social_links; $i++) {
                                $link = get_option('options_social_links_' . $i . '_link');
                                $icon = get_option('options_social_links_' . $i . '_icon');
                                if (($link != '') && ($icon != '')) {
                                    ?>
                                    <li><a href="<?php echo $link; ?>" target="_blank"><i class="fa <?php echo $icon; ?>"></i></a></li>
                                    <?php
                                }
                            }
                            ?>

                        </ul>
<?php } ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right">
                    <?php
                    if ($_POST['submit']) {
                        if (mail($to, $mail_subject, $mail_content, $headers)) {
                            echo '<p style="color:#fff;">Your message has been sent!</p>';
                        } else {
                            echo '<p style="color:red;">Something went wrong, go back and try again!</p>';
                        }
                    }
                    ?>
                    
                    
                    <?php 
                    $form_shortcode = get_option('options_contact_form');
//                    $form_shortcode = '[contact-form-7 id="110" title="contact  form" html_id="register_form" html_class="contact-form"]';
                                                echo do_shortcode($form_shortcode);
                    
                    ?>                    
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-12">
                <ul class="footer-sap">
                    <li>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </li>
                </ul>
            </div>
        </div>				


        <div class="row">
            <div class="col-lg-12 footer-menu">
                <div class="col-xs-12 col-sm-6">
                    <div class="footer-copyright">
                        <span>&copy; <?php echo date("Y") ?> All Rights Reserved.</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <?php
                    $footerdefaults = array(
                        'menu' => 'footer_menu',
                        'container' => '',
                        'container_class' => '',
                        'container_id' => '',
                        'menu_class' => 'menu',
                        'echo' => true,
                        'items_wrap' => '<ul id="%1$s mainMenu" class="%2$s footer-privacy">%3$s</ul>',
                    );
                    wp_nav_menu($footerdefaults);
                    ?>                                                   
                </div>
            </div>




        </div>
    </div>
</div>
<?php wp_footer(); ?>
<script type="text/javascript">
    jQuery('body.home.page-template-page-home.page-template-page-home-php #navigation').removeClass("inner_header");

</script>
</body>
</html>