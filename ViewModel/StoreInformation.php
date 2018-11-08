<?php
/**
 * Copyright © Fisheye Media Ltd. All rights reserved.
 * See LICENCE.txt for licence details.
 */
namespace Fisheye\StoreHelp\ViewModel;

use Magento\Framework\DataObject;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Store\Model\Information;
use Magento\Store\Model\StoreManagerInterface;

class StoreInformation implements ArgumentInterface
{
    /**
     * @var DataObject
     */
    private $storeData;

    /**
     * @var Information
     */
    private $storeInformation;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    public function __construct(
        Information $storeInformation,
        StoreManagerInterface $storeManager
    ) {
        $this->storeInformation = $storeInformation;
        $this->storeManager = $storeManager;
    }

    public function getStorePhone(): ?string
    {
        return $this->getStoreData()->getData('phone');
    }

    public function getStoreHours(): ?string
    {
        return $this->getStoreData()->getData('hours');
    }

    public function getStoreAddress(): ?string
    {
        return $this->storeInformation->getFormattedAddress(
            $this->storeManager->getStore()
        );
    }

    private function getStoreData(): DataObject
    {
        if (is_null($this->storeData)) {
            $this->storeData = $this->storeInformation->getStoreInformationObject($this->storeManager->getStore());
        }
        return $this->storeData;
    }
}
