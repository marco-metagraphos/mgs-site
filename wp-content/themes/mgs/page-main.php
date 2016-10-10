<?php
/**
 * Template for displaying pages
 * 
 * @package mgs
 */

get_header();

/*
Template name: Main Template
*/

$main_column_size = bootstrapBasicGetMainColumnSize();
?> 

<main id="main" class="site-main" role="main">
	<?php 
	while (have_posts()) {
		the_post();

		get_template_part('content', 'page');

		echo "\n\n";
		
		// If comments are open or we have at least one comment, load up the comment template
		if (comments_open() || '0' != get_comments_number()) {
			comments_template();
		}

		echo "\n\n";

	} //endwhile;
	?> 
</main>

<?php include ("formulario.php"); ?>
<?php get_footer(); ?>
<?php get_template_part( 'foot-scripts'); ?>