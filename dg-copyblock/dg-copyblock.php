<?php

class DGCopyBlockModuleClass extends FLBuilderModule {

	public function __construct()
	{
		parent::__construct(array(
			'name'            => __( 'Copy block', 'fl-builder' ),
			'description'     => __( 'A small chunk of text accompanying a photo.', 'fl-builder' ),
			'category'        => __( 'Advanced Modules', 'fl-builder' ),
			'dir'             => DG_MODULES_DIR . 'dg-copyblock/',
			'url'             => DG_MODULES_URL . 'dg-copyblock/',
			'editor_export'   => true, // Defaults to true and can be omitted.
			'enabled'         => true, // Defaults to true and can be omitted.
			'partial_refresh' => false, // Defaults to false and can be omitted.
		));
	}
}

// Registers settings for the above class's module
FLBuilder::register_module( 'DGCopyBlockModuleClass', array(
	'my-tab-1'      => array(
		'title'         => __( 'Tab 1', 'fl-builder' ),
		'sections'      => array(
			'my-section-1'  => array(
				'title'         => __( 'Section 1', 'fl-builder' ),
				'fields'        => array(
					'dg_field_headline'     => array(
						'type'          => 'text',
						'label'         => __( 'Headline', 'fl-builder' ),
					),
					'dg_field_copy'     => array(
						'label'         => __( 'Copy', 'fl-builder' ),
						'type'          => 'editor',
						'media_buttons' => true,
						'rows'          => 10
					),
					'dg_field_side_image' => array(
						'type'          => 'photo',
						'label'         => __('Side Image', 'fl-builder'),
						'show_remove'   => true
					),
					'dg_field_side_image_size' => array(
						'type'          => 'photo-sizes',
						'label'         => __('Side Image Sizes', 'fl-builder'),
						'default'       => 'large'
					),
				)
			)
		)
	)
) );