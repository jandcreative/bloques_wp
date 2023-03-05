<?php
/**
 * Banner Block Template.
 */

 $anchor = '';
 if ( !empty( $block['anchor'] ) ):
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
 endif;

 $class_name = 'jda-banner';
 if( !empty($block['className'] ) ):
    $class_name .= ' ' . esc_attr( $block['className'] );
 endif;

if(!empty($block['align'])):
   $class_name .= ' align' . esc_attr($block['align']);
endif;


// ACF Fields
$title = get_field('jda_banner_title');
?>

<div <?php echo $anchor;?>class="<?php echo $class_name;

?>">


 <?php if(!empty ( $title)) : ?>
    <div class="intro-text">
          <h1><?php echo $title; ?></h1>
        
    </div>

    <?php endif;?>
        
</div>


