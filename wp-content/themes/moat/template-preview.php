<?php
/**
 * Template Name: Preview
 */
?>
<?php get_template_part('templates/main-banner', 'page'); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php get_template_part('templates/information-area', 'page'); ?>
  <?php get_template_part('templates/contact-band', 'page'); ?>
  <?php get_template_part('templates/feature-area', 'page'); ?>
  <?php get_template_part('templates/block', 'page'); ?>
<?php endwhile; ?>