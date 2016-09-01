<?php
/*
 * Template Name: Home Page
 */
get_header();
$page_meta = get_post_meta($post->ID);
//pr($page_meta);
?>
<?php 
$parallax_bg_img_hm_id = $page_meta['parallax_bg_img_hm'][0]; 
$parallax_bg_img_hm_src = wp_get_attachment_image_src($parallax_bg_img_hm_id, 'full');
$parallax_heading_1_hm = $page_meta['parallax_heading_1_hm'][0];
$parallax_heading_2_hm = $page_meta['parallax_heading_2_hm'][0];
$parallax_btn_txt_hm = $page_meta['parallax_btn_txt_hm'][0];
$parallax_btn_link_hm = $page_meta['parallax_btn_link_hm'][0];
?>
		<div class="home" id="home1" style="background: url(<?php echo $parallax_bg_img_hm_src[0]; ?>) fixed; background-size:cover;">
			<div class="layer">
				<div class="container">
					<div class="row text-center">
						<div class="col-md-1"></div>
						<div class="col-md-10">
                                                        <?php if($parallax_heading_1_hm !=''){ echo '<h4>'.$parallax_heading_1_hm.'</h4>'; } 
                                                        if($parallax_heading_2_hm !=''){ echo '<h1 class="cd-headline letters rotate-3">'.$parallax_heading_2_hm.'</h1>'; }
                                                       if (($parallax_btn_link_hm != '') && ($parallax_btn_txt_hm != '')) { ?>
		<a href="<?php echo $parallax_btn_link_hm; ?>" class="button-line"><?php echo $parallax_btn_txt_hm; ?></a>
                                                       <?php } ?>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
			</div>
		</div>
<?php 
$sec_title_services_hm = $page_meta['sec_title_services_hm'][0];
$services_hm_size = $page_meta['services_hm'][0];

