<?php
/**
 * @package WordPress
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>

<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h2 class="comments-title">
		<?php
			printf( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'twentyfifteen' ),
				number_format_i18n( get_comments_number() ), get_the_title() );
		?>
	</h2>
	
	<ol class="comment-list">
		<?php
			wp_list_comments( array(
				'style'       => 'ol',
				'short_ping'  => true,
				'avatar_size' => 56,
			) );
		?>
	</ol><!-- .comment-list -->
	
	
	<div class="navigation">
		<div class="pull-left">
			<?php previous_comments_link() ?>
		</div>
		<div class="pull-right">
			<?php next_comments_link() ?>
		</div>
	</div>
	
<?php else : ?>
	<?php if ('open' == $post->comment_status) : ?>
	<!-- If comments are open, but there are no comments. -->
	
	<?php else : // comments are closed ?>
	<!-- If comments are closed. -->
	<p class="nocomments">Comments are closed.</p>
	<?php endif; ?>
<?php endif; ?>
<!-- end if have comments -->


<?php comment_form($args); ?>