<?php

$manifest = array(
	'acceptable_sugar_versions' => array (
		'regex_matches' => array (
			1 => "6.5.*",
		),
	),
	'acceptable_sugar_flavors' => array (
		0 => 'CE',
	),
	'name' 				=> 'Soulware<PackageName>',
	'description' 		=> "<Short English description what problem the package intended to solve.>",
	'author' 			=> '<FirstName LastName>, Soulware Ltd.',
	'published_date'	=> 'yyyy/mm/dd',
	'version' 			=> '1.0.0',
	'type' 				=> 'module',
	'icon' 				=> '',
	'is_uninstallable' => true,
);
$installdefs = array(
	'id'=> 'Soulware<PackageName>',
	'copy' => array(
		0 => array(
		'from' => '<basepath>',
		'to' => '',
		),
	)
);
