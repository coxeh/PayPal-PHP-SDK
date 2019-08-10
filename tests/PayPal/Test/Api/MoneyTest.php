<?php

namespace PayPal\Test\Api;

use PayPal\Api\Money;
use PHPUnit\Framework\TestCase;

/**
 * Class Prodcut
 *
 * @package PayPal\Test\Api
 */
class MoneyTest extends TestCase
{
    /**
     * Gets Json String of Object Plan
     * @return string
     */
    public static function getJson()
    {
        return '{"currency_code":"GBP","value":"10"}';
    }

    /**
     * Gets Object Instance with Json data filled in
     * @return Money
     */
    public static function getObject()
    {
        return new Money(self::getJson());
    }


    /**
     * Tests for Serialization and Deserialization Issues
     * @return Money
     */
    public function testSerializationDeserialization()
    {
        $obj = new Money(self::getJson());
        $this->assertNotNull($obj);
        $this->assertNotNull($obj->getCurrencyCode());
        $this->assertNotNull($obj->getValue());
        $this->assertEquals(self::getJson(), $obj->toJson());
        return $obj;
    }

    /**
     * @depends testSerializationDeserialization
     * @param Money $obj
     */
    public function testGetters($obj)
    {
        $this->assertEquals($obj->getCurrencyCode(), "GBP");
        $this->assertEquals($obj->getValue(), "10");
    }

}
