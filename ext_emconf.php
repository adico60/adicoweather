<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "adicoweather".
 *
 * Auto generated 09-02-2015 21:00
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Adico Weather',
	'description' => 'Affiche la météo en utilisant Yahoo! weather API. Merci de lire et d'accepter les termes d'utilisation de  Yahoo! (http://developer.yahoo.com/weather/) avant d'utiliser ce plugin!',
	'category' => 'plugin',
	'version' => '0.0.4',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => 'uploads/tx_adicoweather',
	'clearcacheonload' => 0,
	'author' => 'Yann Berton by Juergen Furrer',
	'author_email' => 'solutionsweb@adico.fr',
	'author_company' => '',
	'constraints' => 
	array (
		'depends' => 
		array (
			'php' => '5.3.0-0.0.0',
			'typo3' => '4.5.0-6.2.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
);

