<?php get_header(); ?>


<div class="content_wrapper">
    <?php if (have_posts()) {
        the_post(); ?>
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
                        $team_meta = get_post_meta($post->ID);
                        $member_photo_id = $team_meta['member_photo'][0];
                        $member_photo_src = wp_get_attachment_image_src($member_photo_id, 'full');
                        $about_member = $team_meta['about_member'][0];

                        $facebook_link = $team_meta['facebook_link_member'][0];
                        $twitter_link = $team_meta['twitter_link_member'][0];
                        $google_plus_link = $team_meta['google_plus_link_member'][0];
                        $skype_link = $team_meta['skype_link'][0];                      
                        ?>

                        <div class="col-md-6 col-md-offset-3 ">
                            <div class="first-team content blog_post_content" style="text-align: center; margin-top: 10px;" >
                                <img src="<?php echo bfiThumb_src($member_photo_src[0], 126, 126); ?>" alt="<?php echo the_title(); ?>" width="126" height="126">
                                <h4><?php echo the_title(); ?></h4>
                                <p><?php echo $about_member; ?></p>
                                <ul class="social_icon">
                                    <?php if($facebook_link !=''){ ?>	<li><a href="<?php echo $facebook_link; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li><?php } ?>
				    <?php if($twitter_link !=''){ ?>	<li><a href="<?php echo $twitter_link; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li><?php } ?>
				    <?php if($google_plus_link !=''){ ?><li><a href="<?php echo $google_plus_link; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li><?php } ?>
				    <?php if($skype_link !=''){ ?>	<li><a href="<?php echo $skype_link; ?>" target="_blank"><i class="fa fa-skype"></i></a></li><?php } ?>																														
                                </ul>
                            </div>
                            <div class="post_navigation">
                                <div class="pull-left">
                                    <?php previous_post_link('%link', '&laquo; ' . __('Previous Team Member')) ?>
                                </div>
                                <div class="pull-right">
                                    <?php next_post_link('%link', __('Next Team Member') . ' &raquo;') ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>	

                    </div>


                </div>
            </div>
        </div>

    <?php } ?>
</div>


<?php get_footer(); ?>