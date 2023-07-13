<?php


function the_separator() {
    $color = get_sub_field( 'color' );
    $size = get_sub_field( 'size' );
    print '<div class="separator ' . $color . ' ' . $size . '"></div>';
}

