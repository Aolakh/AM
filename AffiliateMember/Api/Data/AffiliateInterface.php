<?php

namespace AM\AffiliateMember\Api\Data;

Interface AffiliateInterface
{
    /** @return string **/
    public function getName();

    /** @return string | null **/
    public function getImageUrl();

    /** @return integer **/
    public function getStatus();

    /** @return timestamp **/
    public function getCreatedAt();

    /** @return timestamp **/
    public function getUpdateTime();
}