<article id="post-<?php the_ID(); ?>" <?php post_class('post__holder'); ?>>

	<!-- Post Content -->
	<div class="post_content">
		<?php the_content('<span>' . theme_locals('continue_reading') . '</span>'); ?>
		<!--// Post Content -->
		<div class="clear"></div>
	</div>
</article><!--//.post__holder-->