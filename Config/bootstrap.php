<?php

Croogo::hookComponent('*', 'Cosmess.CosmessSession');

CroogoNav::add('cosmess', array(
	'title' => 'Cosmess',
	'url' => '#',
	'weight' => 15,
	'children' => array(
		'settings' => array(
			'title' => 'Settings',
			'url' => array(
				'plugin' => 'settings',
				'admin' => true,
				'controller' => 'settings',
				'action' => 'prefix',
				'Cosmess'
			)
		)
	)
));
