<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage JBoil
 * 
 */

get_header(); ?>
	
	<div id="body_wrapper" class="container_24">
		
		<!-- The next three statements load slider.php, buckets.php and main-message.php respectively --!>

		
		<?php get_template_part("main-message"); ?>
			
			
	</div><!-- #body_wrapper -->

<?php get_footer(); ?>