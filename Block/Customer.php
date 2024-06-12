<?php

/***
 * Module Excustomer
 * @author: Raphael Baako <rbaako@baakoconsultingllc.com>
 * copyright: ©  BCMarketplace. All rights reserved.
 */

namespace BCMarketplace\Excustomer\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;


class Customer extends Template {

    /**
     * @var \Magento\Customer\Model\Session
     */
    protected $_customerSession;

    public function __construct( \Magento\Customer\Model\Session $customerSession,   Context $context,  array $data = [])
    {
        $this->_customerSession = $customerSession;
        parent::__construct($context, $data);
    }

    public function isLoggedIn()
    {
        return $this->_customerSession->isLoggedIn();
    }

    public function getCustomerData() {
        $customerData = $this->_customerSession->getCustomerData();
        if ($this->isLoggedIn()) {
            return [
                'name'=> $customerData->getFirstname() . ' Customer.php' .$customerData->getLastname(),
                'email'=> $customerData->getEmail(),
                'isLoggedIn'=>$this->isLoggedIn()
            ];
        }
        return false;

    }

}
