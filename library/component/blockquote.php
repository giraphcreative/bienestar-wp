<?php


function the_blockquote() {
    $image = get_sub_field('image');
    $content = get_sub_field('content');
    $image_inner = get_sub_field('image_inner');
    $type = get_sub_field('type');
    if ( !empty( $content ) ){
        ?>
    <div class="blockquote <?php print $type; ?>" <?php print( $type == 'image' ? 'style="background-image: url(' . $image . ');"' : '' ); ?>>
        <?php if ( !empty( $image_inner ) ) { ?>
        <div class="column-image">
            <img src="<?php print $image_inner ?>" />
        </div>
        <?php } ?>
        <div class="column-content">
            <?php print $content ?>
        </div>
    </div>
        <?php
    }
}

