<?php
/*
 * Template Name: Blog Page
 */
get_header();
$page_meta = get_post_meta($post->ID);
//pr($page_meta);
$thumbnail_id = $page_meta['_thumbnail_id'][0];
$banner_bg_img = wp_get_attachment_image_src($thumbnail_id, 'full');
?>
<div class="content_wrapper">
   
       <?php
    if (have_posts()) {
        the_post();
        ?>
    <div class="row text-center">
            <div class="col-md-12">
                <div class="section-top area-testimonial">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
        </div>
          <?php
    }
    ?>
         <div class="container">
            
            <div class="content blogs ">
                <div class="row">
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <?php
                        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                        $wp_query = new WP_Query('posts_per_page=5&paged=' . $paged);
                        if ($wp_query->have_posts()) {
                            while ($wp_query->have_posts()) {
                                $wp_query->the_post(); 
                                $title = get_the_title();
                                ?><h2 class="blog_post_title"><a href="<?php the_permalink(); ?>"><?php echo $title; ?></a></h2>
                                <?php
                                $format = get_option('date_format');
                                $news_creation_date = get_the_date($format, $post->ID);
                                ?>
   <div class="blog_creation_info"><?php $author = get_the_author(); echo '<em>'.$news_creation_date . '</em> By <em>'. $author.'</em>'; ?></div>  
                               <?php 
                               if (has_post_thumbnail($post->ID)) {
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                                    ?>
   <a href="<?php the_permalink(); ?>"><img src="<?php echo bfiThumb_src($image[0], 842, 450); ?>" alt="<?php echo $title; ?>"/></a>
                                    <?php
                                }
                               
                               ?>
                                <div class="blog_post_content">
									<p><?php echo excerpt(55); ?> </p>
                                                                        <div class="text-center"><a class="read-article" href="<?php echo get_permalink(); ?>">Read More</a></div>
                                </div>
                                <?php
                            }
                           blog_posts_nav();
                        } else {
                            // no posts found
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="blog_sidebar">
                        <?php
                        dynamic_sidebar('Blog Sidebar');
                        ?>
                        </div>
                    </div>
                </div>
            </div>            
        
    </div>
</div>

<?php
get_footer();
?>