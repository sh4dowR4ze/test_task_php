<?php

/**
 * PHP version 7.3
 *
 * @category Settings
 * @package  RetailCrm\Api\Model\Entity\Settings
 */

namespace RetailCrm\Api\Model\Entity\Settings;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Settings
 *
 * @category Settings
 * @package  RetailCrm\Api\Model\Entity\Settings
 */
class Settings
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Settings\Value
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Settings\Value")
     * @JMS\SerializedName("default_currency")
     */
    public $defaultCurrency;

    /**
     * @var \RetailCrm\Api\Model\Entity\Settings\Value
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Settings\Value")
     * @JMS\SerializedName("system_language")
     */
    public $systemLanguage;

    /**
     * @var \RetailCrm\Api\Model\Entity\Settings\Value
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Settings\Value")
     * @JMS\SerializedName("timezone")
     */
    public $timezone;

    /**
     * @var \RetailCrm\Api\Model\Entity\Settings\WorkTime[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Settings\WorkTime>")
     * @JMS\SerializedName("work_times")
     */
    public $workTimes;

    /**
     * @var \RetailCrm\Api\Model\Entity\Settings\NonWorkingDay[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Settings\NonWorkingDay>")
     * @JMS\SerializedName("non_working_days")
     */
    public $nonWorkingDays;

    /**
     * @var \RetailCrm\Api\Model\Entity\Settings\MgSettings
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Settings\MgSettings")
     * @JMS\SerializedName("mg")
     */
    public $mgSettings;
}
