<?php get_header(); ?>


<div class="content_wrapper">
	<div class="row text-center">
        <div class="col-md-12">
            <div class="section-top area-testimonial">
                <h1>
				<?php if ( is_day() ) : ?>
					<?php echo 'Daily Archives: ' . get_the_date(); ?>
				<?php elseif ( is_month() ) : ?>
					<?php echo 'Monthly Archives: ' . get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyeleven' ) ) ; ?>
				<?php elseif ( is_year() ) : ?>
					<?php echo 'Yearly Archives: ' . get_the_date( _x( 'Y', 'yearly archives date format', 'twentyeleven' ) ) ; ?>
				<?php else : ?>
					<?php _e( 'Blog Archives', 'twentyeleven' ); ?>
				<?php endif; ?>
		</h1>
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