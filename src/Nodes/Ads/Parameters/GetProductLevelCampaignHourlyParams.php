<?php

namespace Shopee\Nodes\Ads\Parameters;

use Shopee\RequestParameters;

class GetProductLevelCampaignHourlyParams extends RequestParameters
{
    public function getPerformanceDate()
    {
        return $this->parameters['performance_date'];
    }
    public function setPerformanceDate($performance_date)
    {
        $this->parameters['performance_date'] = $performance_date;
        return $this;
    }
    public function getListCampaign()
    {
        return $this->parameters['campaign_id_list'];
    }
    public function setListCampaign($campaign_id_list)
    {
        $this->parameters['campaign_id_list'] = $campaign_id_list;
        return $this;
    }
}
