<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_extkey_domain_model_address', 'EXT:ext_key/Resources/Private/Language/locallang_csh_tx_extkey_domain_model_address.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extkey_domain_model_address');
})();
