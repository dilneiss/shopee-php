<?php

namespace Shopee\Nodes;

use Exception;
use GuzzleHttp\Psr7\Uri;
use GuzzleHttp\Psr7\Utils;
use PHPUnit\Util\Json;
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
    public function get($uri, $type_api, $parameters)
    {
        if ($parameters instanceof RequestParametersInterface) {
            $parameters = $parameters->toArray();
        }
        $uri = Utils::uriFor($uri);
        $path = Uri::withQueryValues($uri, $parameters);

        $request = $this->client->newRequest($path, $type_api, [], $parameters)->withMethod('GET');
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
    /**
     * @param string|UriInterface $uri
     * @param $type_api
     * @param $file_url
     * @return ResponseData
     */
    public function uploadWithBody($uri, $type_api, $file_url, $params = [])
    {

        $request = $this->client->newRequest($uri, $type_api, $params);
        $response = $this->client->upload($request, $file_url);
        return new ResponseData($response);
    }

    /**
     * @param string|UriInterface $uri
     * @param $type_api
     * @param $file_url
     * @return ResponseData
     */
    public function chatUploadWithBody($uri, $type_api, $file_url, $params = [])
    {

        $request = $this->client->newRequest($uri, $type_api, $params);
        $response = $this->client->upload($request, $file_url, 'file');
        return new ResponseData($response);
    }

    /**
     * @param $video_upload_id
     * @param $file_url
     * @param $file_name
     * @return ResponseData
     * @throws Exception
     */
    public function uploadVideoParts($video_upload_id, $file_url, $file_name){
        $fh        = fopen($file_url, 'r');
        $chunkSize = 4194304; # 4MB
        $response = [];
        $parts = [];
        $serial = 0;
        while (! feof($fh)) {
            $parts[] = $serial;
            $chunk = fread($fh, $chunkSize);
            $request = $this->client->newRequest("/api/v2/media_space/upload_video_part", ClientV2::API_TYPE_SHOP, []);
            $response = $this->client->uploadVideoPart($request, $video_upload_id, $file_name, $chunk, $serial);
            $this->parseResponseData(new ResponseData($response));
            $serial ++;
        }
        $response_data_video =  new ResponseData($response);
        $response_data_video->addData('part_seq_list', $parts);
        return $response_data_video;
    }

    public function downloadFile($urlDownload)
    {
        $path_info = pathinfo($urlDownload);
        $filename = $path_info['basename'];
        $tempImage = tempnam(sys_get_temp_dir(), $filename);
        copy($urlDownload, $tempImage);
        return [$tempImage, $filename];
    }

    /**
     * @param $response ResponseData
     * @return mixed
     * @throws Exception
     */
    private function parseResponseData($response){
        $response_data = $response->getData();
        if(!empty($response_data['error'])){
            $message = $response_data['error'] . ": " . $response_data['message'];
            throw new Exception($message);
        }
        return $response_data;
    }

}
