<?php


// output the icons
function the_icons() {

    $icons_intro = get_sub_field( 'icons_intro' );
    $icons_after = get_sub_field( 'icons_after' );

    // check if the nested repeater field has rows of data
    if( have_rows('icon') ):

        // open the container
        print '<div class="icons-container">';

        // output the content before the icons section
        if ( !empty( $icons_intro ) ) print '<div class="icons-intro">' . $icons_intro . '</div>';

        print '<div class="icons">';

        // loop through the rows of data
        while ( have_rows('icon') ) : the_row();

            $image = get_sub_field('image');
            $image_treatment = get_sub_field('image_treatment');
            $icon = get_sub_field('icon');
            $title = get_sub_field('title');
            $button_text = get_sub_field( 'button_text' );
            $link = get_sub_field('link');
            $color = get_sub_field('color');
            echo '<div class="icon ' . $color . ( $image_treatment ? ' no-image-treatment' : '' ) . '">' . 
                ( !empty( $image ) ? '<div class="icon-image"><img src="' . $image . '" /></div>' : '' ) . 
                '<div class="icon-container"><img src="' . $icon . '" /></div><h4>' . $title . '</h4>' . 
                ( !empty( $link ) && !empty( $button_text ) ? '<a href="' . $link . '" class="icon-button">' . $button_text . '</a>' : '' ) . 
                '</div>';

        endwhile;

        // close icons section
        print '</div>';

        // content after icons
        if ( !empty( $icons_after ) ) print '<div class="icons-after">' . $icons_after . '</div>';

        // close container
        print '</div>';

    endif;
    
}

