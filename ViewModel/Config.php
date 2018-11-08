<?php
/**
 * Copyright © Fisheye Media Ltd. All rights reserved.
 * See LICENCE.txt for licence details.
 */
namespace Fisheye\StoreHelp\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Store\Model\ScopeInterface;

class Config implements ArgumentInterface
{
    /** Stores configuration paths */
    const XML_PATH_GENERAL_STORE_HELP_ENABLED = 'general/store_help/enabled';
    const XML_PATH_GENERAL_STORE_HELP_DISPLAY_ADDRESS = 'general/store_help/display_address';

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function displayStoreHelpBlock(): bool
    {
        return $this->scopeConfig->isSetFlag(
            self::XML_PATH_GENERAL_STORE_HELP_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function displayStoreAddress(): bool
    {
        return $this->scopeConfig->isSetFlag(
            self::XML_PATH_GENERAL_STORE_HELP_DISPLAY_ADDRESS,
            ScopeInterface::SCOPE_STORE
        );
    }
}
