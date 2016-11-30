<?php
/*
Template Name: Project Grid (Page)
*/
?>
<?php 
	global $post;
	$settings = get_option('fivehundred_theme_settings');
	$display_count = $settings['home_projects'];
	$social_settings = maybe_unserialize(get_option('idsocial_settings'));
	$social_settings = $social_settings['theme_500'];
	$num_projects = wp_count_posts('ignition_product');
	$num_projects_pub = $num_projects->publish;
	if ($display_count < $num_projects_pub) {
		$show_more = 1;
	}
	else {
		$show_more = 0;
	}
	$url = site_url('/');
	$tagline = get_bloginfo('description'); 
	if ($social_settings) {
		$twitter = (isset($social_settings['twitter']) ? $social_settings['twitter'] : '');
		$fb = (isset($social_settings['fb']) ? $social_settings['fb'] : '');
		$google = (isset($social_settings['google']) ? $social_settings['google'] : '');
		$li = (isset($social_settings['li']) ? $social_settings['li'] : '');
		$via = (isset($social_settings['twitter_via']) ? $social_settings['twitter_via'] : '');
		$fbname = (isset($social_settings['fb_via']) ? $social_settings['fb_via'] : '');
		$gname = (isset($social_settings['g_via']) ? $social_settings['g_via'] : '');
		$liname = (isset($social_settings['li_via']) ? $social_settings['li_via'] : '');
		$about_us = (isset($social_settings['about']) ? $social_settings['about'] : '');
	}
	else {
		$via = null;
		$fbname = null;
		$gname = null;
		$liname = null;
		$twitter = null;
		$fb = null;
		$google = null;
		$li = null;
		$about_us = null;
	}
?>
<?php get_header(); ?>
<div id="container">
	<div id="site-description">
		<h1><?php the_title(); ?></h1>
	</div>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div id="content" class="fullwidth">
		<h2 class="entry-title"><?php _e('Featured Projects', 'fivehundred'); ?></h2>
			<?php get_template_part( 'nav', 'above-grid' ); ?>
			<?php do_action('fh_above_grid'); ?>
			<div id="project-grid">
					<?php get_template_part('loop', 'project'); ?>				
			</div>
			<?php do_action('fh_below_grid'); ?>
			<div style="clear: both;"></div>
			<div  id="home-sharing">
			<ul>
				<?php echo ($twitter == 1 ? '<li class="twitter-btn"><a href="http://twitter.com/'.$via.'" target="_blank" ><span>'.__('Follow', 'fivehundred').'</span></a></li>' : ''); ?>
				<?php echo ($fb == 1 ? '<li class="facebook-btn"><a href="http://www.facebook.com/'.$fbname.'" target="_blank"><span>'.__('Like', 'fivehundred').'</span></a></li>' : ''); ?>
				<?php echo ($google == 1 ? '<li class="gplus-btn"><a href="https://plus.google.com/'.$gname.'" target="_blank"><span>'.__('+1', 'fivehundred').'</span></a></li>' : ''); ?>
				<?php echo ($li == 1 ? '<li class="linkedin-btn"><a href="http://linkedin.com/in/'.$liname.'" target="_blank"><span>'.__('Connect', 'fivehundred').'</span></a></li>' : ''); ?>
				<!-- prob want to get category here -->
				<?php echo ($show_more ? '<li class="ign-more-projects"><a href="'.get_post_type_archive_link("ignition_product").'">'. __('View All', 'fivehundred').' <span>'.__('Projects', 'fivehundred').'</span></a></li>' : ''); ?>
			</ul>
			</div>
			<hr class="fancy" />
			<div id="about-us" class="entry-content">
				<div id="about"><?php echo $about_us; ?></div>
			</div>
			<div id="home-widget">
				<?php get_sidebar('home'); ?>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>
<?php get_footer(); ?>