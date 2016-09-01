<?php get_header(); ?>


<div class="content_wrapper">
	<div class="row text-center">
        <div class="col-md-12">
            <div class="section-top area-testimonial">
                <h1><?php single_cat_title(); ?></h1>
            </div>
        </div>
    </div>
	
	
	<div class="page_content">
    	<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-9 col-xs-12 main_content">
					<div class="content">
						<?php get_template_part( 'loop'); ?>
					</div>
				</div>
				
				<?php get_sidebar(); ?>
			</div>
        </div>
    </div>
	
</div>


<?php get_footer(); ?>