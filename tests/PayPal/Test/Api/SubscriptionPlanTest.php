<?php

namespace PayPal\Test\Api;

use PayPal\Api\SubscriptionPlan;
use PHPUnit\Framework\TestCase;

/**
 * Class Prodcut
 *
 * @package PayPal\Test\Api
 */
class SubscriptionPlanTest extends TestCase
{
    /**
     * Gets Json String of Object Plan
     * @return string
     */
    public static function getJson()
    {
        return '{"id":"TestSample","product_id":"TestSample","name":"TestSample","status":"TestSample","description":"TestSample","billing_cycles":'.BillingCycleTest::getJson().',"payment_preferences":'.PaymentPreferencesTest::getJson().',"taxes":'.TaxesTest::getJson().',"quantity_supported":"TestSample","create_time":"TestSample","update_time":"TestSample","links":' .LinksTest::getJson() . '}';
    }

    /**
     * Gets Object Instance with Json data filled in
     * @return SubscriptionPlan
     */
    public static function getObject()
    {
        return new SubscriptionPlan(self::getJson());
    }


    /**
     * Tests for Serialization and Deserialization Issues
     * @return SubscriptionPlan
     */
    public function testSerializationDeserialization()
    {
        $obj = new SubscriptionPlan(self::getJson());
        $this->assertNotNull($obj);
        $this->assertNotNull($obj->getId());
        $this->assertNotNull($obj->getProductId());
        $this->assertNotNull($obj->getName());
        $this->assertNotNull($obj->getStatus());
        $this->assertNotNull($obj->getDescription());
        $this->assertNotNull($obj->getBillingCycles());
        $this->assertNotNull($obj->getPaymentPreferences());
        $this->assertNotNull($obj->getTaxes());
        $this->assertNotNull($obj->getQuantitySupported());
        $this->assertNotNull($obj->getCreateTime());
        $this->assertNotNull($obj->getUpdateTime());
        $this->assertNotNull($obj->getLinks());
        $this->assertEquals(self::getJson(), $obj->toJson());
        return $obj;
    }

    /**
     * @depends testSerializationDeserialization
     * @param SubscriptionPlan $obj
     */
    public function testGetters($obj)
    {
        $this->assertEquals($obj->getId(), "TestSample");
        $this->assertEquals($obj->getProductId(), "TestSample");
        $this->assertEquals($obj->getName(), "TestSample");
        $this->assertEquals($obj->getStatus(), "TestSample");
        $this->assertEquals($obj->getDescription(), "TestSample");
        $this->assertEquals($obj->getBillingCycles(), BillingCycleTest::getObject());
        $this->assertEquals($obj->getPaymentPreferences(), PaymentPreferencesTest::getObject());
        $this->assertEquals($obj->getTaxes(), TaxesTest::getObject());
        $this->assertEquals($obj->getQuantitySupported(), "TestSample");
        $this->assertEquals($obj->getCreateTime(), "TestSample");
        $this->assertEquals($obj->getUpdateTime(), "TestSample");
        $this->assertEquals($obj->getLinks(), LinksTest::getObject());
    }

}
