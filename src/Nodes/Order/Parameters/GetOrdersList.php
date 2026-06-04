<?php

namespace Shopee\Nodes\Order\Parameters;

use Shopee\RequestParameters;

class GetOrdersList extends RequestParameters
{

    const TIME_RANGE_FIELD_CREATE = "create_time";
    const TIME_RANGE_FIELD_UPDATE = "update_time";

    protected $parameters = [
        'time_range_field' => self::TIME_RANGE_FIELD_CREATE,
        'time_from' => 0,
        'time_to' => 0,
        'page_size' => 100,
        'cursor' => ""
    ];

    public function getTimeRangeField(): string
    {
        return $this->parameters['time_range_field'];
    }

    /**
     * @param string $time_range_field
     * @return $this
     */
    public function setTimeRangeField(string $time_range_field)
    {
        $this->parameters['time_range_field'] = $time_range_field;

        return $this;
    }

    public function getCursor(): int
    {
        return $this->parameters['cursor'];
    }

    /**
     *
     * @param int $cursor
     * @return $this
     */
    public function setCursor(int $cursor)
    {
        $this->parameters['cursor'] = $cursor;

        return $this;
    }

    public function getOrderStatus(): string
    {
        return $this->parameters['order_status'];
    }

    /**
     *
     * @param string $status
     * @return $this
     */
    public function setOrderStatus(string $status)
    {
        $this->parameters['order_status'] = $status;

        return $this;
    }

    public function getPaginationEntriesPerPage(): int
    {
        return $this->parameters['page_size'];
    }

    /**
     * If many items are available to retrieve, you may need to call GetItemsList multiple times to retrieve all the
     * data. Each result set is returned as a page of entries. Use the Pagination filters to control the maximum number
     * of entries (<= 100) to retrieve per page (i.e., per call), the offset number to start next call.
     * This integer value is usUed to specify the maximum number of entries to return in a single ""page"" of data.
     *
     * @param int $perPage uint32
     * @return $this
     */
    public function setPaginationEntriesPerPage(int $perPage = 100)
    {
        $this->parameters['page_size'] = $perPage;

        return $this;
    }

    public function getTimeFrom(): ?int
    {
        return $this->parameters['time_from'];
    }

    /**
     * The update_time_from and update_time_to fields specify a date range for retrieving orders (based on the item
     * update time). The update_time_from field is the starting date range. The maximum date range that may be specified
     * with the update_time_from and update_time_to fields is 15 days.
     *
     * @param int $timestamp
     * @return $this
     */
    public function setTimeFrom(int $timestamp)
    {
        $this->parameters['time_from'] = $timestamp;

        return $this;
    }

    public function getTimeTo(): ?int
    {
        return $this->parameters['time_to'];
    }

    /**
     * The update_time_from and update_time_to fields specify a date range for retrieving orders (based on the item
     * update time). The update_time_to field is the ending date range. The maximum date range that may be specified
     * with the update_time_from and update_time_to fields is 15 days.
     *
     * @param int $timestamp
     * @return $this
     */
    public function setTimeTo(int $timestamp)
    {
        $this->parameters['time_to'] = $timestamp;

        return $this;
    }

}
