<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1" />

<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo( 'sitename' ) ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
<link href="<?php bloginfo( "template_url" ) ?>/css/main.css?v=5" rel="stylesheet" type="text/css">

</head>
<body <?php body_class(); ?>>
<div class="container">

<?php if ( get_default_language() ) { ?>
<div class="languages floating-buttons">
	<?php
	// colors for the language buttons
	$colors = array( 'sea', 'lime', 'cyan' );

	// increment per language
	$count = 0;

	// loop through languages
	foreach ( get_languages() as $language ) {

		// output buttons
		print '<a href="/' . $language['abbreviation'] . '" class="btn ' . $colors[$count] . '">' . $language['name'] . '</a>';

		// increment increase
		$count++;

	}
	?>
</div>
<?php } ?>
<header>

	<div class="wrap">
	
		<div class="logo">
			<a href="/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php the_field( 'logo_header', 'option' ) ?>" alt="<?php bloginfo( 'name' ); ?>">
			</a>
		</div>

	</div>

	<nav>
		<button class="menu-toggle">Show/hide Menu</button>
		<?php 
		// if we have a default language
		if ( get_default_language() ) {
			// check the url for a language string, and output that menu
			wp_nav_menu( array( 'theme_location' => 'main-' . get_current_language() , 'menu_class' => 'nav-menu' ) );
		} else {
			// display the default menu
			wp_nav_menu( array( 'theme_location' => 'main', 'menu_class' => 'nav-menu' ) );
		}
		?>
	</nav>
	
</header>

<section class="content">
	<a name="content"></a>
