<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_home-page-layout-3',
		'title' => 'Home Page Layout',
		'fields' => array (
			array (
				'key' => 'field_5332f20533b83',
				'label' => 'Sections',
				'name' => 'sections',
				'type' => 'flexible_content',
				'layouts' => array (
					array (
						'label' => 'Soundcloud Feature',
						'name' => 'soundcloud_feature',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_5332f23d33b84',
								'label' => 'Soundcloud iframe code',
								'name' => 'soundcloud_iframe_code',
								'type' => 'text',
								'instructions' => 'To obtain this, go to your Soundcloud song or set and click "Share" then the "Embed" tab. Then you will see a preview and some iframe code. Copy that and paste it in right here.',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_5332f25a33b85',
								'label' => 'Feature Type',
								'name' => 'feature_type',
								'type' => 'radio',
								'column_width' => '',
								'choices' => array (
									'Single' => 'Single',
									'Album' => 'Album',
									'EP' => 'EP',
									'Mixtape' => 'Mixtape',
								),
								'other_choice' => 1,
								'save_other_choice' => 1,
								'default_value' => 'Album',
								'layout' => 'vertical',
							),
							array (
								'key' => 'field_5332f28733b86',
								'label' => 'Feature Title',
								'name' => 'feature_title',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => 'Album Title',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_5332f2ab33b87',
								'label' => 'Feature Description',
								'name' => 'feature_description',
								'type' => 'textarea',
								'instructions' => 'This field is limited to 250 characters to fit properly in the theme.',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'maxlength' => 250,
								'rows' => 4,
								'formatting' => 'br',
							),
							array (
								'key' => 'field_5332f2c533b88',
								'label' => 'Button Text',
								'name' => 'button_text',
								'type' => 'text',
								'instructions' => 'Both Text and URL fields must be filled out in order for button to display on site.',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => 'eg: Purchase',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_5332f2d933b89',
								'label' => 'Button URL',
								'name' => 'button_url',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => 'http://',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
						),
					),
					array (
						'label' => 'Video Embed',
						'name' => 'video_embed',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_5332f3aa80e51',
								'label' => 'Video Embed Code',
								'name' => 'video_embed_code',
								'type' => 'text',
								'instructions' => 'Fully supports both Youtube and Vimeo iframe embed codes',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
						),
					),
					array (
						'label' => 'Custom Text',
						'name' => 'custom_text',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_5332f40780e54',
								'label' => 'Text Field',
								'name' => 'text_field',
								'type' => 'wysiwyg',
								'column_width' => '',
								'default_value' => '',
								'toolbar' => 'full',
								'media_upload' => 'no',
							),
						),
					),
					array (
						'label' => 'Photo Gallery',
						'name' => 'photo_gallery',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_5332f42480e56',
								'label' => 'Photos',
								'name' => 'photos',
								'type' => 'gallery',
								'column_width' => '',
								'preview_size' => 'thumbnail',
								'library' => 'all',
							),
						),
					),
				),
				'button_label' => 'Add Section',
				'min' => '',
				'max' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_type',
					'operator' => '==',
					'value' => 'front_page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'featured_image',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_mailing-list-options',
		'title' => 'Mailing List Options',
		'fields' => array (
			array (
				'key' => 'field_534574934f4c8',
				'label' => 'Mailing List Visibility',
				'name' => 'mailing_list_visibility',
				'type' => 'radio',
				'choices' => array (
					'On' => 'On',
					'Off' => 'Off',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'Off',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_534574b64f4c9',
				'label' => 'Mailchimp Form Snippet',
				'name' => 'mailchimp_form_snippet',
				'type' => 'textarea',
				'instructions' => '<strong>**Important**</strong> - You must grab the "Super Slim" form code from your Mailchimp account.<br/><br/>
		
		To access the form code follow these steps:<br/>
		1) Go to you Mailchimp Account then click on "Lists".<br/>
		2) Click on the list you would like to use (or create one if none exist).<br/>
		3) Click "Signup Forms" then "Embedded Forms"<br/>
		4) Choose the "Super Slim" form style<br/>
		5) Copy the generated form snippet and paste it into this box',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_534574934f4c8',
							'operator' => '==',
							'value' => 'On',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'html',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-mailing-list',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_site-design-options',
		'title' => 'Site Design Options',
		'fields' => array (
			array (
				'key' => 'field_534571f6ef125',
				'label' => 'Logo',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_53457202ef126',
				'label' => 'Favicon',
				'name' => 'favicon',
				'type' => 'image',
				'instructions' => 'This should be a <strong>16x16px .png</strong> image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_53457236ef127',
				'label' => 'Text Logo Color',
				'name' => 'text_logo_color',
				'type' => 'color_picker',
				'instructions' => 'This will change the color of your logo if you do not have a logo image uploaded below',
				'default_value' => '#333333',
			),
			array (
				'key' => 'field_53457250ef128',
				'label' => 'Logo',
				'name' => 'logo',
				'type' => 'image',
				'instructions' => 'If no image is present, the site name will be shown. This can be changed in "Settings > General > Site Title".<br/>
	<em>Theme has been built to utilize a wide range of sizes for the logo, but you should still try and keep it smaller than about 900x300px.</em>',
				'save_format' => 'object',
				'preview_size' => 'full',
				'library' => 'all',
			),
			array (
				'key' => 'field_53457282ef129',
				'label' => 'Background',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_53457291ef12a',
				'label' => 'Background Image',
				'name' => 'background_image',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'medium',
				'library' => 'all',
			),
			array (
				'key' => 'field_534575addbe8c',
				'label' => 'Background Position',
				'name' => 'background_position',
				'type' => 'radio',
				'choices' => array (
					'Fullscreen' => 'Fullscreen',
					'Top Left' => 'Top Left',
					'Top Middle' => 'Top Middle',
					'Centered' => 'Centered',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'Fullscreen',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_534575d9dbe8d',
				'label' => 'Background Repeat',
				'name' => 'background_repeat',
				'type' => 'radio',
				'choices' => array (
					'Repeat' => 'Repeat',
					'Repeat Horizontally' => 'Repeat Horizontally',
					'Repeat Vertically' => 'Repeat Vertically',
					'No Repeat' => 'No Repeat',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'No Repeat',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_53457600dbe8e',
				'label' => 'Background Attachment',
				'name' => 'background_attachment',
				'type' => 'radio',
				'choices' => array (
					'Scrolling Background' => 'Scrolling Background',
					'Fixed Background' => 'Fixed Background',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'Fixed Background',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_5345762adbe8f',
				'label' => 'Background Overlay Color',
				'name' => 'background_overlay_color',
				'type' => 'color_picker',
				'default_value' => '#ffffff',
			),
			array (
				'key' => 'field_53457641dbe90',
				'label' => 'Background Overlay Opacity',
				'name' => 'background_overlay_opacity',
				'type' => 'number',
				'instructions' => 'Enter the percentage of opacity to apply to the background overlay color. <strong>100</strong> is fully opaque, <strong>0</strong> is fully transparent.<br/>
	To turn off the background overlay, simply set this value to 0.',
				'default_value' => 75,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => 100,
				'step' => 1,
			),
			array (
				'key' => 'field_5345768adbe91',
				'label' => 'Fonts',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_53457694dbe92',
				'label' => 'Heading Font Type',
				'name' => 'heading_font_type',
				'type' => 'radio',
				'choices' => array (
					'Google Font' => 'Google Font',
					'Custom' => 'Custom',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'Google Font',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_534576c1dbe93',
				'label' => 'Heading Fonts',
				'name' => 'heading_fonts',
				'type' => 'select',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_53457694dbe92',
							'operator' => '==',
							'value' => 'Google Font',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'Lato' => 'Lato',
					'Open Sans' => 'Open Sans',
					'Montserrat' => 'Montserrat',
					'Roboto' => 'Roboto',
					'Source Sans Pro' => 'Source Sans Pro',
					'Oswald' => 'Oswald',
					'Quattrocento' => 'Quattrocento',
					'Quattrocento Sans' => 'Quattrocento Sans',
					'Josefin Slab' => 'Josefin Slab',
					'Josefin Sans' => 'Josefin Sans',
					'Arvo' => 'Arvo',
					'Ubuntu' => 'Ubuntu',
					'Droid Sans' => 'Droid Sans',
					'Droid Serif' => 'Droid Serif',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_53457725dbe94',
				'label' => 'Custom Heading Font Family',
				'name' => 'custom_heading_font_family',
				'type' => 'text',
				'instructions' => 'Use the following format:<br/>
	<em>"Helvetica Neue", Helvetica, Arial, sans-serif</em><br/>
	Do not include the "font-family" property, it will be automatically added.<br/>
	<a href="http://cssfontstack.com/" target="_blank">cssfontstack.com</a> is a great resource for default web-safe font stacks.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_53457694dbe92',
							'operator' => '==',
							'value' => 'Custom',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '"Helvetica Neue", Helvetica, Arial, sans-serif',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53457777f2cf2',
				'label' => 'Body Font Type',
				'name' => 'body_font_type',
				'type' => 'radio',
				'choices' => array (
					'Google Font' => 'Google Font',
					'Custom' => 'Custom',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'Google Font',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_5345779af2cf3',
				'label' => 'Body Fonts',
				'name' => 'body_fonts',
				'type' => 'select',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_53457777f2cf2',
							'operator' => '==',
							'value' => 'Google Font',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'Lato' => 'Lato',
					'Open Sans' => 'Open Sans',
					'Montserrat' => 'Montserrat',
					'Roboto' => 'Roboto',
					'Source Sans Pro' => 'Source Sans Pro',
					'Oswald' => 'Oswald',
					'Quattrocento' => 'Quattrocento',
					'Quattrocento Sans' => 'Quattrocento Sans',
					'Josefin Slab' => 'Josefin Slab',
					'Josefin Sans' => 'Josefin Sans',
					'Arvo' => 'Arvo',
					'Ubuntu' => 'Ubuntu',
					'Droid Sans' => 'Droid Sans',
					'Droid Serif' => 'Droid Serif',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_534577c3f2cf4',
				'label' => 'Custom Body Font Family',
				'name' => 'custom_body_font_family',
				'type' => 'text',
				'instructions' => 'Use the following format:<br/>
	<em>"Helvetica Neue", Helvetica, Arial, sans-serif</em><br/>
	Do not include the "font-family" property, it will be automatically added.<br/>
	<a href="http://cssfontstack.com/" target="_blank">cssfontstack.com</a> is a great resource for default web-safe font stacks.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_53457777f2cf2',
							'operator' => '==',
							'value' => 'Custom',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '"Helvetica Neue", Helvetica, Arial, sans-serif',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_534578429448f',
				'label' => 'Site Colors',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5345784994490',
				'label' => 'Main Color',
				'name' => 'main_color',
				'type' => 'color_picker',
				'instructions' => 'This controls the main color of the site including: Text, forms, mobile menu background, link colors.',
				'default_value' => '#382A3B',
			),
			array (
				'key' => 'field_5345787494491',
				'label' => 'Menu Color',
				'name' => 'menu_color',
				'type' => 'color_picker',
				'default_value' => '#382A3B',
			),
			array (
				'key' => 'field_5345788294492',
				'label' => 'Footer Text Color',
				'name' => 'footer_text_color',
				'type' => 'color_picker',
				'default_value' => '#382A3B',
			),
			array (
				'key' => 'field_5345789594493',
				'label' => 'Music Colors',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_534578a294494',
				'label' => 'Music Background Color',
				'name' => 'music_background_color',
				'type' => 'color_picker',
				'instructions' => 'This controls the background color as well as the color of the text inside the button',
				'default_value' => '#382A3B',
			),
			array (
				'key' => 'field_534578b594495',
				'label' => 'Music Text Color',
				'name' => 'music_text_color',
				'type' => 'color_picker',
				'instructions' => 'This controls the color of the text and the button',
				'default_value' => '#ffffff',
			),
			array (
				'key' => 'field_5345791cdf003',
				'label' => 'Mobile',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_53457923df004',
				'label' => 'Mobile Menu Background Color',
				'name' => 'mobile_menu_background_color',
				'type' => 'color_picker',
				'default_value' => '#382A3B',
			),
			array (
				'key' => 'field_5345793bdf005',
				'label' => 'Mobile Menu Text Color',
				'name' => 'mobile_menu_text_color',
				'type' => 'color_picker',
				'default_value' => '#ffffff',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-design',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_social-icon-options',
		'title' => 'Social Icon Options',
		'fields' => array (
			array (
				'key' => 'field_534579d0ada8d',
				'label' => 'Social Icons',
				'name' => 'social_icons',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_534579deada8e',
						'label' => 'Social Network',
						'name' => 'social_network',
						'type' => 'select',
						'column_width' => '',
						'choices' => array (
							'bandcamp' => 'Bandcamp',
							'behance' => 'Behance',
							'dribbble' => 'Dribbble',
							'facebook' => 'Facebook',
							'flickr' => 'Flickr',
							'googleplus' => 'Google Plus',
							'instagram' => 'Instagram',
							'lastfm' => 'Last.fm',
							'linkedin' => 'LinkedIn',
							'pinterest' => 'Pinterest',
							'rdio' => 'Rdio',
							'skype' => 'Skype',
							'soundcloud' => 'Soundcloud',
							'spotify' => 'Spotify',
							'stumbleupon' => 'StumbleUpon',
							'tumblr' => 'Tumblr',
							'twitter' => 'Twitter',
							'vimeo' => 'Vimeo',
							'youtube' => 'Youtube',
						),
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0,
					),
					array (
						'key' => 'field_53457a2dada8f',
						'label' => 'Link URL',
						'name' => 'link_url',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Social Icon',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-social-icons',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}