<?php 
// Stack Panel 
new \Kirki\Panel(
	'stack_theme_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Stack Panel', 'stack' ),
	]
);

require_once get_theme_file_path('/inc/option-panel/hero-option.php');
require_once get_theme_file_path('/inc/option-panel/featured-option.php');


?>