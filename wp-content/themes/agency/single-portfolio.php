<?php get_header(); ?>


<div class="content_wrapper">
	<?php if (have_posts()) { the_post(); ?>
	<div class="row text-center">
            <div class="col-md-12">
                <div class="section-top area-testimonial">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
        </div>
	
	
	<div class="page_content">
    	<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 main_content">
                                    <?php 
                                    $portfolio_meta = get_post_meta($post->ID);
                            $portfolio_image_id = $portfolio_meta['portfolio_image'][0];
                            $portfolio_image_src = wp_get_attachment_image_src($portfolio_image_id, 'full');
                               if ($portfolio_image_src !='') {
//                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                                    ?>
                                    <div class="single_feat_img">
                     <a href="<?php the_permalink(); ?>"><img src="<?php echo bfiThumb_src($portfolio_image_src[0], 1170, 400); ?>" alt="<?php echo the_title(); ?>"/></a>
                                    </div>
                                    <?php
                                }
                               
                               ?>
					<div class="content blog_post_content">
						<?php the_content(); ?>
					</div>
					
					<div class="single_post_meta blog_creation_info">
						<p>Posted on <em><?php the_time('l, F jS, Y'); ?></em> by <em><?php the_author_meta('display_name') ?></em></p>
					</div>
					
					<div class="post_navigation">
						<div class="pull-left">
							<?php previous_post_link('%link','&laquo; '.__('Previous Work')) ?>
						</div>
						<div class="pull-right">
							<?php next_post_link('%link',__('Next Work').' &raquo;') ?>
						</div>
						<div class="clearfix"></div>
					</div>
					
					
					
				</div>
				
				
			</div>
        </div>
    </div>
	
	 <?php } ?>
</div>


<?php get_footer(); ?>