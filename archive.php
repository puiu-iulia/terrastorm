<?php
	/*
	* The template for displaying archive pages
	*/
?>
<?php get_header() ?>

<main class="container-fluid py-5">
      <div class="row">
        <div class="col-sm-8">
				<?php the_archive_title('<h3>', '<hr></h3>'); ?>
				<?php if( have_posts() ) : while ( have_posts()) : the_post(); ?>
          <div>
            <a href="<?php the_permalink(); ?>">
              <h2><?php the_title(); ?></h2>
            </a>
            <p><?php echo get_the_date('F j, Y'); ?> by <a href=""><?php the_author(); ?></a></p>
            <div class="pb-2">
              <i class="fas fa-tags"></i>
              <p class="d-inline"><?php the_tags('Tagged: ', ' ~ ') ?></p>
            </div>
            <div class="my-3">
              <?php the_post_thumbnail(); ?>
            </div>
            <p><?php the_excerpt() ?></p>
            <div class="mb-3">
              <a href="<?php the_permalink(); ?>">
                <?php _e('Read more...') ?>
              </a>
            </div>
					</div>
				<?php endwhile; else : ?>
	<p><?php _e('Sorry, no posts matched your criteria'); ?></p>

<?php
endif;
?>

  <nav>
    <ul class="nav">
      <li><?php next_posts_link(); ?></li> &nbsp;
      <li><?php previous_posts_link(); ?></li>
    </ul>
  </nav>
</div>

    <aside class="col-sm-4">
      <?php get_sidebar(); ?>
    </aside>

  </div><!-- /row -->
</main><!-- /container -->

<!-- FOOTER SECTION -->
<?php get_footer() ?>