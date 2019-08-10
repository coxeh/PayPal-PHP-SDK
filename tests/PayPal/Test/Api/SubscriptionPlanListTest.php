<?php

namespace PayPal\Test\Api;

use PayPal\Api\SubscriptionPlanList;
use PHPUnit\Framework\TestCase;

/**
 * Class SubscriptionPlanListTest
 *
 * @package PayPal\Test\Api
 */
class SubscriptionPlanListTest extends TestCase
{
    /**
     * Gets Json String of Object PlanList
     * @return string
     */
    public static function getJson()
    {
        return '{"plans":' .SubscriptionPlanTest::getJson() . ',"total_items":"TestSample","total_pages":"TestSample","links":' .LinksTest::getJson() . '}';
    }

    /**
     * Gets Object Instance with Json data filled in
     * @return SubscriptionPlanList
     */
    public static function getObject()
    {
        return new SubscriptionPlanList(self::getJson());
    }


    /**
     * Tests for Serialization and Deserialization Issues
     * @return SubscriptionPlanList
     */
    public function testSerializationDeserialization()
    {
        $obj = new SubscriptionPlanList(self::getJson());
        $this->assertNotNull($obj);
        $this->assertNotNull($obj->getPlans());
        $this->assertNotNull($obj->getTotalItems());
        $this->assertNotNull($obj->getTotalPages());
        $this->assertNotNull($obj->getLinks());
        $this->assertEquals(self::getJson(), $obj->toJson());
        return $obj;
    }

    /**
     * @depends testSerializationDeserialization
     * @param SubscriptionPlanList $obj
     */
    public function testGetters($obj)
    {
        $this->assertEquals($obj->getPlans(), SubscriptionPlanTest::getObject());
        $this->assertEquals($obj->getTotalItems(), "TestSample");
        $this->assertEquals($obj->getTotalPages(), "TestSample");
        $this->assertEquals($obj->getLinks(), LinksTest::getObject());
    }
}
