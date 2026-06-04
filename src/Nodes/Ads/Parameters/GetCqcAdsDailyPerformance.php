<?php

namespace Shopee\Nodes\Ads\Parameters;

use Shopee\RequestParameters;

class GetCqcAdsDailyPerformance extends RequestParameters
{
    public function getStartDate($start_date)
    {
        return $this->parameters['start_date'] = $start_date;
    }
    public function setStartDate($start_date)
    {
        $this->parameters['start_date'] = $start_date;
        return $this;
    }
    public function getEndDate($start_date)
    {
        return $this->parameters['end_date'] = $start_date;
    }
    public function setEndDate($start_date)
    {
        $this->parameters['end_date'] = $start_date;
        return $this;
    }
}