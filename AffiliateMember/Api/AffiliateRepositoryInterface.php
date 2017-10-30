<?php

namespace AM\AffiliateMember\Api;

interface AffiliateRepositoryInterface
{

    /**
     * @return \AM\AffiliateMember\Api\Data\AffiliateInterface[]
     **/
    public function getList();

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \AM\AffiliateMember\Api\Data\AffiliateInterface[]
     */
    public function getMemberList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
}