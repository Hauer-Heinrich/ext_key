<?php
defined('TYPO3') || die();

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$extensionKey = 'ext_key';
$extensionName = GeneralUtility::underscoredToUpperCamelCase($extensionKey);
$extensionNameLower = strtolower($extensionName);

// Myfrontendplug1 = Plugin Identifier
$pluginSignature = $extensionNameLower . '_' . strtolower('Myfrontendplug1');
ExtensionUtility::registerPlugin(
    $extensionName,
    'Myfrontendplug1',
    'My Frontend Plug 1',
    null,
    // 'myGroup' // group (optional)
);

// disable default fields
// field: "pages" is a default field too which is used by DB Query e. g. setRespectStoragePage
// so i set "setRespectStoragePage" to false to not use this field anymore
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'pages,select_key,recursive';

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignature,
    'FILE:EXT:' . $extensionKey . '/Configuration/FlexForms/MyFlexForm.xml',
);
// ---------------
