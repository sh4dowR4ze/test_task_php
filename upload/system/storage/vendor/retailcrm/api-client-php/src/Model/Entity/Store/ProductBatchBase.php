<?php

/**
 * PHP version 7.3
 *
 * @category ProductCreateInput
 * @package  RetailCrm\Api\Model\Request\Store
 */

namespace RetailCrm\Api\Model\Entity\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Abstract class ProductBatchBase
 *
 * @category ProductBatchBase
 * @package  RetailCrm\Api\Model\Response\Store
 */
abstract class ProductBatchBase
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("article")
     */
    public $article;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("url")
     */
    public $url;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("description")
     */
    public $description;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("popular")
     */
    public $popular;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("stock")
     */
    public $stock;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("novelty")
     */
    public $novelty;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("recommended")
     */
    public $recommended;

    /**
     * @var \RetailCrm\Api\Model\Entity\Store\ProductEditGroupInput[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Store\ProductEditGroupInput>")
     * @JMS\SerializedName("groups")
     */
    public $groups;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("manufacturer")
     */
    public $manufacturer;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    public $active;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("markable")
     */
    public $markable;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("catalogId")
     */
    public $catalogId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    public $type;
}
