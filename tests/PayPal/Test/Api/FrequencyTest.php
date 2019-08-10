<?php

namespace PayPal\Test\Api;

use PayPal\Api\Frequency;
use PHPUnit\Framework\TestCase;

/**
 * Class FrequencyTest
 *
 * @package PayPal\Test\Api
 */
class FrequencyTest extends TestCase
{
    /**
     * Gets Json String of Object Plan
     * @return string
     */
    public static function getJson()
    {
        return '{"interval_unit":"WEEK","interval_count":1}';
    }

    /**
     * Gets Object Instance with Json data filled in
     * @return Frequency
     */
    public static function getObject()
    {
        return new Frequency(self::getJson());
    }


    /**
     * Tests for Serialization and Deserialization Issues
     * @return Frequency
     */
    public function testSerializationDeserialization()
    {
        $obj = new Frequency(self::getJson());
        $this->assertNotNull($obj);
        $this->assertNotNull($obj->getIntervalCount());
        $this->assertNotNull($obj->getIntervalUnit());
        $this->assertEquals(self::getJson(), $obj->toJson());
        return $obj;
    }

    /**
     * @depends testSerializationDeserialization
     * @param Frequency $obj
     */
    public function testGetters($obj)
    {
        $this->assertEquals($obj->getIntervalCount(), 1);
        $this->assertEquals($obj->getIntervalUnit(), "WEEK");
    }

}
