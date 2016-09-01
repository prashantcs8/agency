<!DOCTYPE html>
<html lang="en" class="js">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
                <?php
        $favicon_id = get_option('options_favicon');
        $favicon_src = wp_get_attachment_image_src($favicon_id, 'full');
        ?>
		<link rel="shortcut icon" href="<?php echo $favicon_src[0]; ?>">
		<link href="<?php echo $favicon_src[0]; ?>" rel="shortcut icon" type="image/x-icon">
		<link href="<?php echo $favicon_src[0]; ?>" rel="icon" type="image/x-icon">

		<title> <?php
            global $page, $paged;
            wp_title('|', true, 'right');
            bloginfo('name');
            $site_description = get_bloginfo('description', 'display');
            if ($site_description && ( is_home() || is_front_page() ))
                echo " | $site_description";
            ?></title>
                <?php
        wp_head();
        do_action('site_customjs');
        ?>
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>

<script type="text/javascript">
function manage_validation_user(){
	jQuery.noConflict();
	var full_name = jQuery('#full_name').val();
	var email = jQuery('#email').val();
	var phone_number = jQuery("#phone_number").val();
	 var googleResponse = jQuery('#g-recaptcha-response').val();
	var flg=0;
	if (!googleResponse) {
        jQuery('#captcha_error').show();
        flg=1;
    } else {
		jQuery('#captcha_error').show();
       
    }
	var isValid = false;
    var regex = /^[a-zA-Z ]*$/;
    isValid = regex.test(full_name);	
	if(isValid == false || full_name == ''){ 
		jQuery('#user_name_error').show();
		flg=1;
	}else{
		jQuery('#user_name_error').hide();			
	}	
	
	var isValidemail = false;
    var regexemail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    isValidemail = regexemail.test(email);
	
	if(isValidemail == false){
		jQuery('#email_error').show();
		flg=1;
	}else{
		jQuery('#email_error').hide();		
	}
	
	var isValidphone = false;
    var regexphone = /[0-9 -()+]+$/;
    isValidphone = regexphone.test(phone_number);
	if(isValidphone == false){
		jQuery('#phone_error').show();
		flg=1;
	}else{
		jQuery('#phone_error').hide();		
	}
	
	
        
	
	if(flg==1){
		return false;	
	}else{
		return true;	
	}
}

function removeSpaces(string)
    {
        return string.split(' ').join('');
    }	
</script>		
			
			
	</head>
	<body <?php body_class(); ?>>
		<nav class="navbar navbar-default inner_header" id="navigation">
			<div class="container">
				<!-- menu -->
                                <?php 
                            $main_logo_id = get_option('options_main_logo');
                            $main_logo_src = wp_get_attachment_image_src($main_logo_id, 'full');
                            ?>
				<div class="header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo $main_logo_src[0]; ?>" alt="logo" width="170" height="50"></a>
				</div>

				<!-- Navigation -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <?php
                                                    if (has_nav_menu('primary')) {
                                                        $defaults = array(
                                                'theme_location' => 'primary',
                                                'menu' => 'main_menu',
                                                'container' => '',
                                                'container_class' => '',
                                                'container_id' => '',
                                                'menu_class' => 'menu',
                                                'echo' => true,
                                                'items_wrap' => '<ul id="%1$s mainMenu" class="%2$s nav navbar-nav navbar-right">%3$s</ul>',
                                                        );
                                                        wp_nav_menu($defaults);
                                                    }
                                                    ?>
				</div>
			</div>
		</nav>
