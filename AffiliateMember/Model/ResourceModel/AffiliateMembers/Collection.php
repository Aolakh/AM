<?php
namespace AM\AffiliateMember\Model\ResourceModel\AffiliateMembers;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('AM\AffiliateMember\Model\AffiliateMembers', 'AM\AffiliateMember\Model\ResourceModel\AffiliateMembers');
        $this->_map['fields']['id'] = 'main_table.id';
    }
}