<?php
declare(strict_types=1);

namespace MyVendor\ExtKey\Domain\Repository;


/**
 * This file is part of the "default Extension" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 Christian Hackl <web@hauer-heinrich.de>, www.hauer-heinrich.de
 */

use \TYPO3\CMS\Extbase\Persistence\Repository;
use \TYPO3\CMS\Extbase\Persistence\QueryInterface;
use \TYPO3\CMS\Core\Utility\GeneralUtility;
use \TYPO3\CMS\Extbase\Persistence\Generic\QuerySettingsInterface;
use \TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;

/**
 * The repository for Addresses
 */
class AddressRepository extends Repository
{

    /**
     * @var array
     */
    protected $defaultOrderings = [
        'sorting' => QueryInterface::ORDER_ASCENDING
    ];

    public function initializeObject() {
        /** @var QuerySettingsInterface $querySettings */
        $querySettings = GeneralUtility::makeInstance(Typo3QuerySettings::class);
        // Show comments from all pages
        $querySettings->setRespectStoragePage(false);
        $querySettings->setRespectSysLanguage(true);
        // $querySettings->setEnableFieldsToBeIgnored([]);
        $this->setDefaultQuerySettings($querySettings);
    }
}
