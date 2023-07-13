<?php


function the_content_two_column() {
    $content_one = get_sub_field('content_one');
    $content_two = get_sub_field('content_two');
    $style = get_sub_field('style');
    if ( !empty( $content_one ) && !empty( $content_two ) ){
        ?>
    <div class="content-two-column <?php print $style; ?>">
        <div class="content-columns">
            <div class="column-one">
                <?php print $content_one ?>
            </div>
            <div class="column-two">
                <?php print $content_two ?>
            </div>
        </div>
    </div>
        <?php
    }
}

