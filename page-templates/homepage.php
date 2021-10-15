<?php
/* Template Name: Home Page */
get_header();
?>
	<?php
	include get_template_directory() . '/template-parts/partials/home/whyus.php';
	include get_template_directory() . '/template-parts/partials/home/ourmenu.php';
	include get_template_directory() . '/template-parts/partials/home/popular-dishes.php';
	include get_template_directory() . '/template-parts/partials/home/book.php';
	include get_template_directory() . '/template-parts/partials/home/contact.php';
	?>
<?php get_footer(); ?>