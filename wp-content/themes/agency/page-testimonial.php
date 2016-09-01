<?php
/*
 * Template Name: Testimonial Page
 */
?>

<?php 
get_header();
$page_meta = get_post_meta($post->ID);
//pr($page_meta);
?>
	<div class="area-testimonial" id="testimonial">
            			<div class="container">
	<?php if (have_posts()) : the_post(); ?>
                                    <div class="row text-center">
					<div class="col-md-12">
						<div class="section-top">
							<h2><?php the_title(); ?></h2>
						</div>
					</div>
				</div>
                            <?php endif; ?>
				<div class="row">
                                     <?php
                    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                    $wp_query = new WP_Query('post_type=testimonial&posts_per_page=6&paged=' . $paged);
                    if ($wp_query->have_posts()) {
                        while ($wp_query->have_posts()) {
                            $wp_query->the_post();
                            $title = get_the_title();
                            $testimonial_meta = get_post_meta($post->ID);
                            $designation = $testimonial_meta['designation'][0];
                            ?>
                                    
					<div class="col-md-4">
						<div class="first-testimonial">
							<div class="row">
								<div class="col-xs-12">
									<blockquote><?php echo excerpt(55); ?></blockquote>
								</div>
							</div>
							<div class="row">
								
								<div class="col-xs-12 half-gutter">
									<h5><?php echo $title; ?></h5>
									<h6><?php echo $designation; ?></h6>
								</div>
							</div>
						</div>
					</div>
                                    <?php
                        }
                        sweetwords_numeric_posts_nav();
                    } else {
                        // no posts found
                    }
                    wp_reset_postdata();
                    ?>
				</div>
			</div>
		</div>
<?php
get_footer();
?>