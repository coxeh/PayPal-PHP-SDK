<?php

namespace PayPal\Test\Api;

use PayPal\Api\BillingCycle;
use PayPal\Api\Frequency;
use PHPUnit\Framework\TestCase;

/**
 * Class BillingCycleTest
 *
 * @package PayPal\Test\Api
 */
class BillingCycleTest extends TestCase
{
    /**
     * Gets Json String of Object Plan
     * @return string
     */
    public static function getJson()
    {
        return '{"pricing_scheme":'.PricingSchemeTest::getJson().',"frequency":'.FrequencyTest::getJson().',"tenure_type":"TestSample","sequence":1,"total_cycles":1}';
    }

    /**
     * Gets Object Instance with Json data filled in
     * @return BillingCycle
     */
    public static function getObject()
    {
        return new BillingCycle(self::getJson());
    }


    /**
     * Tests for Serialization and Deserialization Issues
     * @return BillingCycle
     */
    public function testSerializationDeserialization()
    {
        $obj = new BillingCycle(self::getJson());
        $this->assertNotNull($obj);
        $this->assertNotNull($obj->getPricingScheme());
        $this->assertNotNull($obj->getFrequency());
        $this->assertNotNull($obj->getTenureType());
        $this->assertNotNull($obj->getSequence());
        $this->assertNotNull($obj->getTotalCycles());
        $this->assertEquals(self::getJson(), $obj->toJson());
        return $obj;
    }

    /**
     * @depends testSerializationDeserialization
     * @param BillingCycle $obj
     */
    public function testGetters($obj)
    {
        $this->assertEquals($obj->getPricingScheme(), PricingSchemeTest::getObject());
        $this->assertEquals($obj->getFrequency(), FrequencyTest::getObject());
        $this->assertEquals($obj->getTenureType(), 'TestSample');
        $this->assertEquals($obj->getSequence(), 1);
        $this->assertEquals($obj->getTotalCycles(), 1);
    }

}
