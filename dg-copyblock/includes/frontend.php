<?php
$background = $settings->dg_field_side_image;

$image_id = $background;
$image_url = wp_get_attachment_image_src($background,'full');
$image_url = $image_url[0];

$bgimg = 'background: url('.$image_url.');';
$bgsize = 'background-size: cover;';
$repeat = 'background-repeat: no-repeat;';
$border_bottom = 'border-bottom: 1px solid rgba(38, 74, 38, 0.2);';
$display = 'display: block;';
$minh = 'min-height: 12em;';
$padding = "padding: 3em;";

?>

<div class="side-image">
	<div class="images-wrapper" style="<?php echo $bgimg, $bgsize, $repeat, $border_bottom, $minh, $padding;  ?>"></div>
	<div class="side-image-content">
		<h4><?php echo $settings->dg_field_headline; ?></h4>
		<?php echo $settings->dg_field_copy; ?>
	</div>
</div>