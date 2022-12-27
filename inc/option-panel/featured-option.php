<?php 
	new \Kirki\Section(
	'stack_featured_section',
	[
		'title'       => esc_html__( 'Featured Section', 'kirki' ),
		'panel'       => 'stack_theme_panel',
		'priority'    => 160,
	]
);

// About - title

new \Kirki\Field\Text(
	[
		'settings' => 'abt_title_set',
		'label'    => esc_html__( 'Title', 'stack' ),
		'section'  => 'stack_featured_section',
		'default'  => esc_html__( 'We are helping to grow your business.', 'stack' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.title-hl',
				'function' => 'html',
			],
		],
	]
);

// About - subtitle

new \Kirki\Field\Textarea(
	[
		'settings' => 'abt_subtitle_set',
		'label'    => esc_html__( 'Sub Title', 'stack' ),
		'section'  => 'stack_featured_section',
		'default'  => esc_html__( 'A digital studio specialising in User Experience & eCommerce, we combine innovation with digital craftsmanship to help brands fulfill their potential.', 'stack' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.text-wrapper div p',
				'function' => 'html',
			],
		],
	]
);

//  button label 

new \Kirki\Field\Text(
	[
		'settings' => 'featured_btn_txt_set',
		'label'    => esc_html__( 'Button Text', 'stack' ),
		'section'  => 'stack_featured_section',
		'default'  => esc_html__( 'more about us', 'stack' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.btn-common',
				'function' => 'html',
			],
		],
	]
);

// button url

new \Kirki\Field\URL(
	[
		'settings' => 'featured_btn_url_set',
		'label'    => esc_html__( 'URL', 'stack' ),
		'section'  => 'stack_featured_section',
		'default'  => '#',
		'priority' => 10,
	]
);












?>