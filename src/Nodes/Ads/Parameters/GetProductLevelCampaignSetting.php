<?php

namespace Shopee\Nodes\Ads\Parameters;

use Shopee\RequestParameters;

class GetProductLevelCampaignSetting extends RequestParameters
{
    public function getInfoTypeList()
    {
        return $this->parameters['info_type_list'];
    }
    public function setInfoTypeList($info_type_list)
    {
        $this->parameters['info_type_list'] = $info_type_list;
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
