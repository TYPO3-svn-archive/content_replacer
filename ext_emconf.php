<?php

########################################################################
# Extension Manager/Repository config file for ext "content_replacer".
#
# Auto generated 16-05-2011 23:43
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Content Replacer',
	'description' => 'You need a fast substitution of terms with full support of typoscript, categories and RTE integration? If yes, the extension could be perfectly fit into your project. The performance is gained by wrapping of the replacement terms to simplify the parsing process.',
	'category' => 'fe',
	'shy' => 0,
	'version' => '1.5.1',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Stefan Galinski',
	'author_email' => 'stefan.galinski@gmail.com',
	'author_company' => 'domainFACTORY',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5.0-4.6.99',
			'php' => '5.2.0-5.3.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:23:{s:19:"de.locallang_db.xml";s:4:"1c99";s:16:"ext_autoload.php";s:4:"436a";s:21:"ext_conf_template.txt";s:4:"eb18";s:12:"ext_icon.gif";s:4:"8fdb";s:17:"ext_localconf.php";s:4:"6b07";s:14:"ext_tables.php";s:4:"c0aa";s:14:"ext_tables.sql";s:4:"c858";s:16:"locallang_db.xml";s:4:"cb24";s:7:"tca.php";s:4:"1e47";s:63:"Classes/Controller/class.tx_contentreplacer_controller_main.php";s:4:"67c3";s:63:"Classes/Repository/class.tx_contentreplacer_repository_term.php";s:4:"c56d";s:67:"Classes/Service/class.tx_contentreplacer_service_abstractparser.php";s:4:"f5f2";s:65:"Classes/Service/class.tx_contentreplacer_service_customparser.php";s:4:"ea92";s:63:"Classes/Service/class.tx_contentreplacer_service_spanparser.php";s:4:"559c";s:14:"doc/manual.sxw";s:4:"3e94";s:53:"resources/icons/icon_tx_content_replacer_category.png";s:4:"dd7a";s:56:"resources/icons/icon_tx_content_replacer_category__h.png";s:4:"ba3c";s:56:"resources/icons/icon_tx_content_replacer_category__t.png";s:4:"dbe8";s:49:"resources/icons/icon_tx_content_replacer_term.png";s:4:"448e";s:52:"resources/icons/icon_tx_content_replacer_term__h.png";s:4:"20f0";s:52:"resources/icons/icon_tx_content_replacer_term__t.png";s:4:"0f21";s:20:"static/constants.txt";s:4:"600a";s:16:"static/setup.txt";s:4:"d12c";}',
	'suggests' => array(
	),
);

?>