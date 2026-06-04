<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class Add extends RequestParameters
{
    use CategoryIdTrait;

    public function getName(): string
    {
        return $this->parameters['item_name'];
    }

    /**
     * Name of the item in local language.
     *
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->parameters['item_name'] = $name;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->parameters['description'];
    }

    /**
     * Description of the item in local language.
     *
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description)
    {
        $this->parameters['description'] = $description;

        return $this;
    }

    public function getPrice(): float
    {
        return $this->parameters['original_price'];
    }

    /**
     * The current price of the item in the listing currency.
     *
     * @param float $price
     * @return $this
     */
    public function setPrice(float $price)
    {
        $this->parameters['original_price'] = $price;

        return $this;
    }

    public function getStock(): SellerStocks
    {
        return $this->parameters['seller_stock'];
    }

    /**
     * The current stock quantity of the item.
     *
     * @param SellerStocks $stock
     * @return $this
     */
    public function setStock(SellerStocks $stock)
    {
        $this->parameters['seller_stock'] = $stock;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->parameters['item_status'];
    }

    /**
     * The current stock quantity of the item.
     *
     * @param string $status
     * @return $this
     */
    public function setStatus(string $status)
    {
        $this->parameters['item_status'] = $status;

        return $this;
    }

    public function getDimension(): Dimension
    {
        return $this->parameters['dimension'];
    }

    /**
     * @param Dimension $dimension
     * @return $this
     */
    public function setDimension(Dimension $dimension)
    {
        $this->parameters['dimension'] = $dimension;

        return $this;
    }


    public function getItemSku(): ?string
    {
        return $this->parameters['item_sku'];
    }

    /**
     * An item SKU (stock keeping unit) is an identifier defined by a seller, sometimes called parent SKU.
     * Item SKU can be assigned to an item in Shopee Listings.
     * @param string $itemSku
     * @return $this
     */
    public function setItemSku(string $itemSku)
    {
        $this->parameters['item_sku'] = $itemSku;

        return $this;
    }

    public function getImages(): Images
    {
        return $this->parameters['image'];
    }

    /**
     * Image URLs of the item. Up to 9 images, max 2.0 MB each.Image format accepted: JPG, JPEG, PNG.
     * Suggested dimension: 1024 x 1024 px.
     *
     * @param Images $images
     * @return $this
     */
    public function setImages(Images $images)
    {
        $this->parameters['image'] = $images;

        return $this;
    }

    public function getAttributes(): ?Attributes
    {
        return $this->parameters['attribute_list'];
    }

    /**
     * Should call shopee.item.GetAttributes to get attribute first. Should contain all all mandatory attribute.
     *
     * @param Attributes $attributes
     * @return $this
     */
    public function setAttributes(Attributes $attributes)
    {
        $this->parameters['attribute_list'] = $attributes;

        return $this;
    }

    public function getLogistics(): ?Logistics
    {
        return $this->parameters['logistic_info'];
    }

    /**
     * Should call shopee.logistics.GetLogistics to get logistics first. Should contain all all logistics.
     *
     * @param Logistics $logistics
     * @return $this
     */
    public function setLogistics(Logistics $logistics)
    {
        $this->parameters['logistic_info'] = $logistics;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->parameters['weight'];
    }

    /**
     * The net weight of this item, the unit is KG.
     *
     * @param float $weight
     * @return $this
     */
    public function setWeight(float $weight)
    {
        $this->parameters['weight'] = $weight;

        return $this;
    }

    public function getPreOrder(): ?PreOrder
    {
        return $this->parameters['days_to_ship'];
    }

    /**
     * The days to ship. Only work for pre-order, it means this value should be bigger than 7.
     *
     * @param PreOrder $preOrder
     * @return $this
     */
    public function setPreOrder(PreOrder $preOrder)
    {
        $this->parameters['pre_order'] = $preOrder;

        return $this;
    }

    public function getWholesales(): ?Wholesales
    {
        return $this->parameters['wholesales'];
    }

    /**
     * The wholesales tier list. Please put the wholesale tier info in order by min count.
     *
     * @param Wholesales $wholesales
     * @return $this
     */
    public function setWholesales(Wholesales $wholesales)
    {
        $this->parameters['wholesales'] = $wholesales;

        return $this;
    }

    public function getBrand(): ?Brand
    {
        return $this->parameters['brand'];
    }

    /**
     *
     * @param Brand $brand
     * @return $this
     */
    public function setBrand(Brand $brand)
    {
        $this->parameters['brand'] = $brand;

        return $this;
    }

    public function geVideoUploadId(): string
    {
        return $this->parameters['video_upload_id'];
    }

    /**
     * Name of the item in local language.
     *
     * @param string $name
     * @return $this
     */
    public function setVideoUploadId(string $name)
    {
        $this->parameters['video_upload_id'] = [$name];

        return $this;
    }
    public function getDescriptionType(): string
    {
        return $this->parameters['description_type'];
    }

    /**
     * Name of the item in description_type
     *
     * @param string $description_type
     * @return $this
     */
    public function setDescriptionType(string $description_type)
    {
        $this->parameters['description_type'] = $description_type;

        return $this;
    }

}
