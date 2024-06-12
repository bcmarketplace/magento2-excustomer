<?php

/**
 * Module BCMarketplace_Excustomer
 * @author: Raphael Baako <rbaako@baakoconsultingllc.com>
 * @package: BCMarketplace_Excustomer
 * copyright: © Baako Consulting LLC. All rights reserved.
 */


namespace BCMarketplace\Excustomer\Plugin\Customer\Block\Account;


use Magento\Customer\Model\Context;

class ModifySignInLinkPlugin
{
    /**
     * Customer session
     *
     * @var \Magento\Framework\App\Http\Context
     */
    protected $httpContext;

    /**
     * ModifySignInHrefPlugin constructor.
     *
     * @param \Magento\Framework\App\Http\Context $httpContext
     */
    public function __construct(
        \Magento\Framework\App\Http\Context $httpContext
        )
    {
        $this->httpContext = $httpContext;
    }

    /**
     * @param \Magento\Customer\Block\Account\AuthorizationLink $subject
     * @param $result
     * @return string
     */
    public function afterGetHref(\Magento\Customer\Block\Account\AuthorizationLink $subject, $result)
    {
        if (!$this->isLoggedIn()) {
            $result = '#';
        }
        return $result;
    }

    /**
     * @return bool
     */
    public function isLoggedIn()
    {
        return $this->httpContext->getValue(Context::CONTEXT_AUTH);
    }
}
