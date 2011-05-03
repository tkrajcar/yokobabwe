<?php
/**
 * Template Name: Full-width, no sidebar
 * Description: A full-width template with no sidebar
 *
 * @package WordPress
 * @subpackage Yoko
 */

get_header(); ?>

<div id="wrap">

		<div id="primary" class="full-width">
			<div id="content" style="width: 100%;">

				<?php the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				
				<?php comments_template( '', true ); ?>

				
<?php get_footer(); ?>