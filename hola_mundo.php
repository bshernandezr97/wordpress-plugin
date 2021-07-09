<?php
/*
Plugin Name: [hola_mundo]
Version: 1.0
Description: Imprime un div con Hola mundo por defecto, con el argumento content puedes cambiar este valor [hola_mundo content="Mi Contenido"].
Author: Brayan Hernandez
Author URI: https://github.com/bshernandezr97
*/


    add_shortcode( 'hola_mundo', 'hola_mundo_handler' );

    function hola_mundo_handler( $atts ) {
        $a = shortcode_atts( array(
        'content' => 'Hola mundo',
        ), $atts );
        $output = '<div>'.esc_attr($a['content']).'</div>';
        return $output;
    }


?>