<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Example Extension');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_uploadexample_domain_model_example', 'EXT:upload_example/Resources/Private/Language/locallang_csh_tx_uploadexample_domain_model_example.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:upload_example/Configuration/TSconfig/ContentElementWizard.ts">'
);
