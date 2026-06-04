<?php

namespace Shopee\Nodes\Chat;

use Shopee\ClientV2;
use Shopee\Nodes\NodeAbstractV2;
use Shopee\RequestParametersInterface;
use Shopee\ResponseData;

class Chat extends NodeAbstractV2 {
	/**
	 * Use this call to get information of shop.
	 * https://open.shopee.com/documents/v2/v2.sellerchat.get_conversation_list?module=109&type=1
	 * @param array|RequestParametersInterface $parameters
	 * @return ResponseData
	 */
	public function getConversationList($parameters = []): ResponseData {
		return $this->get("/api/v2/sellerchat/get_conversation_list", ClientV2::API_TYPE_SHOP, $parameters);
	}
	/**
	 * Use this call to get information of shop.
	 * https://open.shopee.com/documents/v2/v2.sellerchat.get_one_conversation?module=109&type=1
	 * @param array|RequestParametersInterface $parameters
	 * @return ResponseData
	 */
	public function getOneConversation($parameters = []): ResponseData {
		return $this->get("/api/v2/sellerchat/get_one_conversation", ClientV2::API_TYPE_SHOP, $parameters);
	}

    /**
     * Use this call to get information of shop.
     * https://open.shopee.com/documents/v2/v2.sellerchat.read_conversation?module=109&type=1
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function readConversation($parameters = []): ResponseData {
        return $this->post("/api/v2/sellerchat/read_conversation", ClientV2::API_TYPE_SHOP, $parameters);
    }
    /**
	 * https://open.shopee.com/documents/v2/v2.sellerchat.get_message?module=109&type=1
	 * @param array|RequestParametersInterface $parameters
	 * @return ResponseData
	 */
	public function getMessages($parameters = []): ResponseData {
		return $this->get("/api/v2/sellerchat/get_message", ClientV2::API_TYPE_SHOP, $parameters);
	}
	/**
	 * https://open.shopee.com/documents/v2/v2.sellerchat.send_message?module=109&type=1
	 * @param array|RequestParametersInterface $parameters
	 * @return ResponseData
	 */
	public function sendMessage($parameters = []): ResponseData {
		return $this->post("/api/v2/sellerchat/send_message", ClientV2::API_TYPE_SHOP, $parameters);
	}

    /**
     * https://open.shopee.com/documents/v2/v2.sellerchat.send_autoreply_message?module=109&type=1
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function sendAutoReply($parameters = []): ResponseData {
        return $this->post("/api/v2/sellerchat/send_autoreply_message", ClientV2::API_TYPE_SHOP, $parameters);
    }

    /**
     * https://open.shopee.com/documents/v2/v2.sellerchat.upload_image?module=109&type=1
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function uploadImage($image_url, $parameters = []): ResponseData {
        return $this->chatUploadWithBody("/api/v2/sellerchat/upload_image", ClientV2::API_TYPE_SHOP, $image_url, $parameters);
    }
}
