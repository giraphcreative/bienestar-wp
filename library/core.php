<?php

// include the main.js script in the header on the front-end.
function p_scripts() {
	wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'p_scripts' );


// register a generic sidebar.
register_sidebar( array(
	'id' => 'sidebar-generic',
	'name'=> 'General Sidebar',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title"><h4>',
    'after_title' => '</h4></div>',
) );


// hide the editor from pages
add_action( 'init', 'hide_editor' );
function hide_editor() {
    remove_post_type_support('page', 'editor');
}


// function to display individual social icons
function theme_social_icon( $network ) {
	$social_link = get_field( 'social-' . $network, 'option' );
	if ( !empty( $social_link ) ) {
		?><a href="<?php print $social_link ?>" target="_blank"><img src="<?php bloginfo( 'template_url' ) ?>/img/social/<?php print $network ?>.svg" class="social-icon" /></a><?php
	}
}


// if languages are enabled
function languages_enabled() {
	if ( have_rows( 'languages', 'option' ) ) {
		return true;
	}
	return false;
}


// get languages
function get_languages() {
	$languages = get_field( 'languages', 'option' );
	return $languages;
}


// get the default language
function get_default_language() {
	$languages = get_languages();
	foreach ( $languages as $language ) {
		if ( $language['default'] ) return $language['abbreviation'];
	}
	return false;
}


// get the current language based on url
function get_current_language() {
	// loop through the languages
	foreach ( get_languages() as $language ) {
		if ( stristr( $_SERVER['REQUEST_URI'], '/' . $language['abbreviation'] . '/' ) ) {
			return $language['abbreviation'];
		}
	}
	return false;
}


// check if languages are enabled
if ( languages_enabled() ) {

	// get all the languages
	$languages = get_languages();

	// loop through them and register a menu location for each language
	foreach ( $languages as $language ) {
		// register only the main menu
		register_nav_menus( array( 'main-' . $language['abbreviation'] => 'Main (' . $language['name'] . ')' ) );

		// register only the footer menu
		register_nav_menus( array( 'footer-' . $language['abbreviation'] => 'Footer (' . $language['name'] . ')' ) );
	}

} else {

	// register main and footer menus for no-languages
	register_nav_menus( array( 'main' => 'Main' ) );
	register_nav_menus( array( 'footer' => 'Footer' ) );

}


// if there's a default language and we're on thge homepage, redirect to the default language
$default_language = get_default_language();
if ( $default_language && $_SERVER['REQUEST_URI'] == '/' ) {
	wp_redirect( '/' . $default_language );
	exit;
}
