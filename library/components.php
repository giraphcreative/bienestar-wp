<?php


// include components
require_multi( 
    'component/header', 'component/floating-buttons', 'component/slides','component/icons', 'component/blockquote', 'component/separator', 'component/content', 'component/content-two', 'component/icon-boxes', 'component/accordions', 'component/post-list',  'component/spacer' );


function the_components() {

    // if we have components for this page
    if( have_rows('components') ):
        
        // loop through the components
        while ( have_rows('components') ) : the_row();

            // layout switch
            if ( get_row_layout() == 'header' ):
                the_header();

            elseif ( get_row_layout() == 'floating_buttons' ): 
                the_floating_buttons();

            elseif ( get_row_layout() == 'slides' ): 
                the_slides();
            
            elseif ( get_row_layout() == 'separator' ): 
                the_separator();
                    
            elseif ( get_row_layout() == 'spacer' ): 
                the_spacer();
                
            elseif ( get_row_layout() == 'content' ): 
                the_content_area();

            elseif ( get_row_layout() == 'content-two' ): 
                the_content_two_column();
                
            elseif ( get_row_layout() == 'icons' ): 
                the_icons();

            elseif ( get_row_layout() == 'icon_boxes' ): 
                the_icon_boxes();
    
            elseif ( get_row_layout() == 'blockquote' ): 
                the_blockquote();
                
            elseif ( get_row_layout() == 'accordions' ): 
                the_accordions();
            
            elseif ( get_row_layout() == 'post_list' ): 
                the_post_list();
                            
            endif;

        // End loop.
        endwhile;

    endif;

}


