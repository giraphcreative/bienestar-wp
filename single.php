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
			endwhile;
		endif;
		?>
	</div>

<?php

get_footer();

?>