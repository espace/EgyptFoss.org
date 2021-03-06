<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_service-fields',
		'title' => 'Service Fields',
		'fields' => array (
			array (
				'key' => 'field_57a74be0a9665',
				'label' => 'Theme',
				'name' => 'theme',
				'type' => 'taxonomy',
				'required' => 0,
				'taxonomy' => 'theme',
				'field_type' => 'select',
				'allow_null' => 1,
				'load_save_terms' => 0,
				'return_format' => 'id',
				'multiple' => 0,
			),
			array (
				'key' => 'field_57a33f8ba98cd',
				'label' => 'Category',
				'name' => 'service_category',
				'type' => 'taxonomy',
				'required' => 1,
				'taxonomy' => 'service_category',
				'field_type' => 'select',
				'allow_null' => 1,
				'load_save_terms' => 1,
				'return_format' => 'id',
				'multiple' => 0,
			),
			array (
				'key' => 'field_57a74c61a9667',
				'label' => 'Constraints',
				'name' => 'constraints',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_57a74e7b01fee',
				'label' => 'Conditions',
				'name' => 'conditions',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_57a74c76a9668',
				'label' => 'Technologies',
				'name' => 'technology',
				'type' => 'taxonomy',
				'taxonomy' => 'technology',
				'field_type' => 'multi_select',
				'allow_null' => 1,
				'load_save_terms' => 1,
				'return_format' => 'id',
				'multiple' => 1,
			),
			array (
				'key' => 'field_57a74ca9a9669',
				'label' => 'Related Interests',
				'name' => 'interest',
				'type' => 'taxonomy',
				'taxonomy' => 'interest',
				'field_type' => 'multi_select',
				'allow_null' => 1,
				'load_save_terms' => 1,
				'return_format' => 'id',
				'multiple' => 1,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'service',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
