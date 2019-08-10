<?php

namespace PayPal\Test\Api;

use PayPal\Api\Taxes;
use PHPUnit\Framework\TestCase;

/**
 * Class TaxesTest
 *
 * @package PayPal\Test\Api
 */
class TaxesTest extends TestCase{
    public static function getJson()
    {
        return '{"percentage":"10","inclusive":true}';
    }

    /**
     * Gets Object Instance with Json data filled in
     * @return Taxes
     */
    public static function getObject()
    {
        return new Taxes(self::getJson());
    }

    /**
     * Tests for Serialization and Deserialization Issues
     * @return Taxes
     */
    public function testSerializationDeserialization()
    {
        $obj = new Taxes(self::getJson());
        $this->assertNotNull($obj);
        $this->assertNotNull($obj->getPercentage());
        $this->assertNotNull($obj->getInclusive());
        $this->assertEquals(self::getJson(), $obj->toJson());
        return $obj;
    }

    /**
     * @depends testSerializationDeserialization
     * @param Taxes $obj
     */
    public function testGetters($obj)
    {
        $this->assertEquals($obj->getPercentage(), "10");
        $this->assertTrue($obj->getInclusive());
    }
}
