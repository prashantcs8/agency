<?php
//remove_admin_bar
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
    show_admin_bar(false);
}
//BASIC FUNCTIONS
// Replace Admin Dashboard Logo
//function wp_admin_dashboard_custom_logo() {
//    echo '<style type="text/css">#header-logo { background-image: url(' . get_bloginfo('template_directory') . '/images/admin_logo.png) !important; }</style>';
//}
//add_action('admin_head', 'wp_admin_dashboard_custom_logo');
// custom login logo
function my_custom_login_logo() {
    $main_logo_id = get_option('options_main_logo');
    $main_logo_src = wp_get_attachment_image_src($main_logo_id, 'full');
    echo '<style type="text/css">
        h1 a { background-image:url(' . $main_logo_src[0] . ') !important; padding-bottom:0 !important; height:79px !important; width:200px !important; background-size:auto !important; margin:0 0 0 55px !important; background-position: center center !important; }
            .wp-core-ui .button-primary {background:#249292;}
body{    background: #e9f4ee;}            
    </style>';
}
add_action('login_head', 'my_custom_login_logo');
// Add Dashboard footer text
function wp_admin_dashboard_custom_footer_text($default_text) {
    return '<span id="footer-thankyou">Powered by iTech Creators<span>';
}
add_filter('admin_footer_text', 'wp_admin_dashboard_custom_footer_text');
// changing the Login Page Logo URL
function custom_login_logo_url() {
    return home_url(); // put any URL in place of the WordPress one or use the home URL
}
add_filter('login_headerurl', 'custom_login_logo_url');
// changing the default Login Page logo title
function custom_login_logo_title() {
    return get_option('blogname');  // changing the title from "Powered by WordPress" to your website name. You can add custom title text, if you prefer so.
}
// Your own login logo title text
function isacustom_wp_login_title() {
    return 'Powered by iTech Creators';
}
add_filter('login_headertitle', 'isacustom_wp_login_title');
//browser_body_class
add_filter('body_class', 'browser_body_class');
function browser_body_class($classes) {
    global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
    if ($is_lynx)
        $classes[] = 'lynx';
    elseif ($is_gecko)
        $classes[] = 'gecko';
    elseif ($is_opera)
        $classes[] = 'opera';
    elseif ($is_NS4)
        $classes[] = 'ns4';
    elseif ($is_safari)
        $classes[] = 'safari';
    elseif ($is_chrome)
        $classes[] = 'chrome';
    elseif ($is_IE)
        $classes[] = 'ie';
    else
        $classes[] = 'unknown';
    if ($is_iphone)
        $classes[] = 'iphone';
    return $classes;
}

/** changing default wordpres email settings */
add_filter('wp_mail_from', 'new_mail_from');
add_filter('wp_mail_from_name', 'new_mail_from_name');
function new_mail_from($old) {
    $admin_email = get_option( 'admin_email' );
 return $admin_email;
}
function new_mail_from_name($old) {
   $sitename = get_option( 'blogname' );
 return $sitename;
}

remove_action('wp_head', 'wp_generator'); 

// Remove Windows Live Writer link in header
// Do Not do this if you use it
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link'); 

// Remove WP version info
function hide_wp_vers()
{
    return '';
} // end hide_wp_vers function

add_filter('the_generator','hide_wp_vers');

function my_footer_shh() {
    remove_filter( 'update_footer', 'core_update_footer' ); 
}
add_action( 'admin_menu', 'my_footer_shh' );


function replace_howdy( $wp_admin_bar ) {
    $my_account=$wp_admin_bar->get_node('my-account');
    $newtitle = str_replace( 'Howdy,', 'Hello, welcome back', $my_account->title );
    $wp_admin_bar->add_node( array(
        'id' => 'my-account',
        'title' => $newtitle,
    ) );
}
add_filter( 'admin_bar_menu', 'replace_howdy',25 );
function no_wp_logo_admin_bar_remove() {
    global $wp_admin_bar;
//    pr($wp_admin_bar);
    $wp_admin_bar->remove_menu('wp-logo');
   
}
add_action('wp_before_admin_bar_render', 'no_wp_logo_admin_bar_remove', 0);



?>
