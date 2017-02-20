<?php
Redux::setSection( $opt_name, array(
	'id' => 'sec_favicon',
	'title' => esc_html__('Favicon settings', 'melinda'),
	'desc' => esc_html__('Configure the favicon in a lot of plataforms. Generate and download your package at http://realfavicongenerator.net/', 'melinda'),
	'icon' => 'el el-bookmark',
	'fields' => array(
		array(
			'id' => 'favicon--default',
			'type' => 'section',
			'title' => esc_html__('Default favicons', 'melinda'),
			'indent' => true,
		),

			array(
				'id' => 'favicon--16',
				'type' => 'media',
				'title' => esc_html__('Favicon 16x16', 'melinda'),
				'subtitle' => esc_html__('Upload favicon image in the following dimensions (16x16)', 'melinda'),
				'readonly' => false,
				'url' => true,
			),
			array(
				'id' => 'favicon--32',
				'type' => 'media',
				'title' => esc_html__('Favicon 32x32', 'melinda'),
				'subtitle' => esc_html__('Upload favicon image in the following dimensions (32x32)', 'melinda'),
				'readonly' => false,
				'url' => true,
			),
			array(
				'id' => 'favicon--96',
				'type' => 'media',
				'title' => esc_html__('Favicon 96x96', 'melinda'),
				'subtitle' => esc_html__('Upload favicon image in the following dimensions (96x96)', 'melinda'),
				'readonly' => false,
				'url' => true,
			),
			array(
				'id' => 'favicon--160',
				'type' => 'media',
				'title' => esc_html__('Favicon 160x160', 'melinda'),
				'subtitle' => esc_html__('Upload favicon image in the following dimensions (160x160)', 'melinda'),
				'readonly' => false,
				'url' => true,
			),
			array(
				'id' => 'favicon--192',
				'type' => 'media',
				'title' => esc_html__('Favicon 192x192', 'melinda'),
				'subtitle' => esc_html__('Upload favicon image in the following dimensions (192x192)', 'melinda'),
				'readonly' => false,
				'url' => true,
			),

		array(
			'id' => 'favicon--default__end',
			'type' => 'section',
			'indent' => false,
		),

		array(
			'id' => 'favicon--apple',
			'type' => 'section',
			'title' => esc_html__('Apple favicons', 'melinda'),
			'indent' => true,
		),

			array(
				'id' => 'favicon--a_57',
				'type' => 'media',
				'title' => esc_html__('Favicon 57x57', 'melinda'),
				'subtitle' => esc_html__('Upload favicon image in the following dimensions (57x57)', 'melinda'),
				'readonly' => false,
				'url' => true,
			),
			array(
				'id' => 'favicon--a_114',
				'type' => 'media',
				'title' => esc_html__('Favicon 114x114', 'melinda'),
				'subtitle' => esc_html__('Upload favicon image in the following dimensions (114x114)', 'melinda'),
				'readonly' => false,
				'url' => true,
			),
			array(
				'id' => 'favicon--a_72',
				'type' => 'media',
				'title' => esc_html__('Favicon 72x72', 'melinda'),
				'subtitle' => esc_html__('Upload favicon image in the following dimensions (72x72)', 'melinda'),
				'readonly' => false,
				'url' => true,
			),
			array(
				'id' => 'favicon--a_144',
				'type' => 'media',
				'title' => esc_html__('Favicon 144x144', 'melinda'),
				'subtitle' => esc_html__('Upload favicon image in the following dimensions (144x144)', 'melinda'),
				'readonly' => false,
				'url' => true,
			),
			array(
				'id' => 'favicon--a_60',
				'type' => 'media',
				'title' => esc_html__('Favicon 60x60', 'melinda'),
				'subtitle' => esc_html__('Upload favicon image in the following dimensions (60x60)', 'melinda'),
				'readonly' => false,
				'url' => true,
			),
			array(
				'id' => 'favicon--a_120',
				'type' => 'media',
				'title' => esc_html__('Favicon 120x120', 'melinda'),
				'subtitle' => esc_html__('Upload favicon image in the following dimensions (120x120)', 'melinda'),
				'readonly' => false,
				'url' => true,
			),
			array(
				'id' => 'favicon--a_76',
				'type' => 'media',
				'title' => esc_html__('Favicon 76x76', 'melinda'),
				'subtitle' => esc_html__('Upload favicon image in the following dimensions (76x76)', 'melinda'),
				'readonly' => false,
				'url' => true,
			),
			array(
				'id' => 'favicon--a_152',
				'type' => 'media',
				'title' => esc_html__('Favicon 152x152', 'melinda'),
				'subtitle' => esc_html__('Upload favicon image in the following dimensions (152x152)', 'melinda'),
				'readonly' => false,
				'url' => true,
			),
			array(
				'id' => 'favicon--a_180',
				'type' => 'media',
				'title' => esc_html__('Favicon 180x180', 'melinda'),
				'subtitle' => esc_html__('Upload favicon image in the following dimensions (180x180)', 'melinda'),
				'readonly' => false,
				'url' => true,
			),

		array(
			'id' => 'favicon--apple__end',
			'type' => 'section',
			'indent' => false,
		),

		array(
			'id' => 'favicon--win_metro',
			'type' => 'section',
			'title' => esc_html__('Windows Metro favicons', 'melinda'),
			'indent' => true,
		),

			array(
				'id' => 'favicon--win_color',
				'type' => 'color',
				'title' => esc_html__('Custom tile background color', 'melinda'),
				'subtitle' => esc_html__('Pick a background color for the tile.', 'melinda'),
				'validate' => 'color',
				'transparent' => false,
				'desc' => 'You can see a few recommended tile colors at "Favicon for Windows 8 - Tile" section at http://realfavicongenerator.net/',
			),
			array(
				'id' => 'favicon--win_70',
				'type' => 'media',
				'title' => esc_html__('Tile image 70x70', 'melinda'),
				'subtitle' => esc_html__('Upload favicon image in the following dimensions. Minimum image size: 70x70. Recommended: 128x128.', 'melinda'),
				'readonly' => false,
				'url' => true,
			),
			array(
				'id' => 'favicon--win_150',
				'type' => 'media',
				'title' => esc_html__('Tile image 150x150', 'melinda'),
				'subtitle' => esc_html__('Upload favicon image in the following dimensions. Minimum image size: 150x150. Recommended: 270x270.', 'melinda'),
				'readonly' => false,
				'url' => true,
			),
			array(
				'id' => 'favicon--win_310',
				'type' => 'media',
				'title' => esc_html__('Tile image 310x150', 'melinda'),
				'subtitle' => esc_html__('Upload favicon image in the following dimensions. Minimum image size: 310x150. Recommended: 558x270.', 'melinda'),
				'readonly' => false,
				'url' => true,
			),
			array(
				'id' => 'favicon--win_310_quad',
				'type' => 'media',
				'title' => esc_html__('Tile image 310x310', 'melinda'),
				'subtitle' => esc_html__('Upload favicon image in the following dimensions. Minimum image size: 310x310. Recommended: 558x558.', 'melinda'),
				'readonly' => false,
				'url' => true,
			),

		array(
			'id' => 'favicon--win_metro__end',
			'type' => 'section',
			'indent' => false,
		),
	),
) );