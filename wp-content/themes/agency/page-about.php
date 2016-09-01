<?php
/*
 * Template Name: About Page
 */
?>

<?php 
get_header();
$page_meta = get_post_meta($post->ID);
//pr($page_meta);
?>


<div class="area-testimonial" id="testimonial">
     <?php if (have_posts()) : the_post(); ?>
			<div class="container">
				<div class="row text-center">
					<div class="col-md-12">
						<div class="section-top">
							<h2><?php the_title(); ?></h2>
						</div>
					</div>
				</div>
		
			</div>
    <?php endif; ?>
		</div>
		
		<div class="area-features">
			<div class="container">
                            <?php 
                $left_img_abt_pg_id = $page_meta['left_img_abt_pg'][0];
                $left_img_abt_pg_src = wp_get_attachment_image_src($left_img_abt_pg_id, 'full');
                $left_title_abt_pg = $page_meta['left_title_abt_pg'][0];
                $left_content_abt_pg = $page_meta['left_content_abt_pg'][0];
                                    ?>
				<div class="first-feature">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-5 col-sm-6">
                                                    <?php if($left_img_abt_pg_src !=''){ ?>
							<div class="text-center style1">
								<img src="<?php echo $left_img_abt_pg_src[0]; ?>" alt="features" />	
							</div>
                                                    <?php } ?>
						</div>
						<div class="col-md-5 col-sm-6">
							<?php if($left_title_abt_pg !=''){ echo '<h4>'.$left_title_abt_pg.'</h4>';} 
                                                        if($left_content_abt_pg !=''){ echo '<p>'.$left_content_abt_pg.'</p>';}
                                                        ?>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
                            <?php 
                $right_image_abt_pg_id = $page_meta['right_image_abt_pg'][0];
                $right_image_abt_pg_src = wp_get_attachment_image_src($right_image_abt_pg_id, 'full');
                $right_title_abt_pg = $page_meta['right_title_abt_pg'][0];
                $right_content_abt_pg = $page_meta['right_content_abt_pg'][0];
                                    ?>
				<div class="first-feature">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-xs-12 col-md-5 col-sm-6 ">
							<?php if($right_title_abt_pg !=''){ echo '<h4>'.$right_title_abt_pg.'</h4>';} 
                                                        if($right_content_abt_pg !=''){ echo '<p>'.$right_content_abt_pg.'</p>';}
                                                        ?>
						</div>
						<div class="col-xs-12 col-md-5 col-sm-6 ">
                                                    <?php if($right_image_abt_pg_src !=''){ ?>
							<div class="text-center style1">
								<img src="<?php echo $right_image_abt_pg_src[0]; ?>" alt="features" />
							</div>
                                                    <?php } ?>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
			</div>
		</div>
		<?php $client_logos_abt_pg = $page_meta['client_logos_abt_pg'][0]; 
                if($client_logos_abt_pg >0){
                ?>
		<div class="area-clients">
			<div class="container">
                            <section class="regular slider">
                                <?php for($j=0; $j < $client_logos_abt_pg; $j++){ 
                                    $cl_logo_id = $page_meta['client_logos_abt_pg_'.$j.'_cl_logo_abt_pg'][0];
                                     $cl_logo_src = wp_get_attachment_image_src($cl_logo_id, 'full');
                                    ?>
					<div class="showcase_slide">
						<div class="first-client">
							<img src="<?php echo $cl_logo_src[0]; ?>" alt="company" />
						</div>
					</div>
                                <?php } ?>
                            </section>
			</div>
		</div>
                <?php } ?>
		<?php
get_footer();
?>
<script type='text/javascript'>
    jQuery(document).on('ready', function () {
        jQuery(".regular").slick({
            dots: false,
            arrows: false,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        
    });
    </script>