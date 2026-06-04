<?php

namespace Shopee\Nodes\Order\Parameters;

use Shopee\RequestParameters;

class InvoiceData extends RequestParameters
{
    public function getNumber(): string
    {
        return $this->parameters['number'];
    }

    /**
     * @param string $number
     * @return $this
     */
    public function setNumber(string $number)
    {
        $this->parameters['number'] = $number;

        return $this;
    }

    public function getSeriesNumber(): string
    {
        return $this->parameters['series_number'];
    }

    /**
     * @param  string $series_number
     * @return $this
     */
    public function setSeriesNumber($series_number)
    {
        $this->parameters['series_number'] = $series_number;

        return $this;
    }

    public function getAccessKey(): string
    {
        return $this->parameters['access_key'];
    }

    /**
     * @param  string $access_key
     * @return $this
     */
    public function setAccessKey($access_key)
    {
        $this->parameters['access_key'] = $access_key;

        return $this;
    }

    public function getIssueDate(): int
    {
        return $this->parameters['issue_date'];
    }

    /**
     * @param  int $issue_date
     * @return $this
     */
    public function setIssueDate($issue_date)
    {
        $this->parameters['issue_date'] = $issue_date;

        return $this;
    }

    public function getTotalValue(): float
    {
        return $this->parameters['total_value'];
    }

    /**
     * @param  float $total_value
     * @return $this
     */
    public function setTotalValue($total_value)
    {
        $this->parameters['total_value'] = $total_value;

        return $this;
    }

    public function getProductsTotalValue(): float
    {
        return $this->parameters['products_total_value'];
    }

    /**
     * @param  float $total_value
     * @return $this
     */
    public function setProductsTotalValue($total_value)
    {
        $this->parameters['products_total_value'] = $total_value;

        return $this;
    }
    public function getTaxCode(): string
    {
        return $this->parameters['tax_code'];
    }

    /**
     * @param  string $tax_code
     * @return $this
     */
    public function setTaxCode($tax_code)
    {
        $this->parameters['tax_code'] = $tax_code;

        return $this;
    }
}
