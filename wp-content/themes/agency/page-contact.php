<?php
/*
 * Template Name: Contact Page
 */
?>

<?php 
get_header();
$page_meta = get_post_meta($post->ID);
//pr($page_meta);
?>
<?php
get_footer();
?>