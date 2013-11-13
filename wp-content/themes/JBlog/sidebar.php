<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage JBoil
 * 
 */
?>

<div id="jboil-sidebar" class="widget-area col-md-4" role="complementary">
	<ul>
	<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	 ?>

	<?php if (dynamic_sidebar( 'primary-widget-area' )) : else :   ?>
		<li id="search" class="jboil-widget-container widget_search">
			<?php get_search_form(); ?>
		</li>

		<?php the_widget("JBoil_RecentPosts_Widget"); ?>
	<?php endif; ?>
	
	</ul>
</div><!-- #primary .widget-area -->