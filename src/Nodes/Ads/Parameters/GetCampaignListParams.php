<?php

namespace Shopee\Nodes\Ads\Parameters;

use Shopee\RequestParameters;

class GetCampaignListParams extends RequestParameters
{
    public function getAdType()
    {
        return $this->parameters['ad_type'] ;
    }
    public function setAdType($ad_type)
    {
        $this->parameters['ad_type'] = $ad_type;
        return $this;
    }
    public function getOffset()
    {
        return $this->parameters['offset']  ;
    }
    public function setOffset($offset)
    {
        $this->parameters['offset'] = $offset;
        return $this;
    }
    public function getLimit()
    {
        return $this->parameters['limit']  ;
    }
    public function setLimit($limit)
    {
        $this->parameters['limit'] = $limit;
        return $this;
    }
}
