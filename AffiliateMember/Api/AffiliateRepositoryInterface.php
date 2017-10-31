<?php

namespace AM\AffiliateMember\Api;

interface AffiliateRepositoryInterface
{

    /**
     * @return \AM\AffiliateMember\Api\Data\AffiliateInterface[]
     **/
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria = NULL);
}
