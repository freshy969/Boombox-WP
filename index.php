<!DOCTYPE html>
<html>
<head>

	<!--
	  ____    ____    ____   __  __  ____    ____ __   __
	 |  _ \  / __ \  / __ \ |  \/  ||  _ \  / __ \\ \ / /
	 | |_) || |  | || |  | || \  / || |_) || |  | |\ V / 
	 |  _ < | |  | || |  | || |\/| ||  _ < | |  | | > <  
	 | |_) || |__| || |__| || |  | || |_) || |__| |/ . \ 
	 |____/  \____/  \____/ |_|  |_||____/  \____//_/ \_\
	                                                                                                                                                 
	  Theme: Boombox, by Branberg (branberg.com)

	-->

	<meta charset="UTF-8">
	<title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>

	<?php $favicon = get_field('favicon','option'); if($favicon): ?>
		<link rel="icon" type="image/png" href="<?php echo $favicon; ?>" />
	<?php else: ?>
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() . '/library/img/favicon.png' ?>" />
	<?php endif; ?>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Social meta tags -->
	<meta name="description" content="Boombox is a simple, one-page theme that was created specifically for musicians." />
	<meta property="og:title" content="<?php the_title(); ?> | <?php bloginfo('name'); ?>" />
	<meta property="og:type" content="profile" />
	<meta property="og:url" content="<?php bloginfo('wpurl'); ?>" />
	<meta property="og:image" content="http://example.com/image.jpg" />
	<meta property="og:description" content="Boombox is a simple, one-page theme that was created specifically for musicians." />

	<?php wp_head(); ?>

	<style type="text/css"><?php include_once('includes/custom_styles.php'); ?></style>

