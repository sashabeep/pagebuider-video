<?
return[
	'title'=>'Слайдер',
	'container' => 'pbcontent', //['pbcontent','pbcontent_en','pbcontent_de']
	'image' => 'assets/plugins/pagebuilder/images/code.jpg',

	'fields' => [
		'slides'=>[
			'type'=>'group',
			'caption'=>'Слайды',
			'fields'=>[
				'image'=>[
					'caption'=>'Изображение',
					'type'=>'image'
				],
				'title'=>[
					'caption'=>'Заголовок',
					'type'=>'text'
				],
				'content'=>[
					'caption'=>'Содержание',
					'type'=>'textarea'
				],
				'btn_link'=>[
					'caption'=>'Ссылка на кнопке',
					'type'=>'text'
				],
				'btn_text'=>[
					'caption'=>'Текст на кнопке',
					'type'=>'text',
					'default'=>'Подробнее'
				]
			]
		]
	],
];