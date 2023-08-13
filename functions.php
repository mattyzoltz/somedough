<!-- functions.php -->
<?php
function somedough_theme_scripts() {
  wp_enqueue_style('somedough-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'somedough_theme_scripts');
