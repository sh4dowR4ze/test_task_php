<?php

/**
 * PHP version 7.3
 *
 * @category SettingsTest
 * @package  RetailCrm\Tests\Model\Callback\Entity\Integration
 */

namespace RetailCrm\Tests\Model\Callback\Entity\Integration;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Factory\SerializerFactory;
use RetailCrm\Api\Model\Entity\Settings\MgSettings;
use RetailCrm\Api\Model\Entity\Settings\NonWorkingDay;
use RetailCrm\Api\Model\Entity\Settings\Settings as SystemSettings;
use RetailCrm\Api\Model\Callback\Entity\Integration\Settings;
use RetailCrm\Api\Model\Entity\Settings\Value;
use RetailCrm\Api\Model\Entity\Settings\WorkTime;

/**
 * Class SettingsTest
 *
 * @category SettingsTest
 * @package  RetailCrm\Tests\Model\Callback\Entity\Integration
 */
class SettingsTest extends TestCase
{
    public function testDeserialize(): void
    {
        /** @var Settings $settings */
        $settings = SerializerFactory::create()->fromArray(
            [
                'clientId' => '333',
                'settings' => [
                    "default_currency" => [
                        "value" => "RUB",
                        "updated_at" => "2020-12-02 14:54:16",
                    ],
                    'work_times' => [
                        [
                            "day_type" => "Sunday",
                            "start_time" => "00:00",
                            "end_time" => "12:00",
                            "lunch_start_time" => "04:30",
                            "lunch_end_time" => "05:00",
                        ],
                    ],
                    'non_working_days' => [
                        [
                            'start_date' => '05.29',
                            'end_date' => '06.29'
                        ]
                    ],
                    'mg' => [
                        'order_creation' => [
                            'default' => [
                                'site' => 'site',
                                'order_type' => 'type',
                                'order_method' => 'method',
                            ],
                            'channels' => [
                                1111 => [
                                    'site' => 'site_1',
                                    'order_type' => 'type_1',
                                    'order_method' => 'method_1',
                                ],
                                2222 => [
                                    'site' => 'site_2',
                                    'order_type' => 'type_2',
                                    'order_method' => 'method_2',
                                ],
                            ]
                        ]
                    ]
                ],
            ],
            Settings::class
        );

        self::assertInstanceOf(Settings::class, $settings);
        self::assertInstanceOf(SystemSettings::class, $settings->settings);
        self::assertInstanceOf(Value::class, $settings->settings->defaultCurrency);
        self::assertInstanceOf(WorkTime::class, $settings->settings->workTimes[0]);
        self::assertInstanceOf(NonWorkingDay::class, $settings->settings->nonWorkingDays[0]);
        self::assertInstanceOf(MgSettings::class, $settings->settings->mgSettings);
    }
}
