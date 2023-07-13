<?php

function the_header() {

    $image = get_sub_field('image');
    $title = get_sub_field('title');
    $color = get_sub_field('color');

    ?>
    <div class="page-header" style="background-image: url(<?php print $image; ?>);">
        <div class="page-header-content <?php print $color ?>">
            <div class="page-header-content-inner">
                <h1><?php print $title ?></h1>
            </div>
        </div>
    </div>
    <?php

}

