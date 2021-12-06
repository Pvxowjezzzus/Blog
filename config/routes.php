<?php

return [
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'about' => [
		'controller' => 'main',
		'action' => 'about',
	],

	'createArticle' => [
		'controller' => 'main',
		'action' => 'createArticle',
	],
		
	'post/{id:\d+}' => [
		'controller' => 'main',
		'action' => 'post',
	],
];