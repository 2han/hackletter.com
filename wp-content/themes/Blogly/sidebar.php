<<<<<<< HEAD
<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package themefurnace
 */
?>
<div id="sidebarwrap">
<div id="sidebar">

<h2 class="sitetitle"><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
	<img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.png" width="214" height="53" alt="Hack Letter 半年先からのお便り">
</a></h2>

<div class="sidebarwidget medias">
<h3 class="sidebartitle">シリコンバレー主要メディア</h3>
<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
</div>

<div id="search" class="sidebarwidget widget_search">
<!-- <h3 class="sidebartitle">Site Search</h3> -->
<?php get_search_form(); ?>
</div>

<div class="asideCategoryList">
<ul>
	<?php 
		$arg = array('title_li' => '' );
		wp_list_categories($arg);
	?>
</ul>
</div>

<div class="sidebarwidget about">
<h3 class="sidebartitle">About Us</h3>
<ul>
	<li>
		<a href="">Our supporter</a>
	</li>
	<li>
		<a href="">シリコンバレーに挑戦する</a>
	</li>
	<li>
		<a href="">Hack Letterを応援する</a>
	</li>
</ul>
</div>

<div class="social-nav">
<ul>

<!-- facebook -->
<li>
	<a href="">
	<img src="<?php echo get_template_directory_uri(); ?>/img/common/facebook_bot.png" height="58" width="58" alt="facebookページリンクボタン">
</li>

<!-- twitter -->
<li>
<a href="">
	<img src="<?php echo get_template_directory_uri(); ?>/img/common/twitter_bot.png" height="58" width="58" alt="twitterページリンクボタン">
</li>
<!-- RSS -->
<li>
<a href="">
	<img src="<?php echo get_template_directory_uri(); ?>/img/common/rss_bot.png" height="58" width="58" alt="rssページリンクボタン">
</li>
</ul>
</div>
<!-- <div class="social-nav">
					<ul>
						<li>
							<svg>
								<title>RSS</title>
<link rel="stylesheet" href="http://www.webcreatorbox.com/wp-content/plugins/sitepress-multilingual-cms/res/css/language-selector.css?v=2.7.1" type="text/css" media="all"></link>
								<a xlink:href="http://www.webcreatorbox.com/feed/"><use xlink:href="#social-rss"></use></a>
							</svg>
						</li>

						<li>
							<svg>
								<title>Twitter</title>

<link rel="stylesheet" href="http://www.webcreatorbox.com/wp-content/plugins/sitepress-multilingual-cms/res/css/language-selector.css?v=2.7.1" type="text/css" media="all"></link>
								<a xlink:href="http://twitter.com/webcreatorbox/"><use xlink:href="#social-twitter"></use></a>
							</svg>
						</li>

						<li>
							<svg>
								<title>Facebook</title>
<link rel="stylesheet" href="http://www.webcreatorbox.com/wp-content/plugins/sitepress-multilingual-cms/res/css/language-selector.css?v=2.7.1" type="text/css" media="all"></link>
								<a xlink:href="http://facebook.com/webcreatorbox.fb/"><use xlink:href="#social-facebook"></use></a>
							</svg>
						</li>

						<li>
							<svg>
								<title>Google+</title>
<link rel="stylesheet" href="http://www.webcreatorbox.com/wp-content/plugins/sitepress-multilingual-cms/res/css/language-selector.css?v=2.7.1" type="text/css" media="all"></link>
								<a xlink:href="http://gplus.to/webcreatorbox/"><use xlink:href="#social-google"></use></a>
							</svg>
						</li>

					</ul>
				</div>
 -->
</div><!-- End Sidebar -->
=======
<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package themefurnace
 */
?>
<div id="sidebarwrap">
<div id="sidebar">

<?php if ( get_theme_mod( 'themefurnace_logo' ) ) : ?>
<p><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img class="logo" src='<?php echo esc_url( get_theme_mod( 'themefurnace_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' /></a></p>
<p><span class="tagline"><?php bloginfo( 'description' ); ?></span></p>
<?php else : ?>
<h2 class="sitetitle"><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h2>
<p><span class="tagline"><?php bloginfo( 'description' ); ?></span></p>
<?php endif; ?>

<div class="sidebarwidget">
<h3 class="sidebartitle"><?php _e( 'Menu', 'themefurnace' ); ?></h3>
<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
</div> 


<?php do_action( 'before_sidebar' ); ?>
<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

<div id="archives" class="sidebarwidget">
<h3 class="sidebartitle"><?php _e( 'Archives', 'themefurnace' ); ?></h3>
<ul>
<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
</ul>
</div>

<div id="meta" class="sidebarwidget">
<h3 class="sidebartitle"><?php _e( 'Meta', 'themefurnace' ); ?></h3>
<ul>
<?php wp_register(); ?>
<li><?php wp_loginout(); ?></li>
<?php wp_meta(); ?>
</ul>
</div>

<div id="search" class="sidebarwidget widget_search">
<h3 class="sidebartitle">Site Search</h3>
<?php get_search_form(); ?>
</div>

<?php endif; // end sidebar widget area ?>
        
</div><!-- End Sidebar -->
>>>>>>> 0cd45cbd976a218f9bff14fec45f6f4b8b4b021c
</div>