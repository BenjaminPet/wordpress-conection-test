<?php 
/**
 * Text Block Template
 * 
 * @param    array        $block      The block settings and attributes.
 * @param    string       $content    The block inner HTML (empty).
 * @param    bool         $is_preview True During AJAX Preview.
 * @param    (int|string) $post_id    The Post ID this block is saved.
 */

print_r($block);


   // $text1 = $block['text'];
//echo $text1;


$text = get_field('text');

echo "kiuhuhuhuhuhuhuhiuhiugigiig"

?>
<p><?php echo $text; ?></p>