</head>
<body>

	<div id="site_wrap">

		<div id="overlay_color"></div>

		<div id="mobile_header">
			<div id="mobile_menu_toggle">
				<i class="icon-menu"></i>
			</div>
			<span id="mobile_site_title"><?php bloginfo('name'); ?></span>
		</div>
		<header id="main_header" class="site_header">
			<div class="wrap">
				<div id="logo_wrap">
					<a href="<?php bloginfo('wpurl'); ?>" id="logo">

						<?php $logo = get_field('logo', 'option'); ?>
						<?php if( $logo ): ?>
							<img src="<?php echo $logo['url']; ?>" alt="<?php bloginfo('name'); ?>" />
						<?php else: ?>
							<?php bloginfo('name'); ?>
						<?php endif; ?>

					</a>
				</div>
				<nav id="header_nav" class="clearfix">

					<?php wp_nav_menu( array(

						'menu_id' => 'menu_links',
						'theme_location' => 'main-nav',
						'container' => '',
						'menu_class' => '',
						'fallback_cb' => 'boombox_main_menu'

					)); ?>

					<?php if( have_rows('social_icons', 'option') ): ?>
						<ul id="social_links">
							<?php while ( have_rows('social_icons', 'option') ) : the_row(); ?>
								<?php $network = get_sub_field('social_network'); ?>
								<li class="<?php echo $network; ?>"><a href="<?php the_sub_field('link_url'); ?>" target="_blank"><i class="icon-<?php echo $network; ?>"></i></a></li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>

				</nav>
			</div>
		</header>

		<div id="page_sections">

			<?php if( is_front_page() ): ?>

				<?php if( have_rows('sections') ): ?>

					<?php while ( have_rows('sections') ) : the_row(); ?>

						<?php if( get_row_layout() == 'soundcloud_feature' ): ?>

							<div class="page_section music_section first">
								<div class="wrap">
									<div class="album clearfix">
										<div class="soundcloud_embed">
											<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/137894105&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
										</div>
										<div class="album_info_wrapper">
											<div class="album_info">
												<span class="album_type"><?php the_sub_field('feature_type'); ?></span>
												<h3 class="album_title"><?php the_sub_field('feature_title'); ?></h3>
												<div class="album_description">
													<p><?php the_sub_field('feature_description'); ?></p>
												</div>
												<a href="<?php the_sub_field('button_url'); ?>" class="album_button" target="_blank"><?php the_sub_field('button_text'); ?></a>
											</div>
										</div>
									</div>
								</div>
							</div>

						<?php elseif( get_row_layout() == 'video_embed' ): ?>

							<div class="page_section videos_section">
								<div class="wrap">
									<div class="video_embed">
										<!-- This embed is responsive thanks to Fitvids! http://fitvidsjs.com/ -->
										<?php the_sub_field('video_embed_code'); ?>
									</div>
								</div>
							</div>

						<?php elseif( get_row_layout() == 'custom_text' ): ?>

							<div class="page_section text_section">
								<div class="wrap">
									<div class="text_content">
										<?php the_sub_field('text_field'); ?>
									</div>
								</div>
							</div>

						<?php elseif( get_row_layout() == 'photo_gallery' ): ?>

							<div class="page_section photos_section">
								<div class="wrap">
									<div class="photo_gallery">
										<?php
											$photos = get_sub_field('photos');
											if($photos):
										?>
											<ul class="clearfix">
												<?php foreach( $photos as $photo ): ?>
													<li>
														<a href="<?php echo $photo['url']; ?>" title="<?php echo $photo['title']; ?>" class="lightbox" data-lightbox-gallery="homepagephotos">
															<img src="<?php echo $photo['sizes']['gallery-photo']; ?>" alt="<?php echo $photo['alt']; ?>" />
														</a>
													</li>
												<?php endforeach; ?>
											</ul>
										<?php endif; ?>
									</div>
								</div>
							</div>

						<?php endif; ?>

					<?php endwhile; ?>

				<?php else: ?>

					<div class="page_section placeholder_section">
						<div class="wrap">
							<div class="placeholder_copy">
								<h1>Theme successfully installed!</h1>
								<p>This is just a placeholder section, please log into your dashboard, navigate to "Pages > Home" and click the "Add Section" button.</p>
								<?php edit_post_link('Add Sections Now!'); ?>
							</div>
						</div>
					</div>

				<?php endif; ?>

			<?php elseif( is_home() ): //output standard pages ?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="page_section text_section">
						<div class="wrap">
							<header class="section_header"><h2><?php the_title(); ?></h2></header>
							<div class="text_content">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				<?php endwhile; endif; ?>

			<?php elseif( is_page() || is_single() ): //output standard pages ?>

				<div class="page_section text_section">
					<div class="wrap">
						<header class="section_header"><h2><?php the_title(); ?></h2></header>
						<div class="text_content">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<?php the_content(); ?>
							<?php endwhile; else: ?>
								<p>Sorry, this page has no content or does not exist yet...</p>
							<?php endif; ?>
						</div>
					</div>
				</div>

			<?php endif; ?>

		</div>

		<footer class="site_footer">
			<div class="wrap">
				
				<?php if( get_field( 'mailing_list_visibility', 'option' ) == "On" ): ?>
					<div class="mailing_list">
						<span class="mailing_list_title"><?php the_field( 'mailing_list_title', 'option' ); ?></span>
						<form>
							<input type="text" placeholder="<?php the_field( 'mailing_list_placeholder_text', 'option' ); ?>" />
							<input type="submit" value="<?php the_field( 'mailing_list_button_text', 'option' ); ?>" />
						</form>
					</div>
				<?php endif; ?>

				<div class="credits">
					<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - All Rights Reserved</p>
				</div>

			</div>
		</footer>

	</div><!-- / #site_wrap -->

	<?php if(is_user_logged_in()): ?>

		<div id="user_controls">
			<ul>
				<li><a href="<?php bloginfo('wpurl'); ?>/wp-admin/index.php" title="Go To Dashboard"><i class="icon-home"></i></a></li>
				<li><a href="<?php echo get_edit_post_link(); ?>" title="Edit Page Content"><i class="icon-cog"></i></a></li>
				<li><a href="<?php bloginfo('wpurl'); ?>/wp-admin/admin.php?page=acf-options" title="Edit Site Styles"><i class="icon-tint"></i></a></li>
			</ul>
		</div>

	<?php endif; ?>

	<?php wp_footer(); ?>

</body>
</html>