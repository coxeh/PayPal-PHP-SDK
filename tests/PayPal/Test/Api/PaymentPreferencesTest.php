<?php

namespace PayPal\Test\Api;


use PayPal\Api\PaymentPreferences;
use PHPUnit\Framework\TestCase;

/**
 * Class PaymentPreferencesTest
 *
 * @package PayPal\Test\Api
 */
class PaymentPreferencesTest extends TestCase
{
    /**
     * Gets Json String of Object Plan
     * @return string
     */
    public static function getJson()
    {
        return '{"auto_bill_outstanding":true,"setup_fee":' . MoneyTest::getJson() . ',"setup_fee_failure_action":"TestSample","payment_failure_threshold":1}';
    }

    /**
     * Gets Object Instance with Json data filled in
     * @return PaymentPreferences
     */
    public static function getObject()
    {
        return new PaymentPreferences(self::getJson());
    }


    /**
     * Tests for Serialization and Deserialization Issues
     * @return PaymentPreferences
     */
    public function testSerializationDeserialization()
    {
        $obj = new PaymentPreferences(self::getJson());
        $this->assertNotNull($obj);
        $this->assertNotNull($obj->getAutoBillOutstanding());
        $this->assertNotNull($obj->getSetupFee());
        $this->assertNotNull($obj->getSetupFeeFailureAction());
        $this->assertNotNull($obj->getPaymentFailureThreshold());
        $this->assertEquals(self::getJson(), $obj->toJson());
        return $obj;
    }

    /**
     * @depends testSerializationDeserialization
     * @param PaymentPreferences $obj
     */
    public function testGetters($obj)
    {
        $this->assertTrue($obj->getAutoBillOutstanding());
        $this->assertEquals($obj->getSetupFee(), MoneyTest::getObject());
        $this->assertEquals($obj->getSetupFeeFailureAction(), "TestSample");
        $this->assertEquals($obj->getPaymentFailureThreshold(), 1);
    }

}
