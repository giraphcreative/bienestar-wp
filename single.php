<?php
/**
 * The Template for displaying all single posts
 */

get_header();

the_showcase();

?>

	<div class="separator sea medium"></div>
	<div class="content-area before-footer" role="main">
		<?php 
		if ( have_posts() ) :
			while ( have_posts() ) : the_post(); 
				?>
				<div class="post-list-title">
					<h2 class="lime"><?php the_title(); ?></h2>
				</div>
				<?php
				the_content();
				?>
				<?php
			endwhile;
		endif;
		?>
		<div class="post-navigation"><?php print str_replace( 'rel="prev">', 'rel="prev" class="prev btn cyan">&laquo; ', get_previous_post_link( '%link' ) ); ?> <?php print str_replace( 'rel="next"', 'rel="next" class="next btn cyan"', str_replace( '</a>', ' &raquo;</a>', get_next_post_link( '%link' ) ) ); ?></div>
	</div>

<?php

get_footer();

?>