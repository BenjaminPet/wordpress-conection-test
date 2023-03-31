<?php
//add_action( 'init', 'register_acf_blocks' );
//function register_acf_blocks() {
//    register_block_type( __DIR__ . '/blocks/text' );
//}

echo "iuguuuguguggugugugugugugugugggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg";

add_action( 'acf/init', 'hfm_acf_init_block_types' );
function hfm_acf_init_block_types() {
    if (function_exists('acf_register_block_type')) {
        
        // register our custom block
        acf_register_block_type( array(
            'name' => 'text',
            'title' => 'text',
            'description' => 'text',
            'render_template' => __dir__ . 'blocks/text/',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('text')

        ));
    }
}

function styles() {
    //wp_register_style( 'styles', get_stylesheet_directory_uri() . '/global.css');
    wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/global.css');
}
add_action( 'wp_enqueue_scripts', 'styles' );

add_action('wp_head',function(){
    echo get_stylesheet_directory_uri() . '/global.css';
});


?>