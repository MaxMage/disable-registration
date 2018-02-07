<?php
/**
 *
 * @category   MaxMage
 * @package    DisableRegistration
 * @author     MaxMage Core Team <maxmagedev@gmail.com>
 * @date       2/6/2018
 * @copyright  Copyright © 2018 MaxMage. All rights reserved.
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @file       Data.php
 */

namespace MaxMage\DisableRegistration\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{

    const XML_PATH_DISABLE_CUSTOMER_REGISTRATION_MODULE_ENABLED = 'disableregistration/general/enable';

    /**
     * @return mixed
     */
    public function isModuleEnabled()
    {
        return $this->getConfig(self::XML_PATH_DISABLE_CUSTOMER_REGISTRATION_MODULE_ENABLED);
    }

    /**
     * @param $configPath
     * @return mixed
     */
    protected function getConfig($configPath)
    {
        return $this->scopeConfig->getValue($configPath, ScopeInterface::SCOPE_STORE);
    }
}