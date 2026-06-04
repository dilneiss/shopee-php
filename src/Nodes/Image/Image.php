<?php

namespace Shopee\Nodes\Image;

use Shopee\ClientV2;
use Shopee\Nodes\NodeAbstract;
use Shopee\Nodes\NodeAbstractV2;
use Shopee\ResponseData;

class Image extends NodeAbstractV2
{
    /**
     * Use this optional API to pre-validate your image urls and convert them to Shopee image url to use in item
     * upload APIs.
     * This way your potential invalid urls will not block your item upload process.
     * @param  array  $parameters
     * @return ResponseData
     */
    public function uploadImage($image_url, $params = []): ResponseData
    {
        return $this->uploadWithBody('/api/v2/media_space/upload_image', ClientV2::API_TYPE_PUBLIC, $image_url,$params);
    }
}
