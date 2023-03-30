<?php
add_action( 'init', 'register_acf_block' );
function register_acf_blocks() {
   register_block_type( __DIR__ . '/blocks/text' );
}


//add_action( 'acf/init', 'hfm_acf_init_block_types' );
//function hfm_acf_init_block_types() {
//    if (function_exists('acf_register_block_type')) {
        
        // register our custom block
  //      acf_register_block_type( array(
    //        'name' => 'text',
      //      'title' => 'text',
        //    'description' => 'text',
          //  'render_template' => __dir__ . 'blocks/text/',
   //         'category' => 'formatting',
     //       'icon' => 'admin-comments',
     //       'keywords' => array('text')

       // ));
    //}
//}
?>