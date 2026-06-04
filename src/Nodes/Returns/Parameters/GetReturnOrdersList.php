<?php

namespace Shopee\Nodes\Returns\Parameters;

use Shopee\RequestParameters;

class GetReturnOrdersList extends RequestParameters
{

    protected $parameters = [
        'page_no' => 0,
        'page_size' => 40,
    ];

    /**
     * @param int $page_no
     * @return $this
    */

    public function setPageNo(int $page_no)
    {
        $this->parameters['page_no'] = $page_no;
        return $this;
    }

    /**
     * @param int $page_no
     * @return $this
    */

    public function setPaginationEntriesPerPage(int $perPage = 100)
    {
        $this->parameters['page_size'] = $perPage;

        return $this;
    }

}
