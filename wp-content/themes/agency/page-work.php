<?php
/*
 * Template Name: Work Page
 */
?>

<?php 
get_header();
$page_meta = get_post_meta($post->ID);
//pr($page_meta);
?>
		<div class="portfolio" id="portfolio" >
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
                                      <?php
                    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                    $wp_query = new WP_Query('post_type=portfolio&posts_per_page=4&paged=' . $paged);
                    if ($wp_query->have_posts()) {
                        $count = 0;
                        while ($wp_query->have_posts()) {
                            $wp_query->the_post();
                            $title = get_the_title();
                            $portfolio_meta = get_post_meta($post->ID);
                            $portfolio_image_id = $portfolio_meta['portfolio_image'][0];
                            $portfolio_image_src = wp_get_attachment_image_src($portfolio_image_id, 'full');
                            ?>
                            
                            
<!--				<div class="row">-->
                                    <?php if($count == 0){ ?><div class="row">
					<div class="col-md-12">
						<div class="single-portfolio large">
							<div class="text-center style1 style2">
								<img src="<?php echo bfiThumb_src($portfolio_image_src[0], 1170, 400); ?>" alt="portfolio" />
							</div>
							<h4><?php echo $title; ?></h4>
							<p><?php echo excerpt(60); ?></p>
						</div>
                                        </div></div>
                                    <?php } else { ?>
                                    <div class="col-md-4 col-sm-12">
						<div class="single-portfolio">
							<div class="text-center style1">
								<img src="<?php echo bfiThumb_src($portfolio_image_src[0], 370, 300); ?>" alt="portfolio" />
							</div>
							<h4><?php echo $title; ?></h4>
							<p><?php echo excerpt(55); ?></p>
						</div>
					</div>
                                    <?php } ?>
				<!--</div>-->
                            
                            <?php $count++;
                        }
                        sweetwords_numeric_posts_nav();
                    } else {
                        // no posts found
                    }
                    wp_reset_postdata();
                    ?>
			</div>
		</div>
		
		<?php
get_footer();
?>