?>		
<div class="area-services" id="service">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-12">
						<div class="section-top">
				<?php if($sec_title_services_hm !=''){ echo '<h2>'.$sec_title_services_hm.'</h2>'; } ?>
						</div>
					</div>
				</div>
                            <?php if($services_hm_size >0){ ?>
				<div class="row">
                                    <?php for($i=0; $i<$services_hm_size; $i++){ 
                                       $service_icon_hm = $page_meta['services_hm_'.$i.'_service_icon_hm'][0];
                                       $service_title_hm = $page_meta['services_hm_'.$i.'_service_title_hm'][0];
                                       $service_desc_hm = $page_meta['services_hm_'.$i.'_service_desc_hm'][0];
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
                $heading_about_sec = $page_meta['heading_about_sec'][0];
                $content_about_sec = $page_meta['content_about_sec'][0];
                $btn_1_txt_about_sec = $page_meta['btn_1_txt_about_sec'][0];
                $btn_1_link_about_sec = $page_meta['btn_1_link_about_sec'][0];
                $btn_2_txt_about_sec = $page_meta['btn_2_txt_about_sec'][0];
                $btn_2_link_about_sec = $page_meta['btn_2_link_about_sec'][0];
                ?>
		<div class="area-watch">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-2"></div>
					<div class="col-md-8">
                                            <?php if($heading_about_sec !=''){ echo '<h2>'.$heading_about_sec.'</h2>'; } 
                                              if($content_about_sec !=''){ echo '<p>'.$content_about_sec.'</p>'; } ?>
						
						<ul class="button-watch">
                                                    <?php if (($btn_1_link_about_sec != '') && ($btn_1_txt_about_sec != '')) { ?>
				<li><a href="<?php echo $btn_1_link_about_sec; ?>"><?php echo $btn_1_txt_about_sec; ?></a></li>
                                                    <?php }
                                                    if (($btn_2_link_about_sec != '') && ($btn_2_txt_about_sec != '')) { ?>
			<li><a href="<?php echo $btn_2_link_about_sec; ?>"><?php echo $btn_2_txt_about_sec; ?></a></li>
                                                        <?php } ?>
						</ul>
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>
		</div>
		<?php 
                $show_our_work_hm = $page_meta['show_our_work_hm'][0];
                if($show_our_work_hm == 1){
                    $heading_our_work_sec = $page_meta['heading_our_work_sec'][0];
                ?>
		<div class="portfolio" id="portfolio">
			<div class="container">
                            <?php if($heading_our_work_sec !=''){ ?>
				<div class="row text-center">
					<div class="col-md-12">
						<div class="section-top">
							<h2><?php echo $heading_our_work_sec; ?></h2>
						</div>
					</div>
				</div>
                            <?php } ?>
                            
                            <?php 
                            $sl_portfolio_lg_id = $page_meta['sl_portfolio_large'][0]; 
                            $portfolio_post = get_post($sl_portfolio_lg_id);
                            //pr($portfolio_post);
                            $portfolio_lg_title = $portfolio_post->post_title;
                            $portfolio_lg_content = $portfolio_post->post_content;
                            if(strlen($portfolio_lg_content) > 700){
                               $portfolio_lg_content = substr($portfolio_lg_content, 0, 780).'...'; 
                            }
                            //$content = apply_filters('the_content', $content);
                            //$content = str_replace(']]>', ']]&gt;', $content);
                            //echo $content;
                            $potfolio_lg_meta = get_post_meta($sl_portfolio_lg_id);
                            $portfolio_image_id = $potfolio_lg_meta['portfolio_image'][0];
                            $portfolio_image_src = wp_get_attachment_image_src($portfolio_image_id, 'full');
                            ?>
				<div class="row">
					<div class="col-md-12">
						<div class="single-portfolio large">
							<div class="text-center style1 style2">
		<img src="<?php echo bfiThumb_src($portfolio_image_src[0], 1170, 400); ?>" alt="<?php echo $portfolio_lg_title; ?>" width="1170" height="400" />
							</div>
							<h4><?php echo $portfolio_lg_title; ?></h4>
							<p><?php echo $portfolio_lg_content; ?></p>
						</div>
					</div>
				</div>
                            <?php 
                            $sl_portfolio_1_small_id = $page_meta['sl_portfolio_1_small'][0]; 
                            $portfolio_post = get_post($sl_portfolio_1_small_id);
                            //pr($portfolio_post);
                            $portfolio_sm1_title = $portfolio_post->post_title;
                            $portfolio_sm1_content = $portfolio_post->post_content;
                            if(strlen($portfolio_sm1_content) > 700){
                               $portfolio_sm1_content = substr($portfolio_sm1_content, 0, 300).'...'; 
                            }
                            //$content = apply_filters('the_content', $content);
                            //$content = str_replace(']]>', ']]&gt;', $content);
                            //echo $content;
                            $potfolio_sm1_meta = get_post_meta($sl_portfolio_1_small_id);
                            $portfolio_image_sm1_id = $potfolio_sm1_meta['portfolio_image'][0];
                            $portfolio_image_sm1_src = wp_get_attachment_image_src($portfolio_image_sm1_id, 'full');
                            ?>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="single-portfolio">
							<div class="text-center style1">
								<img src="<?php echo bfiThumb_src($portfolio_image_sm1_src[0], 370, 300); ?>" alt="<?php echo $portfolio_sm1_title; ?>" width="370" height="300" />
							</div>
							<h4><?php echo $portfolio_sm1_title; ?></h4>
							<p><?php echo $portfolio_sm1_content; ?></p>
						</div>
					</div>
                                    <?php 
                            $sl_portfolio_2_small_id = $page_meta['sl_portfolio_2_small'][0]; 
                            $portfolio_post = get_post($sl_portfolio_2_small_id);
                            //pr($portfolio_post);
                            $portfolio_sm2_title = $portfolio_post->post_title;
                            $portfolio_sm2_content = $portfolio_post->post_content;
                            if(strlen($portfolio_sm2_content) > 700){
                               $portfolio_sm2_content = substr($portfolio_sm2_content, 0, 300).'...'; 
                            }
                            //$content = apply_filters('the_content', $content);
                            //$content = str_replace(']]>', ']]&gt;', $content);
                            //echo $content;
                            $potfolio_sm1_meta = get_post_meta($sl_portfolio_2_small_id);
                            $portfolio_image_sm2_id = $potfolio_sm1_meta['portfolio_image'][0];
                            $portfolio_image_sm2_src = wp_get_attachment_image_src($portfolio_image_sm2_id, 'full');
                            ?>
				<!--<div class="row">-->
					<div class="col-md-4 col-sm-12">
						<div class="single-portfolio">
							<div class="text-center style1">
								<img src="<?php echo bfiThumb_src($portfolio_image_sm2_src[0], 370, 300); ?>" alt="<?php echo $portfolio_sm2_title; ?>" width="370" height="300" />
							</div>
							<h4><?php echo $portfolio_sm2_title; ?></h4>
							<p><?php echo $portfolio_sm2_content; ?></p>
						</div>
					</div>
                                    <?php 
                            $sl_portfolio_3_small_id = $page_meta['sl_portfolio_3_small'][0]; 
                            $portfolio_post = get_post($sl_portfolio_3_small_id);
                            //pr($portfolio_post);
                            $portfolio_sm3_title = $portfolio_post->post_title;
                            $portfolio_sm3_content = $portfolio_post->post_content;
                            if(strlen($portfolio_sm3_content) > 700){
                               $portfolio_sm3_content = substr($portfolio_sm3_content, 0, 300).'...'; 
                            }
                            //$content = apply_filters('the_content', $content);
                            //$content = str_replace(']]>', ']]&gt;', $content);
                            //echo $content;
                            $potfolio_sm3_meta = get_post_meta($sl_portfolio_3_small_id);
                            $portfolio_image_sm3_id = $potfolio_sm3_meta['portfolio_image'][0];
                            $portfolio_image_sm3_src = wp_get_attachment_image_src($portfolio_image_sm3_id, 'full');
                            ?>
				<!--<div class="row">-->
					<div class="col-md-4 col-sm-12">
						<div class="single-portfolio">
							<div class="text-center style1">
								<img src="<?php echo bfiThumb_src($portfolio_image_sm3_src[0], 370, 300); ?>" alt="<?php echo $portfolio_sm3_title; ?>" width="370" height="300" />
							</div>
							<h4><?php echo $portfolio_sm3_title; ?></h4>
							<p><?php echo $portfolio_sm3_content; ?></p>
						</div>
					</div>
					
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
                <?php } ?>

<?php 
                $show_testimonials_hm = $page_meta['show_testimonials_hm'][0];
                if($show_testimonials_hm == 1){
                    $heading_testimonials_hm = $page_meta['heading_testimonials_hm'][0];
                ?>
		<div class="area-testimonial" id="testimonial">
			<div class="container">
                            <?php if($heading_testimonials_hm !=''){ ?>
				<div class="row text-center">
					<div class="col-md-12">
						<div class="section-top">
							<h2><?php echo $heading_testimonials_hm; ?></h2>
						</div>
					</div>
				</div>
                            <?php } ?>
				<div class="row">
                                    <?php 
                                    $sl_testimonial_1_hm_id = $page_meta['sl_testimonial_1_hm'][0]; 
                            $testimonial_post = get_post($sl_testimonial_1_hm_id);
                            //pr($portfolio_post);
                            $testimonial_1_title = $testimonial_post->post_title;
                            $testimonial_1_content = $testimonial_post->post_content;
                            if(strlen($testimonial_1_content) > 200){
                               $testimonial_1_content = substr($testimonial_1_content, 0, 225).'...'; 
                            }
                            $testimonial_1_meta = get_post_meta($sl_testimonial_1_hm_id);
                            $testimonial_1_designation = $testimonial_1_meta['designation'][0];
                                    ?>
					<div class="col-md-4">
						<div class="first-testimonial">
							<div class="row">
								<div class="col-xs-12">
									<blockquote><?php echo $testimonial_1_content; ?></blockquote>
								</div>
							</div>
							<div class="row">
								
								<div class="col-xs-12 half-gutter">
									<h5><?php echo $testimonial_1_title; ?></h5>
									<h6><?php echo $testimonial_1_designation; ?></h6>
								</div>
							</div>
						</div>
					</div>
                                    <?php 
                                    $sl_testimonial_2_hm_id = $page_meta['sl_testimonial_2_hm'][0]; 
                            $testimonial_post = get_post($sl_testimonial_2_hm_id);
                            //pr($portfolio_post);
                            $testimonial_2_title = $testimonial_post->post_title;
                            $testimonial_2_content = $testimonial_post->post_content;
                            if(strlen($testimonial_2_content) > 200){
                               $testimonial_2_content = substr($testimonial_2_content, 0, 225).'...'; 
                            }
                            $testimonial_2_meta = get_post_meta($sl_testimonial_2_hm_id);
                            $testimonial_2_designation = $testimonial_2_meta['designation'][0];
                                    ?>
					<div class="col-md-4">
						<div class="first-testimonial">
							<div class="row">
								<div class="col-xs-12">
									<blockquote><?php echo $testimonial_2_content; ?></blockquote>
								</div>
							</div>
							<div class="row">
								 
								<div class="col-xs-12 half-gutter">
									<h5><?php echo $testimonial_2_title; ?></h5>
									<h6><?php echo $testimonial_2_designation; ?></h6>
								</div>
							</div>
						</div>
					</div>
                                    <?php 
                                    $sl_testimonial_3_hm_id = $page_meta['sl_testimonial_3'][0]; 
                            $testimonial_post = get_post($sl_testimonial_3_hm_id);
                            //pr($portfolio_post);
                            $testimonial_3_title = $testimonial_post->post_title;
                            $testimonial_3_content = $testimonial_post->post_content;
                            if(strlen($testimonial_3_content) > 200){
                               $testimonial_3_content = substr($testimonial_3_content, 0, 225).'...'; 
                            }
                            $testimonial_3_meta = get_post_meta($sl_testimonial_3_hm_id);
                            $testimonial_3_designation = $testimonial_3_meta['designation'][0];
                                    ?>
					<div class="col-md-4">
						<div class="first-testimonial">
							<div class="row">
								<div class="col-xs-12">
									<blockquote><?php echo $testimonial_3_content; ?></blockquote>
								</div>
							</div>
							<div class="row">
								 
								<div class="col-xs-12 half-gutter">
									<h5><?php echo $testimonial_3_title; ?></h5>
									<h6><?php echo $testimonial_3_designation; ?></h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
                <?php } ?>
		<div class="area-features">
			<div class="container">
				<div class="first-feature">
                                    <?php $lf_sec_image_abt_id = $page_meta['lf_sec_image_abt'][0];
                                    $lf_sec_image_abt_src = wp_get_attachment_image_src($lf_sec_image_abt_id, 'full');
                                    $lf_sec_title_abt = $page_meta['lf_sec_title_abt'][0];
                                    $lf_sec_content_abt = $page_meta['lf_sec_content_abt'][0];
                                    ?>
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-5 col-sm-6">
                                                    <?php if ($lf_sec_image_abt_id !=''){ ?>
							<div class="text-center style1">
								<img src="<?php echo $lf_sec_image_abt_src[0]; ?>" alt="features" width="470" height="260" />	
							</div>
                                                    <?php } ?>
						</div>
						<div class="col-md-5 col-sm-6">
                                                        <?php if($lf_sec_title_abt !=''){ echo '<h4>'.$lf_sec_title_abt.'</h4>';} 
                                                        if($lf_sec_content_abt !=''){ echo '<p>'.$lf_sec_content_abt.'</p>';}
                                                        ?>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
				<div class="first-feature">
                                    <?php $rt_sec_image_abt_id = $page_meta['rt_sec_img_abt'][0];
                                    $rt_sec_image_abt_src = wp_get_attachment_image_src($rt_sec_image_abt_id, 'full');
                                    $rt_sec_title_abt = $page_meta['rt_sec_title_abt'][0];
                                    $rt_sec_content_abt = $page_meta['rt_sec_content_abt'][0];
                                    ?>
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-xs-12 col-md-5 col-sm-6 ">
							<?php if($rt_sec_title_abt !=''){ echo '<h4>'.$rt_sec_title_abt.'</h4>';} 
                                                        if($rt_sec_content_abt !=''){ echo '<p>'.$rt_sec_content_abt.'</p>';} ?>
						</div>
						<div class="col-xs-12 col-md-5 col-sm-6 ">
                                                    <?php if ($rt_sec_image_abt_id !=''){ ?>
							<div class="text-center style1">
								<img src="<?php echo $rt_sec_image_abt_src[0]; ?>" alt="features" width="470" height="260" />
							</div>
                                                    <?php } ?>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
			</div>
		</div>
		<?php $client_logos_hm = $page_meta['client_logos_hm'][0]; 
                if($client_logos_hm >0){
                ?>
		<div class="area-clients">
			<div class="container">
                            <section class="regular slider">
				<?php for($j=0; $j < $client_logos_hm; $j++){ 
                                    $cl_logo_id = $page_meta['client_logos_hm_'.$j.'_cl_logo'][0];
                                     $cl_logo_src = wp_get_attachment_image_src($cl_logo_id, 'full');
                                    ?>
                                            <div class="showcase_slide">
						<div class="first-client">
                                                    <?php //echo $cl_logo_src[0]; ?>
							<img src="<?php echo $cl_logo_src[0]; ?>" alt="company" width="120" height="40" />
						</div>
                                            </div>
                                <?php } ?>

				
                            </section>
			</div>
		</div>
                <?php } ?>
		<div class="area-pricing" id="pricing">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-12">
						<div class="section-top">
							<h2>Pricing</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="first-pricing">
							<div class="style3">
								<div class="style3in">
									<div class="top">
										<h4>Lorem ipsum</h4>
										<h1>$100<small>Per Month</small></h1>
									</div>
									<div class="middle">
										<p>Etiam odio quam, aliquam et accumsan a, hendrerit et nunc. Praesent facilisis laoreet dui non interdum.</p>
									</div>
									<div class="bottom">
										<a href="#" class="button">Sign up</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="first-pricing">
							<div class="style3">
								<div class="style3in">
									<div class="top">
										<h4>Lorem ipsum</h4>
										<h1>$90<small>Per Month</small></h1>
									</div>
									<div class="middle">
										<p>Etiam odio quam, aliquam et accumsan a, hendrerit et nunc. Praesent facilisis laoreet dui non interdum.</p>
									</div>
									<div class="bottom">
										<a href="#" class="button">Sign up</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="first-pricing">
							<div class="style3">
								<div class="style3in">
									<div class="top">
										<h4>Lorem ipsum</h4>
										<h1>$209<small>Per Month</small></h1>
									</div>
									<div class="middle">
										<p>Etiam odio quam, aliquam et accumsan a, hendrerit et nunc. Praesent facilisis laoreet dui non interdum.</p>
									</div>
									<div class="bottom">
										<a href="#" class="button">Sign up</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="first-pricing">
							<div class="style3">
								<div class="style3in">
									<div class="top">
										<h4>Lorem ipsum</h4>
										<h1>$509<small>Per Month</small></h1>
									</div>
									<div class="middle">
										<p>Etiam odio quam, aliquam et accumsan a, hendrerit et nunc. Praesent facilisis laoreet dui non interdum.</p>
									</div>
									<div class="bottom">
										<a href="#" class="button">Sign up</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
            <div class="button_play">
                <button onclick="jQuery('#bgndVideo').playYTP()">Play</button>
                <button onclick="jQuery('#bgndVideo').pauseYTP()">Pause</button>
				<!--<button onclick="$('#bgndVideo').stopYTP()">Stop</button>-->
                <button onclick="jQuery('#bgndVideo').muteYTPVolume()">Mute</button>
                <button onclick="jQuery('#bgndVideo').unmuteYTPVolume()">Unmute</button>
            </div>		
                <?php $add_youtube_video_link_hm = $page_meta['add_youtube_video_link_hm'][0];
                $title_video_sec_hm = $page_meta['title_video_sec_hm'][0];
                $description_video_sec_hm = $page_meta['description_video_sec_hm'][0];
                ?>
		<div class="content-section area-video">
            
			<div class="color-layer">
                            <?php if($add_youtube_video_link_hm !=''){ ?>
				<a id="bgndVideo" class="player" data-property="{videoURL:'<?php echo $add_youtube_video_link_hm; ?>',containment:'.area-video', quality:'large', autoPlay:false, mute:true, opacity:1}">bg</a>
                            <?php } ?>
				<div class="container">
					<div class="row text-center">
						<div class="col-md-2"></div>
						<div class="col-md-8">
                                                    <?php if($add_youtube_video_link_hm !=''){ ?>
							<a class="play-video"><i class="fa fa-play"></i></a>
                                                        <!--<a class="play-video"><i class="fa fa-pause"></i></a>-->
                                                    <?php } ?>
                                 <?php if($title_video_sec_hm !=''){ echo '<h2>'.$title_video_sec_hm.'</h2>'; } 
                                 if($description_video_sec_hm !=''){ echo '<p class="plarge">'.$description_video_sec_hm.'</p>'; }
                                 ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="team-area" id="team">
			<div class="container">
                            <?php $heading_our_team_hm = $page_meta['heading_our_team_hm'][0]; 
                            if($heading_our_team_hm !=''){
                            ?>
				<div class="row text-center">
					<div class="col-md-12">
						<div class="section-top">
							<h2><?php echo $heading_our_team_hm; ?></h2>
						</div>
					</div>
				</div>
                            <?php } ?>
				<div class="row text-center">
                                    <?php 
                                    $sl_member_1_hm_id = $page_meta['sl_member_1_hm'][0];
                                    
                                    $sl_member_post = get_post($sl_member_1_hm_id);
                            //pr($portfolio_post);
                            $sl_member_1_title = $sl_member_post->post_title;                            
                            
                            $sl_member_1_meta = get_post_meta($sl_member_1_hm_id);
                            $sl_member_1_member_photo_id = $sl_member_1_meta['member_photo'][0];
                            $sl_member_1_member_photo_src = wp_get_attachment_image_src($sl_member_1_member_photo_id, 'full');
                            $sl_member_1_about_member = $sl_member_1_meta['about_member'][0];
                            if(strlen($sl_member_1_about_member) > 200){
                               $sl_member_1_about_member = substr($sl_member_1_about_member, 0, 225).'...'; 
                            }
                            $sl_member_1_facebook_link_member = $sl_member_1_meta['facebook_link_member'][0];
                            $sl_member_1_twitter_link_member = $sl_member_1_meta['twitter_link_member'][0];
                            $sl_member_1_google_plus_link_member = $sl_member_1_meta['google_plus_link_member'][0];
                            $sl_member_1_skype_link = $sl_member_1_meta['skype_link'][0];
                                    ?>
					<div class="col-md-3 col-sm-6">
						<div class="first-team">
							<img src="<?php echo $sl_member_1_member_photo_src[0]; ?>" alt="<?php echo $sl_member_1_title; ?>" width="126" height="126" />
							<h4><?php echo $sl_member_1_title; ?></h4>
							<p><?php echo $sl_member_1_about_member;  ?></p>
							<ul class="social_icon">
                                                            
                                                        <?php if($sl_member_1_facebook_link_member !=''){ ?>	<li><a href="<?php echo $sl_member_1_facebook_link_member; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li><?php } ?>
							<?php if($sl_member_1_twitter_link_member !=''){ ?>	<li><a href="<?php echo $sl_member_1_twitter_link_member; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li><?php } ?>
							<?php if($sl_member_1_google_plus_link_member !=''){ ?>	<li><a href="<?php echo $sl_member_1_google_plus_link_member; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li><?php } ?>
							<?php if($sl_member_1_skype_link !=''){ ?>	<li><a href="<?php echo $sl_member_1_skype_link; ?>" target="_blank"><i class="fa fa-skype"></i></a></li><?php } ?>
							</ul>
						</div>
					</div>
                                    <?php 
                                    $sl_member_2_hm_id = $page_meta['sl_member_2_hm'][0];
                                    $sl_member_post = get_post($sl_member_2_hm_id);
                            //pr($portfolio_post);
                            $sl_member_2_title = $sl_member_post->post_title;                            
                            
                            $sl_member_2_meta = get_post_meta($sl_member_2_hm_id);
                            $sl_member_2_member_photo_id = $sl_member_2_meta['member_photo'][0];
                            $sl_member_2_member_photo_src = wp_get_attachment_image_src($sl_member_2_member_photo_id, 'full');
                            $sl_member_2_about_member = $sl_member_2_meta['about_member'][0];
                            if(strlen($sl_member_2_about_member) > 200){
                               $sl_member_2_about_member = substr($sl_member_2_about_member, 0, 225).'...'; 
                            }
                            $sl_member_2_facebook_link_member = $sl_member_2_meta['facebook_link_member'][0];
                            $sl_member_2_twitter_link_member = $sl_member_2_meta['twitter_link_member'][0];
                            $sl_member_2_google_plus_link_member = $sl_member_2_meta['google_plus_link_member'][0];
                            $sl_member_2_skype_link = $sl_member_2_meta['skype_link'][0];
                                    ?>
					<div class="col-md-3 col-sm-6">
						<div class="first-team">
							<img src="<?php echo $sl_member_2_member_photo_src[0]; ?>" alt="<?php echo $sl_member_2_title; ?>" width="126" height="126" />
							<h4><?php echo $sl_member_2_title; ?></h4>
							<p><?php echo $sl_member_2_about_member;  ?></p>
							<ul class="social_icon">
                                                            
                                                        <?php if($sl_member_2_facebook_link_member !=''){ ?>	<li><a href="<?php echo $sl_member_2_facebook_link_member; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li><?php } ?>
							<?php if($sl_member_2_twitter_link_member !=''){ ?>	<li><a href="<?php echo $sl_member_2_twitter_link_member; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li><?php } ?>
							<?php if($sl_member_2_google_plus_link_member !=''){ ?>	<li><a href="<?php echo $sl_member_2_google_plus_link_member; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li><?php } ?>
							<?php if($sl_member_2_skype_link !=''){ ?>	<li><a href="<?php echo $sl_member_2_skype_link; ?>" target="_blank"><i class="fa fa-skype"></i></a></li><?php } ?>
							</ul>
							</ul>
						</div>
					</div>
                                    <?php 
                                    $sl_member_3_hm_id = $page_meta['sl_member_3_hm'][0];
                                     $sl_member_post = get_post($sl_member_3_hm_id);
                            //pr($portfolio_post);
                            $sl_member_3_title = $sl_member_post->post_title;                            
                            
                            $sl_member_3_meta = get_post_meta($sl_member_3_hm_id);
                            $sl_member_3_member_photo_id = $sl_member_3_meta['member_photo'][0];
                            $sl_member_3_member_photo_src = wp_get_attachment_image_src($sl_member_3_member_photo_id, 'full');
                            $sl_member_3_about_member = $sl_member_3_meta['about_member'][0];
                            if(strlen($sl_member_3_about_member) > 200){
                               $sl_member_3_about_member = substr($sl_member_3_about_member, 0, 225).'...'; 
                            }
                            $sl_member_3_facebook_link_member = $sl_member_3_meta['facebook_link_member'][0];
                            $sl_member_3_twitter_link_member = $sl_member_3_meta['twitter_link_member'][0];
                            $sl_member_3_google_plus_link_member = $sl_member_3_meta['google_plus_link_member'][0];
                            $sl_member_3_skype_link = $sl_member_3_meta['skype_link'][0];
                                    ?>
					<div class="col-md-3 col-sm-6">
						<div class="first-team">
							<img src="<?php echo $sl_member_3_member_photo_src[0]; ?>" alt="<?php echo $sl_member_3_title; ?>" width="126" height="126" />
							<h4><?php echo $sl_member_3_title; ?></h4>
							<p><?php echo $sl_member_3_about_member;  ?></p>
							<ul class="social_icon">
                                                            
                                                        <?php if($sl_member_3_facebook_link_member !=''){ ?>	<li><a href="<?php echo $sl_member_3_facebook_link_member; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li><?php } ?>
							<?php if($sl_member_3_twitter_link_member !=''){ ?>	<li><a href="<?php echo $sl_member_3_twitter_link_member; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li><?php } ?>
							<?php if($sl_member_3_google_plus_link_member !=''){ ?>	<li><a href="<?php echo $sl_member_3_google_plus_link_member; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li><?php } ?>
							<?php if($sl_member_3_skype_link !=''){ ?>	<li><a href="<?php echo $sl_member_3_skype_link; ?>" target="_blank"><i class="fa fa-skype"></i></a></li><?php } ?>
							</ul>
						</div>
					</div>
                                    <?php 
                                    $sl_member_4_hm_id = $page_meta['sl_member_4_hm'][0];
                                        $sl_member_post = get_post($sl_member_4_hm_id);
                            //pr($portfolio_post);
                            $sl_member_4_title = $sl_member_post->post_title;                            
                            
                            $sl_member_4_meta = get_post_meta($sl_member_4_hm_id);
                            $sl_member_4_member_photo_id = $sl_member_4_meta['member_photo'][0];
                            $sl_member_4_member_photo_src = wp_get_attachment_image_src($sl_member_4_member_photo_id, 'full');
                            $sl_member_4_about_member = $sl_member_4_meta['about_member'][0];
                            if(strlen($sl_member_4_about_member) > 200){
                               $sl_member_4_about_member = substr($sl_member_4_about_member, 0, 225).'...'; 
                            }
                            $sl_member_4_facebook_link_member = $sl_member_4_meta['facebook_link_member'][0];
                            $sl_member_4_twitter_link_member = $sl_member_4_meta['twitter_link_member'][0];
                            $sl_member_4_google_plus_link_member = $sl_member_4_meta['google_plus_link_member'][0];
                            $sl_member_4_skype_link = $sl_member_4_meta['skype_link'][0];
                                    ?>
					<div class="col-md-3 col-sm-6">
						<div class="first-team">
							<img src="<?php echo $sl_member_4_member_photo_src[0]; ?>" alt="<?php echo $sl_member_4_title; ?>" width="126" height="126" />
							<h4><?php echo $sl_member_4_title; ?></h4>
							<p><?php echo $sl_member_4_about_member;  ?></p>
							<ul class="social_icon">
                                                            
                                                        <?php if($sl_member_4_facebook_link_member !=''){ ?>	<li><a href="<?php echo $sl_member_4_facebook_link_member; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li><?php } ?>
							<?php if($sl_member_4_twitter_link_member !=''){ ?>	<li><a href="<?php echo $sl_member_4_twitter_link_member; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li><?php } ?>
							<?php if($sl_member_4_google_plus_link_member !=''){ ?>	<li><a href="<?php echo $sl_member_4_google_plus_link_member; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li><?php } ?>
							<?php if($sl_member_4_skype_link !=''){ ?>	<li><a href="<?php echo $sl_member_4_skype_link; ?>" target="_blank"><i class="fa fa-skype"></i></a></li><?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="subscribe_now">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-3"></div>
					<div class="col-md-6">
                                            <?php $heading_subscribe_hm = $page_meta['heading_subscribe_hm'][0];
                                            $subscribe_form_hm = $page_meta['subscribe_form_hm'][0];
                                            if($heading_subscribe_hm !=''){
                                            ?>
						<h2><?php echo $heading_subscribe_hm; ?></h2>
                                            <?php } ?>
                                                <?php  if($subscribe_form_hm !=''){              
                                                $form_shortcode = $subscribe_form_hm;
                                                //$form_shortcode = '[contact-form-7 id="108" title="Contact form 1" html_id="signup"]';
                                                echo do_shortcode($form_shortcode);
                                                }
                                                ?> 
					</div>
					<div class="col-md-3"></div>
				</div>
			</div>
		</div>
		

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
    jQuery(document).ready(function ($) {

jQuery(".wpcf7-form").find("p").contents().unwrap();

});
    </script>