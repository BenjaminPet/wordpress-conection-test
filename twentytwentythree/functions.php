<?php
add_action( 'acf/init', 'hfm_acf_init_block_types' );
//function register_acf_blocks() {
//    register_block_type( __DIR__ . '/blocks/text' );
//}

function hfm_acf_init_block_types() {
    if (function_exists('acf_register_block_type')) {
        
        // register our custom block
        acf_register_block_type( array(
            'name' => 'test',
            'title' => 'test',
            'description' => 'test',
            'render_template' => 'blocks/text/text.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('text')

        ))
    }
}
?>