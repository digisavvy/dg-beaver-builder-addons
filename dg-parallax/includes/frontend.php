<?php
$background = $settings->dg_field_parallax_image;

$image_id = $background;
$image_url = wp_get_attachment_image_src($background,'full');
$image_url = $image_url[0];
$font_size = $settings->dg_field_custom_font_size;
$heading = $settings->dg_field_parallax_heading;
$heading_color = $settings->dg_field_parallax_text_color;
$bgimg = 'background: url('.$image_url.');';
 
?>
<div id="js-parallax-window" class="parallax-window">
    <div class="parallax-static-content">
        <span class="parallax-heading" style="color:#<?php echo $heading_color; ?>; font-size:<?php echo $font_size; ?>px;">
            <?php echo $heading; ?>
        </span>
    </div>
    <div id="js-parallax-background" class="parallax-background" style="<?php echo $bgimg; ?>" ></div>

</div>
