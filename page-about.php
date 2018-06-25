<?php
/*
  Template Name: About Page
 */

get_header();
?>
  <h1>About Page</h1>
  <?php get_template_part('template-parts/content','reusable') ?>

<?php
// get_sidebar();
load_about_scripts();
get_footer();
