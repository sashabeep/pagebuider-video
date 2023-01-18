<?
return[
	'title'=>'Карточки документов',
	'container' => 'pbcontent', //['pbcontent','pbcontent_en','pbcontent_de']
	'image' => 'assets/plugins/pagebuilder/images/image-text.jpg',

	'fields' => [
		'title'=>[
			'caption'=>'Заголовок',
			'type'=>'text'
		],
		'idtype'=>[
			'caption'=>'Тип выборки',
			'type'=>'dropdown',
			'elements' => [
				'documents' => 'Документы',
				'parents' => 'Родители',
			],
			'default' => 'documents',
		],
		'ids'=>[
			'caption'=>'ID через запятую',
			'type'=>'text'
		],
		'display'=>[
			'caption'=>'Количество',
			'type'=>'text',
			'default' => '3'
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