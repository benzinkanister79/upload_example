<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Helhum.'.$_EXTKEY,
    'Piexample',
    'Upload Example'
);
