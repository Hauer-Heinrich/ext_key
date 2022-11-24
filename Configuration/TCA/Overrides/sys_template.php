<?php
defined('TYPO3') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'ext_key',
    'Configuration/TypoScript',
    'default Extension'
);
