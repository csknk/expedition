<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <h2>archive-projects.php</h2>
  <?php get_template_part('templates/content'); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>