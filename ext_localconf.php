<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_extMgm::addPItoST93($_EXTKEY, 'pi1/class.tx_adicoweather_pi1.php', '_pi1', 'list_type', 1);
?>
