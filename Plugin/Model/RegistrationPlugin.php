<?php
/**
 *
 * @category   MaxMage
 * @package    DisableRegistration
 * @author     MaxMage Core Team <maxmagedev@gmail.com>
 * @date       2/6/2018
 * @copyright  Copyright © 2018 MaxMage. All rights reserved.
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @file       Registration.php
 */

namespace MaxMage\DisableRegistration\Plugin\Model;


use Magento\Customer\Model\Registration;
use MaxMage\DisableRegistration\Helper\Data;

class RegistrationPlugin
{

    /**
     * @var Data
     */
    protected $helper;

    /**
     * RegistrationPlugin constructor.
     * @param Data $helper
     */
    public function __construct(Data $helper)
    {
        $this->helper = $helper;
    }

    /**
     * @param Registration $subject
     * @return bool
     */
    public function afterIsAllowed(Registration $subject, $result)
    {
        if ($this->helper->isModuleEnabled()) {
            return false;
        }
        return true;
    }
}