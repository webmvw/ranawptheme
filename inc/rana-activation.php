<?php
require_once get_template_directory().'/inc/class-tgm-plugin-activation.php';


add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
function my_theme_register_required_plugins() {
	$plugins = array(
		array(
			'name' => 'Advanced Custom Fields',
			'slug' => 'advanced-custom-fields',
			'required' => true,
			'force_activation'   => true
		),
		array(
			'name' => 'Codestar Framework',
			'slug' => 'codestar-framework',
			'source' => 'https://github.com/Codestar/codestar-framework/archive/refs/heads/master.zip',
			'required' => true,
			'force_activation'   => true
		),
		array(
			'name' => 'Contact Form 7',
			'slug' => 'contact-form-7',
			'required' => true
		),
		array(
			'name' => 'one click demo import',
			'slug' => 'one-click-demo-import',
			'required' => true,
			'force_activation'   => true
		),
		array(
			'name' => 'rana-theme custom post',
			'slug' => 'rana-theme-custom-post',
			'source' => 'https://www.dropbox.com/s/kyb9hewvo2663b0/rana-cpt.zip?dl=1',
			'required' => true,
			'force_activation'   => true
		),
	);

	$config = array(
		'id' => 'rana_plugins_activation',
		'menu' => 'rana-theme-plugins-activation',
		'parent_slug' => 'themes.php',
		'has_notices'  => true,
	);

	tgmpa( $plugins, $config);
}

?>