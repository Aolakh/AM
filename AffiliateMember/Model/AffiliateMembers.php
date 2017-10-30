<?php

namespace AM\AffiliateMember\Model;

use Magento\Framework\Model\AbstractModel;

class AffiliateMembers extends AbstractModel{
    protected function _construct()
    {
        $this->_init(\AM\AffiliateMember\Model\ResourceModel\AffiliateMembers::class);
    }
}