<?php

namespace PayPal\Test\Api;


use PayPal\Api\PricingScheme;
use PHPUnit\Framework\TestCase;

/**
 * Class PricingSchemeTest
 *
 * @package PayPal\Test\Api
 */
class PricingSchemeTest extends TestCase{
    /**
     * Gets Json String of Object Plan
     * @return string
     */
    public static function getJson()
    {
        return '{"version":"TestSample","fixed_price":'.MoneyTest::getJson().',"create_time":"TestSample","update_time":"TestSample"}';
    }

    /**
     * Gets Object Instance with Json data filled in
     * @return PricingScheme
     */
    public static function getObject()
    {
        return new PricingScheme(self::getJson());
    }


    /**
     * Tests for Serialization and Deserialization Issues
     * @return PricingScheme
     */
    public function testSerializationDeserialization()
    {
        $obj = new PricingScheme(self::getJson());
        $this->assertNotNull($obj);
        $this->assertNotNull($obj->getVersion());
        $this->assertNotNull($obj->getFixedPrice());
        $this->assertNotNull($obj->getCreateTime());
        $this->assertNotNull($obj->getUpdateTime());
        $this->assertEquals(self::getJson(), $obj->toJson());
        return $obj;
    }

    /**
     * @depends testSerializationDeserialization
     * @param PricingScheme $obj
     */
    public function testGetters($obj)
    {
        $this->assertEquals($obj->getVersion(), "TestSample");
        $this->assertEquals($obj->getFixedPrice(), MoneyTest::getObject());
        $this->assertEquals($obj->getCreateTime(), "TestSample");
        $this->assertEquals($obj->getUpdateTime(), "TestSample");
    }
}
