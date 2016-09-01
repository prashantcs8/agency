<?php
/*
 * Template Name: Service Page
 */
?>

<?php
get_header();
$page_meta = get_post_meta($post->ID);
//pr($page_meta);
?>
<div class="area-services" id="service">
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
        
        <?php $services_ser_pg = $page_meta['services_ser_pg'][0]; 
        if($services_ser_pg > 0){
        ?>
        <div class="row">
            <?php for($i=0; $i<$services_ser_pg; $i++){ 
                                       $service_icon_hm = $page_meta['services_ser_pg_'.$i.'_service_icon_ser_pg'][0];
                                       $service_title_hm = $page_meta['services_ser_pg_'.$i.'_service_title_ser_pg'][0];
                                       $service_desc_hm = $page_meta['services_ser_pg_'.$i.'_service_desc_ser_pg'][0];
                                        ?>
            <div class="col-md-4 col-sm-6">
                <div class="single-service">
                    <div class="row">
                        <div class="col-xs-3 text-center half-gutter">									
                            <?php if($service_icon_hm){ ?><i class="fa <?php echo $service_icon_hm; ?>"></i><?php } ?>
                        </div>
                        <div class="col-xs-9 half-gutter">
                           <?php if($service_title_hm !=''){ echo '<h4>'.$service_title_hm.'</h4>'; } 
                                 if($service_desc_hm !=''){ echo '<p>'.$service_desc_hm.'</p>'; } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        
        <?php } ?>
    </div>
</div>
<?php 
                $heading_ser_pg = $page_meta['heading_ser_pg'][0];
                $content_ser_pg	= $page_meta['content_ser_pg'][0];
                $btn_1_txt_ser_pg = $page_meta['btn_1_txt_ser_pg'][0];
                $btn_1_link_ser_pg = $page_meta['btn_1_link_ser_pg'][0];
                $btn_2_txt_ser_pg = $page_meta['btn_2_txt_ser_pg'][0];
                $btn_2_link_ser_pg = $page_meta['btn_2_link_ser_pg'][0];
                ?>
<div class="area-watch">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?php if($heading_ser_pg !=''){ echo '<h2>'.$heading_ser_pg.'</h2>'; } 
                      if($content_ser_pg !=''){ echo '<p>'.$content_ser_pg.'</p>'; } ?>
                <ul class="button-watch">
                    <?php if (($btn_1_link_ser_pg != '') && ($btn_1_txt_ser_pg != '')) { ?>
				<li><a href="<?php echo $btn_1_link_ser_pg; ?>"><?php echo $btn_1_txt_ser_pg; ?></a></li>
                    <?php }
                          if (($btn_2_link_ser_pg != '') && ($btn_2_txt_ser_pg != '')) { ?>
			<li><a href="<?php echo $btn_2_link_ser_pg; ?>"><?php echo $btn_2_txt_ser_pg; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
<?php
get_footer();
?>