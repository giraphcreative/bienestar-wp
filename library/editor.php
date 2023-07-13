<?php


// adjust the wysiwyg editor buttons
add_filter( 'mce_buttons', 'pure_buttons', 10, 2 );
 

// add style select dropdown button before all others
function pure_buttons( $buttons, $editor_id ){
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}


// 
/* Filter  */
add_filter( 'tiny_mce_before_init', 'my_wpeditor_formats_options' );
 
/**
 * Override Formats Options in the Drop Down
 */
function my_wpeditor_formats_options( $settings ){
 
    /* List all options as multi dimension array */
    $style_formats = array(
        array(
            'title'   => 'Heading 1',
            'block'   => 'h1',
        ),
        array(
            'title'   => 'Heading 2 (Sea)',
            'block'   => 'h2',
            'classes' => 'sea',
        ),
        array(
            'title'   => 'Heading 2 (Cyan)',
            'block'   => 'h2',
            'classes' => 'cyan',
        ),
        array(
            'title'   => 'Heading 2 (Lime)',
            'block'   => 'h2',
            'classes' => 'lime',
        ),
        array(
            'title'   => 'Heading 2 (Grey)',
            'block'   => 'h2',
            'classes' => 'grey',
        ),
        array(
            'title'   => 'Heading 3',
            'block'   => 'h3',
        ),
        array(
            'title'   => 'Heading 4',
            'block'   => 'h4',
        ),
        array(
            'title'   => 'Paragraph',
            'block'   => 'p',
        ),
        array(
            'title'   => 'Paragraph (Quiet)',
            'block'   => 'p',
            'classes' => 'quiet'
        ),
    );
 
    /* Add it in tinymce confTitleig as json data */
    $settings['style_formats'] = json_encode( $style_formats );
    return $settings;
}