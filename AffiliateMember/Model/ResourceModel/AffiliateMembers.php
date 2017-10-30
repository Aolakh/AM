<?php

namespace AM\AffiliateMember\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class AffiliateMembers extends AbstractDb{
    protected function _construct()
    {
        $this->_init('affiliate_members', 'id');
    }
}
