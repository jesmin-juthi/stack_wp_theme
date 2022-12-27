<?php 

// Hero Section

new \Kirki\Section(
	'stack_hero_section',
	[
		'title'       => esc_html__( 'Hero Section', 'stack' ),
		'panel'       => 'stack_theme_panel',
		'priority'    => 160,
	]
);

// Hero - title

new \Kirki\Field\Textarea(
	[
		'settings' => 'title_set',
		'label'    => esc_html__( 'Title', 'stack' ),
		'section'  => 'stack_hero_section',
		'default'  => esc_html__( 'We Discover, Design & Build Digital Presence of Businesses', 'stack' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.head-title',
				'function' => 'html',
			],
		],
	]
);

//  button label 

new \Kirki\Field\Text(
	[
		'settings' => 'btn_txt_set',
		'label'    => esc_html__( 'Button Text', 'stack' ),
		'section'  => 'stack_hero_section',
		'default'  => esc_html__( 'Explore', 'stack' ),
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
		'settings' => 'btn_url_set',
		'label'    => esc_html__( 'URL', 'stack' ),
		'section'  => 'stack_hero_section',
		'default'  => '#services',
		'priority' => 10,
	]
);

// image

new \Kirki\Field\Image(
	[
		'settings'    => 'img_set_url',
		'label'       => esc_html__( 'Image', 'stack' ),
		'section'     => 'stack_hero_section',
		'default'     => '',
	]
);

// background image

new \Kirki\Field\Background(
	[
		'settings'    => 'hero_bg_set',
		'label'       => esc_html__( 'Set Background Image or Color', 'stack' ),
		'section'     => 'stack_hero_section',
		'default'     => [
			'background-color'      => 'rgba(255,255,255,1)',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
	]
);

// title typo

new \Kirki\Field\Typography(
	[
		'settings'    => 'title_typo_set',
		'label'       => esc_html__( 'Title Style', 'stack' ),
		'section'     => 'stack_hero_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Titillium Web',
			'variant'         => '700',
			'font-style'      => 'normal',
			'color'           => '#585b60',
			'font-size'       => '30px',
			'line-height'     => '48px',
			'letter-spacing'  => '0',
			'text-transform'  => 'uppercase',
			'text-decoration' => 'none',
			'text-align'      => 'center',
		],
		'output'      => [
			[
				'element' => '#hero-area .contents .head-title',
			],
		],
	]
);








 ?>