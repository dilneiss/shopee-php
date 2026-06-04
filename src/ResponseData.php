<?php

namespace Shopee;

use App\Util\StringHelper;
use Psr\Http\Message\ResponseInterface;

use function json_decode;

class ResponseData
{
    /** @var ResponseInterface */
    private $response;

    /** @var array */
    private $data;

    public function __construct(ResponseInterface $response)
    {
        $data = $response->getBody()->getContents();

        $dataDecode = json_decode($data, true);

        if (ctype_print($data) || ($dataDecode && is_array($dataDecode))){
            $data = $dataDecode;
        }

        $this->response = $response;
        $this->data = $data;
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }

    public function getData()
    {
        return $this->data;
    }

    public function addData($key, $value){
        $this->data[$key] = $value;
    }
}
