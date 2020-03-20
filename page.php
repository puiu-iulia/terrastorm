<?php
	/*
	* The template for disaplying all single posts
	*/
?>
<?php get_header() ?>

<?php if( have_posts() ) : while ( have_posts()) : the_post(); ?>
	<?php the_content() ?>

<?php endwhile; else : ?>
	<p><?php _e('Sorry, no pages matched your criteria'); ?></p>

<?php
endif;
?>

<!-- FOOTER SECTION -->
<?php get_footer() ?>
