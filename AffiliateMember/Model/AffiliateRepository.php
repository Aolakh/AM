<?php

namespace AM\AffiliateMember\Model;

use AM\AffiliateMember\Api\AffiliateRepositoryInterface;
use AM\AffiliateMember\Model\ResourceModel\AffiliateMembers\CollectionFactory;

class AffiliateRepository implements AffiliateRepositoryInterface
{
    private $collectioFactory;

    public function __construct(CollectionFactory $collectioFactory)
    {
        $this->collectioFactory = $collectioFactory;
    }

    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria = NULL)
    {
        if($searchCriteria){
            if($searchCriteria->getFilterGroups()){
                return $this->collectioFactory->create()->getItemsByColumnValue($searchCriteria->getFilterGroups()[0]->getFilters()[0]->getField(),$searchCriteria->getFilterGroups()[0]->getFilters()[0]->getValue());
            }
        }
        return $this->collectioFactory->create()->getItems();
    }
}
