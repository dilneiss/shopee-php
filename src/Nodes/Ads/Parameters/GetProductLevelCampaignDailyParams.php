<?php

namespace Shopee\Nodes\Ads\Parameters;

use Shopee\RequestParameters;

class GetProductLevelCampaignDailyParams extends RequestParameters
{
    public function getStartDate()
    {
        return $this->parameters['start_date'] ;
    }
    public function setStartDate($start_date)
    {
        $this->parameters['start_date'] = $start_date;
        return $this;
    }
    public function getEndDate()
    {
        return $this->parameters['end_date']  ;
    }
    public function setEndDate($start_date)
    {
        $this->parameters['end_date'] = $start_date;
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
