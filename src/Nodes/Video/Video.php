<?php

namespace Shopee\Nodes\Video;

use Exception;
use Shopee\ClientV2;
use Shopee\Nodes\NodeAbstract;
use Shopee\Nodes\NodeAbstractV2;
use Shopee\ResponseData;

class Video extends NodeAbstractV2
{

    /**
     * @param $file_url
     * @return ResponseData
     * @throws Exception
     */
    public function uploadVideo($file_url)
    {
        list($tempVideoDownload, $fileName) = $this->downloadFile($file_url);
        $file_size = filesize($tempVideoDownload);
        $file_md5 = md5_file($tempVideoDownload);

        #Init video upload
        $response_init = $this->post('/api/v2/media_space/init_video_upload',
            ClientV2::API_TYPE_SHOP,
            [
                'file_md5' => $file_md5,
                'file_size' => $file_size
            ]
        );
        $response_data = $response_init->getData();
        if (!empty($response_data['error'])) {
            $message = $response_data['error'] . ": " . $response_data['message'];
            throw new Exception($message);
        }

        #Upload Video Part
        $start = microtime(true);
        $video_upload_id = $response_data['response']['video_upload_id'];
        $response_video = $this->uploadVideoParts($video_upload_id, $tempVideoDownload, $fileName);
        $time_elapsed_secs = intval(microtime(true) - $start);

        #Complete Video Upload
        $response_complete_data = $this->post('/api/v2/media_space/complete_video_upload', ClientV2::API_TYPE_PUBLIC, [
            'video_upload_id' => $video_upload_id,
            'part_seq_list' => $response_video->getData()['part_seq_list'],
            'report_data' => [
                'upload_cost' => $time_elapsed_secs
            ]
        ]);

        $response_complete_data->addData('video_upload_id', $video_upload_id);
        return $response_complete_data;
    }

    /**
     * Use this call to add a product item.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function getVideoUploadResult($parameters = []): ResponseData
    {
        return $this->get('/api/v2/media_space/get_video_upload_result', ClientV2::API_TYPE_SHOP, $parameters);
    }

}
