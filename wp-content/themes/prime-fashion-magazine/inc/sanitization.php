<?php

function prime_fashion_magazine_sanitize_checkbox( $checked ) {
    return ( ( isset( $checked ) && true === $checked ) ? true : false );
}

/*------------------------------------------------------------------------*/

// Sanitize Font Weight
function prime_fashion_magazine_sanitize_font_weight( $value ) {
    $valid = array( '100', '200', '300', '400', '500', '600', '700', '800', '900', 'bold' );
    return in_array( $value, $valid ) ? $value : '400';
}

/*------------------------------------------------------------------------*/

// Sanitize Text Transform
function prime_fashion_magazine_sanitize_text_transform( $value ) {
    $valid = array( 'none', 'capitalize', 'uppercase', 'lowercase' );
    return in_array( $value, $valid ) ? $value : 'none';
}

/*------------------------------------------------------------------------*/

function prime_fashion_magazine_sanitize_theme_width($input) {
    // Define the valid options
    $valid = array('full-width', 'container-fluid', 'container');
    
    // Check if the input is in the array of valid options, otherwise return the default.
    if (in_array($input, $valid, true)) {
        return $input;
    }
    
    // Default fallback if the input is not valid.
    return 'full-width';
}

/*------------------------------------------------------------------------*/

function prime_fashion_magazine_sanitize_single_post_align($input) {
    // Define the valid options
    $valid = array('left-align', 'right-align', 'center-align');
    
    // Check if the input is in the array of valid options, otherwise return the default.
    if (in_array($input, $valid, true)) {
        return $input;
    }
    
    // Default fallback if the input is not valid.
    return 'left-align';
}

/*------------------------------------------------------------------------*/

    function prime_fashion_magazine_sanitize_choices( $input, $setting ) {
        global $wp_customize; 
        $control = $wp_customize->get_control( $setting->id ); 
        if ( array_key_exists( $input, $control->choices ) ) {
            return $input;
        } else {
            return $setting->default;
        }
    }

/*------------------------------------------------------------------------*/

    function prime_fashion_magazine_sanitize_choicess($input) {
    $valid = array(
        'Arial'          => 'Arial, sans-serif',
        'Verdana'        => 'Verdana, sans-serif',
        'Helvetica'      => 'Helvetica, sans-serif',
        'Times New Roman'=> '"Times New Roman", serif',
        'Georgia'        => 'Georgia, serif',
        'Courier New'    => '"Courier New", monospace',
        'Trebuchet MS'   => '"Trebuchet MS", sans-serif',
        'Tahoma'         => 'Tahoma, sans-serif',
        'Palatino'       => '"Palatino Linotype", serif',
        'Garamond'       => 'Garamond, serif',
        'Impact'         => 'Impact, sans-serif',
        'Comic Sans MS'  => '"Comic Sans MS", cursive, sans-serif',
        'Lucida Sans'    => '"Lucida Sans Unicode", sans-serif',
        'Arial Black'    => '"Arial Black", sans-serif',
        'Gill Sans'      => '"Gill Sans", sans-serif',
        'Segoe UI'       => '"Segoe UI", sans-serif',
        'Open Sans'      => '"Open Sans", sans-serif',
        'Roboto'         => 'Roboto, sans-serif',
        'Lato'           => 'Lato, sans-serif',
        'Montserrat'     => 'Montserrat, sans-serif',
    );

    return (array_key_exists($input, $valid)) ? $input : '';
}

/*------------------------------------------------------------------------*/

// Sanitize callback function
function prime_fashion_magazine_sanitize_post_layout($input) {
    $valid = array('one-column', 'right-sidebar', 'left-sidebar', 'three-column', 'four-column');

    if (in_array($input, $valid, true)) {
        return $input;
    }

    return 'right-sidebar'; // Default value if the input is invalid
}

/*------------------------------------------------------------------------*/

function prime_fashion_magazine_sanitize_scroll_top_alignment($input) {
    $valid = array('right-align', 'center-align', 'left-align');

    if (in_array($input, $valid, true)) {
        return $input;
    }

    return 'right-align'; 
}

/*------------------------------------------------------------------------*/

function prime_fashion_magazine_sanitize_pagination_alignment($input) {
    $valid = array('right-align', 'center-align', 'left-align');

    if (in_array($input, $valid, true)) {
        return $input;
    }

    return 'left-align'; 
}

/*------------------------------------------------------------------------*/