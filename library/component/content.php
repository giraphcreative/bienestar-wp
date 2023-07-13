<?php


function the_content_area() {
    $content = get_sub_field('content');
    $style = get_sub_field('style');
    $before_footer = get_sub_field('before_footer');
    if ( !empty( $content ) ){
        ?>
    <div class="content-area <?php print $style; print ( $before_footer ? ' before-footer' : '' ) ?>">
        <?php print $content ?>
    </div>
        <?php
    }
}

