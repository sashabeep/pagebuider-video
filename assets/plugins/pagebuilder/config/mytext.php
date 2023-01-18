<?
return[
	'title'=>'Текстовый блок',
	'container' => 'pbcontent', //['pbcontent','pbcontent_en','pbcontent_de']
	'image' => 'assets/plugins/pagebuilder/images/text.jpg',

	'fields' => [
		'title'=>[
			'caption'=>'Заголовок',
			'type'=>'text'
		],
		'content' => [
			'caption' => 'Текст',
			'type'  => 'richtext',
			'options' => [
			'height' => '300px',
			],
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