<?php

/**
 * BCMarketplace_Excustomer extension
 *
/**
 * @category    BCMarketplace
 * @package    BCMarketplace_Excustomer
 * @author     Raphael Baako <rbaako@baakoconsultingllc.com>
 *
 */

namespace BCMarketplace\Excustomer\Plugin\Customer\Block\Account;

class AuthenticationPopupPlugin {

    /**
     * @var \Magento\Cms\Model\Block $blockFactory
     */
     protected $_blockFactory;

    /**
     * @param \Magento\Cms\Model\BlockFactory $blockFactory
     */
    public function __construct(\Magento\Cms\Block\Block $blockFactory)
    {
        $this->_blockFactory = $blockFactory;
    }

    /**
     * Returns popup config
     *
     * @return array
     */
    public function afterGetConfig(\Magento\Customer\Block\Account\AuthenticationPopup $subject, $results)
    {
        $cmsBlock = $this->_blockFactory;
        $results['fbkNewMembers'] = $cmsBlock->setBlockId('fb_login_new_members')->toHtml();
        $results['fbkLoginAccount'] = $cmsBlock->setBlockId('fb_existing_login_account')->toHtml();
        return $results;
    }
}
