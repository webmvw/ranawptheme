<?php

if(class_exists('CSF')){
	$prefix = 'rana_options';

	// create options
	CSF::createOptions($prefix, array(
		'menu_title' => __('Rana Options', 'rana'),
		'menu_slug' => 'rana-options',
		'framework_title' => 'Rana Theme - <small>webmvw</small>',
		'menu_type' => 'submenu',
		'menu_parent' => 'themes.php'
	));


	/*
	 ========================================================================= 
	 	create main section 
	 =========================================================================
	*/ 
	// for header
	CSF::createSection($prefix, array(
		'id' => 'header_options',
		'title' => __('Header Options', 'rana'),
	));

	// for footer
	CSF::createSection($prefix, array(
		'id' => 'footer_options',
		'title' => __('Footer Options', 'rana'),
	));





	/*
	 ========================================================================= 
	 	create sub section 
	 =========================================================================
	*/

	// ============ for header_options ================== 
	CSF::createSection( $prefix, array(
		'parent' => 'header_options',
	    'title'  => __('Header Left', 'rana'),
	    'fields' => array(
	      array(
	        'id'    => 'header_email',
	        'type'  => 'text',
	        'title' => __('Email Address', 'rana')
	      ),
	      array(
	        'id'    => 'header_phone',
	        'type'  => 'text',
	        'title' => __('Phone Number', 'rana')
	      )
	    )
	));

	CSF::createSection( $prefix, array(
		'parent' => 'header_options',
	    'title'  => __('Header Social Icon', 'rana'),
	    'fields' => array(
	      array(
	        'id'    => 'header_icon',
	        'type'  => 'group',
	        'title' => 'Header Social Link',
	        'button_title' => 'Add New Social Link',
	        'fields' => array(
	        	array(
	        		'id' => 'social_title',
	        		'type' => 'text',
	        		'title' => __('Social Title', 'rana')
	        	),
	        	array(
	        		'id' => 'social_link',
	        		'type' => 'text',
	        		'title' => __('Social Link', 'rana')
	        	),
	        	array(
	        		'id' => 'social_icon',
	        		'type' => 'icon',
	        		'title' => __('Social Icon', 'rana')
	        	)
	        )
	      )
	    )
	));

	CSF::createSection($prefix, array(
		'parent' => 'header_options',
		'title' => __('Website Logo', 'rana'),
		'fields' => array(
			array(
				'id' => 'logo',
				'type' => 'media',
				'title' => __('Upload Logo', 'rana')
			)
		)
	));


}


?>