<?php
declare(strict_types=1);

namespace MyVendor\ExtKey\Controller;

/**
 * This file is part of the "default Extension" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 Christian Hackl <web@hauer-heinrich.de>, www.hauer-heinrich.de
 */

use \TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use \TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use \MyVendor\ExtKey\Domain\Repository\AddressRepository;
use \MyVendor\ExtKey\Domain\Model\Address;


/**
 * FrontendPlug1Controller
 */
class FrontendPlug1Controller extends ActionController
{

    /**
     * addressRepository
     *
     * @var AddressRepository
     */
    protected $addressRepository = null;

    /**
     * @param AddressRepository $addressRepository
     */
    public function injectAddressRepository(AddressRepository $addressRepository)
    {
        $this->addressRepository = $addressRepository;
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $addresses = $this->addressRepository->findAll();

        DebuggerUtility::var_dump($this->addressRepository->findAll(), "debug output from the controller");

        $this->view->assign('addresses', $addresses);

        $this->view->assignMultiple([
            "test" => 'blubb'
        ]);

        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param Address $address
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(Address $address): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('address', $address);

        return $this->htmlResponse();
    }
}
