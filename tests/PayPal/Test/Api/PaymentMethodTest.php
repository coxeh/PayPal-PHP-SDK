<?php

namespace PayPal\Test\Api;

use PayPal\Api\Amount;
use PayPal\Api\Name;
use PayPal\Api\PaymentMethod;
use PHPUnit\Framework\TestCase;

/**
 * Class PaymentMethod
 *
 * @package PayPal\Test\Api
 */
class PaymentMethodTest extends TestCase
{
    /**
     * Gets Json String of Object Amount
     * @return string
     */
    public static function getJson()
    {
        return '{"payer_selected":"PayerSelected","payee_preferred":"PayeePreferred"}';
    }

    /**
     * Gets Object Instance with Json data filled in
     * @return PaymentMethod
     */
    public static function getObject()
    {
        return new PaymentMethod(self::getJson());
    }


    /**
     * Tests for Serialization and Deserialization Issues
     * @return PaymentMethod
     */
    public function testSerializationDeserialization()
    {
        $obj = new PaymentMethod(self::getJson());
        $this->assertNotNull($obj);
        $this->assertNotNull($obj->getPayeePreferred());
        $this->assertNotNull($obj->getPayerSelected());
        $this->assertEquals(self::getJson(), $obj->toJson());
        return $obj;
    }

    /**
     * @depends testSerializationDeserialization
     * @param PaymentMethod $obj
     */
    public function testGetters($obj)
    {
        $this->assertEquals($obj->getPayeePreferred(), "PayeePreferred");
        $this->assertEquals($obj->getPayerSelected(), "PayerSelected");
    }
}
