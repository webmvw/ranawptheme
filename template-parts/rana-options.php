<?php

if(class_exists('CSF')){
	$prefix = 'rana_options';

	/*
	 ========================================================================= 
	 	create options
	 =========================================================================
	*/ 
	CSF::createOptions($prefix, array(
		'menu_title' => __('Rana Options', 'rana'),
		'menu_slug' => 'rana-options',
		'framework_title' => 'Rana Theme - <small>webmvw</small>',
		'menu_type' => 'submenu',
		'menu_parent' => 'themes.php'
	));


	/*
	 ========================================================================= 
	 	create Header section 
	 =========================================================================
	*/ 
	CSF::createSection($prefix, array(
		'id' => 'header_options',
		'title' => __('Header Options', 'rana'),
		'icon' => 'fas fa-address-card'
	));


	CSF::createSection( $prefix, array(
		'parent' => 'header_options',
	    'title'  => __('Header Left', 'rana'),
	    'icon' => 'fas fa-arrow-right',
	    'fields' => array(
	      array(
	        'id'    => 'header_email',
	        'type'  => 'text',
	        'title' => __('Email Address', 'rana'),
	        'default' => 'info@gmail.com'
	      ),
	      array(
	        'id'    => 'header_phone',
	        'type'  => 'text',
	        'title' => __('Phone Number', 'rana'),
	        'default' => '512-490-450'
	      )
	    )
	));

	CSF::createSection( $prefix, array(
		'parent' => 'header_options',
	    'title'  => __('Header Social Icon', 'rana'),
	    'icon' => 'fas fa-arrow-right',
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
		'icon' => 'fas fa-arrow-right',
		'fields' => array(
			array(
				'id' => 'logo',
				'type' => 'media',
				'title' => __('Upload Logo', 'rana')
			),
			array(
				'id' => 'favicon',
				'type' => 'media',
				'title' => __('Favicon Icon', 'rana')
			)
		)
	));

	CSF::createSection($prefix, array(
		'parent' => 'header_options',
		'title' => __('Header Styles', 'rana'),
		'icon' => 'fas fa-arrow-right',
		'fields' => array(
			array(
				'id' => 'header_background',
				'type' => 'background',
				'title' => __('Header Background Color/Image', 'rana'),
				'output' => array('.header-top')
			),
			array(
				'id' => 'header_color',
				'type' => 'color',
				'title' => __('Header Color', 'rana'),
				'output' => array('.header-top a')
			),
			array(
				'id' => 'header_link_hover',
				'type' => 'color',
				'title' => __('Header Link Hover', 'rana'),
				'output' => array('.header-top a:hover')
			),
			array(
				'id' => 'header_typography',
				'type' => 'typography',
				'title' => __('Header Typography', 'rana'),
				'output' => array('.header-top a')
			)
		)
	));

	



	/*
	 ========================================================================= 
	 	create about section 
	 =========================================================================
	*/
	CSF::createSection($prefix, array(
		'id' => 'about_section',
		'title' => __('About Section', 'rana'),
		'icon' => 'fas fa-user'
	));

	CSF::createSection($prefix, array(
		'parent' => 'about_section',
		'title' => __('About Section Title', 'rana'),
		'icon' => 'fas fa-arrow-right',
		'fields' => array(
			array(
				'id' => 'about_sec_subtitle',
				'type' => 'text',
				'title' => __('SubTitle', 'rana')
			),
			array(
				'id' => 'about_sec_title',
				'type' => 'text',
				'title' => __('Title', 'rana')
			),
			array(
				'id' => 'about_sec_description',
				'type' => 'textarea',
				'title' => __('Description', 'rana')
			)
		)
	));

	CSF::createSection($prefix, array(
		'parent' => 'about_section',
		'title' => __('About Page Content', 'rana'),
		'icon' => 'fas fa-arrow-right',
		'fields' => array(
			array(
				'id' => 'about_page_title',
				'type' => 'text',
				'title' => __('Title', 'rana')
			),
			array(
				'id' => 'about_page_description',
				'type' => 'textarea',
				'title' => __('Description', 'rana')
			),
			array(
				'id' => 'about_page_btn',
				'type' => 'text',
				'title' => __('About Page Link', 'rana')
			)
		)
	));

	CSF::createSection($prefix, array(
		'parent' => 'about_section',
		'title' => __('About Page Features', 'rana'),
		'icon' => 'fas fa-arrow-right',
		'fields' => array(
			array(
				'id' => 'about_page_features',
				'type' => 'group',
				'title' => __('About Feature', 'rana'),
	        	'button_title' => 'Add New Feature',
				'fields' => array(
					array(
						'id' => 'features_title',
						'title' => __('Features Title', 'rana'),
						'type' => 'text'
					),
					array(
						'id' => 'features_icon',
						'title' => __('Features Icon', 'rana'),
						'type' => 'icon'
					),
					array(
						'id' => 'features_description',
						'title' => __('Features Description', 'rana'),
						'type' => 'textarea'
					)
				)
			)
		)
	));

	CSF::createSection($prefix, array(
		'parent' => 'about_section',
		'title' => __('About Info', 'rana'),
		'icon' => 'fas fa-arrow-right',
		'fields' => array(
			array(
				'id' => 'about_faq_list',
				'title' => __('About FAQ', 'rana'),
				'type' => 'group',
				'fields' => array(
					array(
						'id' => 'faq_title',
						'title' => __('FAQ Title', 'rana'),
						'type' => 'text'
					),
					array(
						'id' => 'faq_description',
						'title' => __('FAQ Description', 'rana'),
						'type' => 'textarea'
					)
				)
			)
		)
	));

	CSF::createSection($prefix, array(
		'parent' => 'about_section',
		'title' => __('Skills Progress', 'rana'),
		'icon' => 'fas fa-arrow-right',
		'fields' => array(
			array(
				'id' => 'skill_lists',
				'title' => __('About Skills', 'rana'),
				'type' => 'group',
				'fields' => array(
					array(
						'id' => 'progress_title',
						'title' => __('Progress Title', 'rana'),
						'type' => 'text'
					),
					array(
						'id' => 'progress_value',
						'title' => __('Progress Value', 'rana'),
						'desc' => __('Progress value range 0 to 100', 'rana'),
						'type' => 'number'
					)
				)
			)
		)
	));


	/*
	 ========================================================================= 
	 	create Service section 
	 =========================================================================
	*/
	CSF::createSection($prefix, array(
		'title' => __('Service Title', 'rana'),
		'icon' => 'fas fa-address-card',
		'fields' => array(
			array(
				'id' => 'service_sec_subtitle',
				'type' => 'text',
				'title' => __('SubTitle', 'rana')
			),
			array(
				'id' => 'service_sec_title',
				'type' => 'text',
				'title' => __('Title', 'rana')
			),
			array(
				'id' => 'service_sec_description',
				'type' => 'textarea',
				'title' => __('Description', 'rana')
			)
		)
	));


	/*
	 ========================================================================= 
	 	create counter section 
	 =========================================================================
	*/
	 CSF::createSection($prefix, array(
		'title' => __('Counter Options', 'rana'),
		'icon' => 'fas fa-rocket',
		'fields' => array(
			array(
				'id' => 'counter',
				'type' => 'group',
				'title' => __('Counter', 'rana'),
				'fields' => array(
					array(
						'id' => 'counter_title',
						'title' => __('Counter Title', 'rana'),
						'type' => 'text'
					),
					array(
						'id' => 'counter_icon',
						'title' => __('Counter Icon', 'rana'),
						'type' => 'icon'
					),
					array(
						'id' => 'counter_description',
						'title' => __('Counter Description', 'rana'),
						'type' => 'text'
					)
				)
			)
		)
	));


	/*
	 ========================================================================= 
	 	create Team section 
	 =========================================================================
	*/
	CSF::createSection($prefix, array(
		'title' => __('Team Title', 'rana'),
		'icon' => 'fas fa-address-card',
		'fields' => array(
			array(
				'id' => 'team_sec_subtitle',
				'type' => 'text',
				'title' => __('SubTitle', 'rana')
			),
			array(
				'id' => 'team_sec_title',
				'type' => 'text',
				'title' => __('Title', 'rana')
			),
			array(
				'id' => 'team_sec_description',
				'type' => 'textarea',
				'title' => __('Description', 'rana')
			)
		)
	)); 


	/*
	 ========================================================================= 
	 	create testimonial section 
	 =========================================================================
	*/
	CSF::createSection($prefix, array(
		'title' => __('Testimonial Title', 'rana'),
		'icon' => 'fas fa-address-card',
		'fields' => array(
			array(
				'id' => 'testimonial_sec_subtitle',
				'type' => 'text',
				'title' => __('SubTitle', 'rana')
			),
			array(
				'id' => 'testimonial_sec_title',
				'type' => 'text',
				'title' => __('Title', 'rana')
			),
			array(
				'id' => 'testimonial_sec_description',
				'type' => 'textarea',
				'title' => __('Description', 'rana')
			)
		)
	)); 


	/*
	 ========================================================================= 
	 	create Blog section 
	 =========================================================================
	*/
	CSF::createSection($prefix, array(
		'title' => __('Blog Title', 'rana'),
		'icon' => 'fas fa-address-card',
		'fields' => array(
			array(
				'id' => 'blog_sec_subtitle',
				'type' => 'text',
				'title' => __('SubTitle', 'rana')
			),
			array(
				'id' => 'blog_sec_title',
				'type' => 'text',
				'title' => __('Title', 'rana')
			),
			array(
				'id' => 'blog_sec_description',
				'type' => 'textarea',
				'title' => __('Description', 'rana')
			)
		)
	)); 


	/*
	 ========================================================================= 
	 	create cta section 
	 =========================================================================
	*/
	CSF::createSection($prefix, array(
		'title' => __('CTA Options', 'rana'),
		'icon' => 'fas fa-bullhorn',
		'fields' => array(
			array(
				'id' => 'cta_switch',
				'type' => 'switcher',
				'title' => __('Show CTA?', 'rana'),
				'default' => true
			),
			array(
				'id' => 'cta_title',
				'type' => 'text',
				'title' => __('Title', 'rana'),
				'default' => __('best solution for your business', 'rana'),
				'dependency' => array('cta_switch', '==', 'true')
			),
			array(
				'id' => 'cta_description',
				'type' => 'textarea',
				'title' => __('Description', 'rana'),
				'default' => __('the can be used on larger scale projectss as well as small scale projectss', 'rana'),
				'dependency' => array('cta_switch', '==', 'true')
			),
			array(
				'id' => 'cta_btn_txt',
				'type' => 'text',
				'title' => __('Button Text', 'rana'),
				'default' => __('contact us', 'rana'),
				'dependency' => array('cta_switch', '==', 'true')
			),
			array(
				'id' => 'cta_btn_link',
				'type' => 'text',
				'title' => __('Button Link', 'rana'),
				'default' => __('https://www.google.com', 'rana'),
				'dependency' => array('cta_switch', '==', 'true')
			)
		)
	)); 


	/*
	 ========================================================================= 
	 	create contact us section 
	 =========================================================================
	*/
	CSF::createSection($prefix, array(
		'title' => __('Contact Options', 'rana'),
		'icon' => 'fas fa-address-card',
		'fields' => array(
			array(
				'id' => 'single_contact',
				'type' => 'group',
				'title' => __('Contact Info', 'rana'),
				'fields' => array(
					array(
						'id' => 'contact_title',
						'type' => 'text',
						'title' => __('Contact Title', 'rana')
					),
					array(
						'id' => 'contact_icon',
						'type' => 'icon',
						'title' => __('Contact Icon', 'rana')
					),
					array(
						'id' => 'contact_description',
						'type' => 'textarea',
						'title' => __('Contact Description')
					)
				)
			),
			array(
				'id' => 'contact_google_map',
				'type' => 'map',
				'title' => __('Location', 'rana')
			)
		)
	));;





	/*
	 ========================================================================= 
	 	create footer section 
	 =========================================================================
	*/
	 CSF::createSection($prefix, array(
	 	'title' =>  __('Footer Options', 'rana'),
	 	'icon' => 'fas fa-rocket',
	 	'fields' => array(
	 		array(
	 			'id' => 'footer_text',
	 			'type' => 'text',
	 			'title' => __('Copyright Text', 'rana'),
	 			'default' => 'All Rights Reserved 2021'
	 		),
	 		array(
	 			'id' => 'footer_social',
	 			'type' => 'group',
	 			'title' => __('Footer Social Links', 'rana'),
	 			'fields' => array(
	 				array(
	 					'id' => 'footer_social_title',
	 					'type' => 'text',
	 					'title' => __('Title', 'rana')
	 				),
	 				array(
	 					'id' => 'footer_social_icon',
	 					'type' => 'icon',
	 					'title' => __('Social Icon', 'rana')
	 				),
	 				array(
	 					'id' => 'footer_social_link',
	 					'type' => 'text',
	 					'title' => __('Social Link', 'rana')
	 				)
	 			)
	 		),
	 		array(
	 			'id' => 'footer_link_target',
	 			'type' => 'select',
	 			'title' => __('Select Link Target', 'rana'),
	 			'options' => array(
	 				'_self' => __('Open in Same Tab', 'rana'),
	 				'_blank' => __('Open in New Tab', 'rana'),
	 				'_window' => __('Open in New Window', 'rana')
	 			),
	 			'default' => '_blank'
	 		),
	 		array(
				'id' => 'footer_background',
				'type' => 'background',
				'title' => __('Footer Background Color/Image', 'rana'),
				'output' => array('.footer-area')
			),
			array(
				'id' => 'footer_color',
				'type' => 'color',
				'title' => __('Color', 'rana'),
				'output' => array('.footer-area')
			),
	 	)
	 ));



}


?>