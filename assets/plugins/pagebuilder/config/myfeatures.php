<?
return[
	'title'=>'Преимущества',
	'container' => 'pbcontent', //['pbcontent','pbcontent_en','pbcontent_de']
	'image' => 'assets/plugins/pagebuilder/images/text-photo.jpg',

	'fields' => [
		'title'=>[
			'caption'=>'Заголовок',
			'type'=>'text'
		],
		'features'=>[
			'type'=>'group',
			'caption'=>'Карточки преимуществ',
			'fields'=>[
				'title'=>[
					'caption'=>'Заголовок',
					'type'=>'text'
				],
				'icon'=>[
					'caption'=>'Значок',
					'type'=>'text'
				],
				'content'=>[
					'caption'=>'Содержание',
					'type'=>'textarea'
				],
			]
		],
		'padding'=>[
			'caption'=>'Отступы',
			'type'=>'dropdown',
			'elements' => [
				's-pad' => 'Сверху и снизу',
				's-padtop' => 'Сверху',
				's-padbot' => 'Снизу',
			],
			'default' => 's-pad',
		]
	],
];