<?php


// output the icons
function the_accordions() {

    // get the icon background color
    $intro = get_sub_field( 'intro' );

    // check if the nested repeater field has rows of data
    if( have_rows('accordion') ):
        ?>
        <div class="accordions">
            <?php print ( !empty( $intro ) ? '<div class="accordions-intro">' . $intro . '</div>' : '' ); ?>
            <div class="accordions-inner">

        <?php
        // loop through the rows of data
        while ( have_rows('accordion') ) : the_row();

            $title = get_sub_field('title');
            $content = get_sub_field('content');
            $color = get_sub_field('color');
            $open = get_sub_field('open');
            print '<div class="accordion ' . ( $open ? 'open' : '' ) . ' ' . $color . '">
                <div class="accordion-title">' . $title . '</div>
                <div class="accordion-content"' . ( $open ? 'style="display: block;"' : '' ) . '>' . $content . '</div>
            </div>';

        endwhile;

        ?>
            </div>
        </div>
        <?php
    endif;
    
}


