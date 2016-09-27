<?php
$background = $settings->dg_field_side_image;
$bgimg = 'background: url();';
$bgsize = 'background-size: cover;';
$repeat = 'background-repeat: no-repeat;';
$border_bottom = 'border-bottom: 1px solid rgba(38, 74, 38, 0.2);';
$display = 'display: block;';
$minh = 'min-height: 12em;';
$padding = "padding: 3em;";
 
?>

<?php // var_dump($background); ?>
<div class="side-image">
<figure>
	<?php echo $background; ?>
	<?php var_dump($display); ?>
	<?php // echo $src; ?>
</figure>

	<div class="images-wrapper" style="<?php echo $bgimg, $bgsize, $repeat, $border_bottom, $display, $minh, $padding;  ?>"></div>
	<div class="side-image-content">
		<h4><?php echo $settings->dg_field_headline; ?></h4>
		<?php echo $settings->dg_field_copy; ?>
	</div>
</div>