<?
return[
	'title'=>'Галерея',
	'container' => 'pbcontent', //['pbcontent','pbcontent_en','pbcontent_de']
	'image' => 'assets/plugins/pagebuilder/images/gallery.jpg',

	'fields' => [
		'title'=>[
			'caption'=>'Заголовок',
			'type'=>'text'
		],
		'images'=>[
			'type'=>'group',
			'caption'=>'Картинки',
			'fields'=>[
				'image'=>[
					'caption'=>'Изображение',
					'type'=>'image'
				],
				'title'=>[
					'caption'=>'Заголовок',
					'type'=>'text'
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