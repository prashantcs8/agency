<div class="posts">
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post() ?>
		<article>
			<hgroup>
				<h2 class="blog_post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			</hgroup>
			<?php
                                $format = get_option('date_format');
                                $news_creation_date = get_the_date($format, $post->ID);
                                ?>
			<div class="blog_creation_info">
                            <?php $author = get_the_author(); echo '<em>'.$news_creation_date . '</em> By <em>'. $author.'</em>'; ?>
                        </div>
			
			 <?php 
                               if (has_post_thumbnail($post->ID)) {
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                                    ?>
                <a href="<?php the_permalink(); ?>"><img src="<?php echo bfiThumb_src($image[0], 842, 450); ?>" alt="<?php echo $title; ?>"/></a>
                                    <?php
                                }
                               
                               ?>
			
			<div class="blog_post_content">
									<p><?php echo excerpt(55); ?> </p>
                        <div class="text-center"><a class="read-article" href="<?php echo get_permalink(); ?>">Read More</a></div>
                                </div>
		</article>
		
		<?php endwhile; ?>
		<?php if (function_exists("pagination")) {
			pagination($additional_loop->max_num_pages);
		} ?>
	<?php endif; ?>
</div>