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
	
	
    <div class="page_content " style="background: #d3e9e9; ">
    	<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 main_content ">
                                    <?php $testimonial_meta = get_post_meta($post->ID);
                            $designation = $testimonial_meta['designation'][0]; 
                               ?>
					<div class="content blog_post_content ">
                                            <div class="first-testimonial">
                                                <blockquote><?php the_content(); ?></blockquote>
                                            </div>
					</div>
					
					<div class="category_wrapper"> 
						<p><?php _e(' ')?>: <?php echo $designation; ?></p> 
						
					</div>
					
					<div class="single_post_meta blog_creation_info">
						<p>Posted on <em><?php the_time('l, F jS, Y'); ?></em></p>
					</div>
					
					<div class="post_navigation">
						<div class="pull-left">
							<?php previous_post_link('%link','&laquo; '.__('Previous Testimonial')) ?>
						</div>
						<div class="pull-right">
							<?php next_post_link('%link',__('Next Ttestimonial').' &raquo;') ?>
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
<script type="text/javascript">
jQuery('.content.blog_post_content').css('border-bottom', '0px');
jQuery('.content.blog_post_content').css('margin-bottom', '0px');
</script>