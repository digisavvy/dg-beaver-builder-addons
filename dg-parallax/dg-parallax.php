<?php

class DGParallaxModuleClass extends FLBuilderModule {

	public function __construct()
	{
		parent::__construct(array(
			'name'            => __( 'Parallax Block', 'fl-builder' ),
			'description'     => __( 'A block of parallax-y stuff.', 'fl-builder' ),
			'category'        => __( 'Advanced Modules', 'fl-builder' ),
			'dir'             => DG_MODULES_DIR . 'dg-parallax/',
			'url'             => DG_MODULES_URL . 'dg-parallax/',
			'editor_export'   => true, // Defaults to true and can be omitted.
			'enabled'         => true, // Defaults to true and can be omitted.
			'partial_refresh' => false, // Defaults to false and can be omitted.
		));
	}
}

// Registers settings for the above class's module
FLBuilder::register_module( 'DGParallaxModuleClass', array(
	'my-tab-1'      => array(
		'title'         => __( 'Tab 1', 'fl-builder' ),
		'sections'      => array(
			'my-section-1'  => array(
				'title'         => __( 'Section 1', 'fl-builder' ),
				'fields'        => array(
                    'dg_field_parallax_heading' => array(
                        'type'          => 'text',
                        'label'         => __('Heading', 'fl-builder'),
                        'description'   => 'Copy that overlays your parallax image'
                    ),
                    'dg_field_font_size'     => array(
                        'type'          => 'select',
                        'label'         => __('Font Size', 'fl-builder'),
                        'default'       => 'default',
                        'options'       => array(
                            'default'       =>  __('Default', 'fl-builder'),
                            'custom'        =>  __('Custom', 'fl-builder')
                        ),
                        'toggle'        => array(
                            'custom'        => array(
                                'fields'        => array('dg_field_custom_font_size')
                            )
                        )
                    ),
                    'dg_field_custom_font_size' => array(
                        'type'          => 'text',
                        'label'         => __('Custom Font Size', 'fl-builder'),
                        'default'       => '24',
                        'maxlength'     => '3',
                        'size'          => '4',
                        'description'   => 'px'
                    ),
                    'dg_field_parallax_text_color' => array(
                        'type'          => 'color',
                        'label'         => __( 'Text Overlay Color', 'fl-builder' ),
                        'default'       => '333333',
                        'show_reset'    => true
                    ),
					'dg_field_parallax_image' => array(
						'type'          => 'photo',
						'label'         => __('Parallax Image', 'fl-builder'),
						'show_remove'   => true
					),
                    'dg_field_parallax_image_sizes' => array(
                        'type'          => 'photo-sizes',
                        'label'         => __('Image Size', 'fl-builder'),
                        'default'       => 'medium'
                    ),
				)
			)
		)
	)
) );