<?php


// output the floating buttons
function the_floating_buttons() {

    // check if the nested repeater field has rows of data
    if( have_rows('button') ):

        // open the container
        print '<div class="floating-buttons">';

        // loop through the rows of data
        while ( have_rows('button') ) : the_row();

            $text = get_sub_field( 'text' );
            $link = get_sub_field('link');
            $color = get_sub_field('color');
            print '<a href="' . $link . '" class="btn ' . $color . '">' . $text . '</a>';

        endwhile;

        // close container
        print '</div>';

    endif;
    
}

