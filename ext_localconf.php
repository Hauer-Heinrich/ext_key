<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'ExtKey',
        'Myfrontendplug1',
        [
            \MyVendor\ExtKey\Controller\FrontendPlug1Controller::class => 'list, show'
        ],
        // non-cacheable actions
        [
            \MyVendor\ExtKey\Controller\AddressController::class => ''
        ]
    );
})();
