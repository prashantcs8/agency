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
				<div class="col-md-9 col-sm-9 col-xs-12 main_content">
                                    <?php 
                               if (has_post_thumbnail($post->ID)) {
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                                    ?>
                                    <div class="single_feat_img">
                     <a href="<?php the_permalink(); ?>"><img src="<?php echo bfiThumb_src($image[0], 842, 450); ?>" alt="<?php echo the_title(); ?>"/></a>
                                    </div>
                                    <?php
                                }
                               
                               ?>
					<div class="content blog_post_content">
						<?php the_content(); ?>
					</div>
					
					<div class="category_wrapper"> 
						<p><?php _e('Category')?>: <?php the_category(", "); ?></p> 
						<?php the_tags('<p class="tags">Tags: ', ', ', '</p>'); ?>
					</div>
					
					<div class="single_post_meta blog_creation_info">
						<p>Posted on <em><?php the_time('l, F jS, Y'); ?></em> by <em><?php the_author_meta('display_name') ?></em></p>
					</div>
					
					<div class="post_navigation">
						<div class="pull-left">
							<?php previous_post_link('%link','&laquo; '.__('Previous Post'),TRUE) ?>
						</div>
						<div class="pull-right">
							<?php next_post_link('%link',__('Next Post').' &raquo;',TRUE) ?>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="comment_wrapper">
						<?php comments_template(); ?>
					</div>
					
				</div>
				
				<?php get_sidebar(); ?>
			</div>
        </div>
    </div>
	
	 <?php } ?>
</div>


<?php get_footer(); ?>