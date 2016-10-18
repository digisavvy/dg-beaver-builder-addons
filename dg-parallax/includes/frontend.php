<?php
$background = $settings->dg_field_parallax_image;

$image_id = $background;
$image_url = wp_get_attachment_image_src($background,'full');
$image_url = $image_url[0];

$bgimg = 'background: url('.$image_url.');';
 
?>
<div id="js-parallax-window" class="parallax-window">
    <div class="parallax-static-content">
        <b>Parallax Window</b>
    </div>
    <div id="js-parallax-background" class="parallax-background" style="<?php echo $bgimg; ?>" ></div>

</div>
