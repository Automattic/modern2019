<?php

// Our filter callback function
function modern2019_primary_color_hue() {
    // Hue
    return 330;
}
add_filter( 'twentynineteen_default_hue', 'modern2019_primary_color_hue' );
add_filter( 'twentynineteen_custom_colors_hue', 'modern2019_primary_color_hue' );

// Our filter callback function
function modern2019_primary_color_saturation() {
    // Saturation
    return 53;
}
add_filter( 'twentynineteen_default_saturation', 'modern2019_primary_color_saturation' );
add_filter( 'twentynineteen_custom_colors_saturation', 'modern2019_primary_color_saturation' );

// Our filter callback function
function modern2019_primary_color_lightness() {
    // Lightness
    return 50;
}
add_filter( 'twentynineteen_default_lightness', 'modern2019_primary_color_lightness' );
add_filter( 'twentynineteen_custom_colors_lightness', 'modern2019_primary_color_lightness' );
