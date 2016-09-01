<?php
get_header();
$page_meta = get_post_meta($post->ID);
//pr($page_meta);
?>
<div class="area-services" id="service">
    <?php if (have_posts()) : the_post(); ?>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="section-top">
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row privacy disclaimer">
                <div class="col-xs-12">

                    <?php
                    the_content();
                    ?>             
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php
get_footer();
?>