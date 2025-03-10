<?php

namespace Shopee\Nodes;

use Psr\Http\Message\UriInterface;
use Shopee\Client;
use Shopee\ClientV2;
use Shopee\RequestParameters;
use Shopee\RequestParametersInterface;
use Shopee\ResponseData;

abstract class NodeAbstractV2
{
    /** @var ClientV2 */
    protected $client;

    public function __construct(ClientV2 $client)
    {
        $this->client = $client;
    }

    /**
     * @param string|UriInterface $uri
     * @param $type_api
     * @param array $parameters
     * @return ResponseData
     */
    public function post($uri, $type_api, $parameters)
    {
        if ($parameters instanceof RequestParametersInterface) {
            $parameters = $parameters->toArray();
        }

        $request = $this->client->newRequest($uri, $type_api, [], $parameters);
        $response = $this->client->send($request);

        return new ResponseData($response);
    }

    /**
     * @param string|UriInterface $uri
     * @param $type_api
     * @param array $parameters
     * @return ResponseData
     */
    public function get($uri, $type_api, array $parameters = [], array $query = [])
    {
        if ($parameters instanceof RequestParametersInterface) {
            $parameters = $parameters->toArray();
        }

        $request = $this->client->newRequest($uri, $type_api, [], $parameters, $query)->withMethod('GET');
        $response = $this->client->send($request);

        return new ResponseData($response);
    }

    /**
     * @param string|UriInterface $uri
     * @param $type_api
     * @param $file_url
     * @return ResponseData
     */
    public function upload($uri, $type_api, $file_url)
    {

        $request = $this->client->newRequest($uri, $type_api, []);
        $response = $this->client->upload($request, $file_url);
        return new ResponseData($response);
    }

}
