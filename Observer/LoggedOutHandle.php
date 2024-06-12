<?php
/**
 * Module BCMarketplace_Excustomer
 * @author: Raphael Baako <rbaako@baakoconsultingllc.com>
 * @package: BCMarketplace_Excustomer
 * copyright: © Baako Consulting LLC. All rights reserved.
 */
namespace BCMarketplace\Excustomer\Observer;

use Magento\Customer\Model\Session;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class LoggedOutHandle implements ObserverInterface
{

    /***
     * @var Session
     * **/
    private $customerSession;

    public function __construct(Session $customerSession){
        $this->customerSession = $customerSession;
    }

    /***
     * Add a custom handle responsible for adding the trigger-ajax-login class
     *
     * @param Observer $observer
     * @throws \Magento\Framework\Exception\LocalizedException
     * */
    public function execute(Observer $observer){
        $layout = $observer->getEvent()->getLayout();

        if(!$this->customerSession->isLoggedIn()){
            $layout->getUpdate()->addHandle('ajaxlogin_customer_logged_out');
        }
    }
}
