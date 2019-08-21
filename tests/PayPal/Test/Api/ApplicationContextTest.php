<?php

namespace PayPal\Test\Api;

use PayPal\Api\Amount;
use PayPal\Api\ApplicationContext;
use PHPUnit\Framework\TestCase;

/**
 * Class ApplicationContextTest
 *
 * @package PayPal\Test\Api
 */
class ApplicationContextTest extends TestCase
{
    /**
     * Gets Json String of Object Amount
     * @return string
     */
    public static function getJson()
    {
        return '{"brand_name":"BrandName","locale":"Locale","shipping_preference":"ShippingPreference","user_action":"UserAction","payment_method":' . PaymentMethodTest::getJson() . ',"return_url":"ReturnUrl","cancel_url":"CancelUrl"}';
    }

    /**
     * Gets Object Instance with Json data filled in
     * @return ApplicationContext
     */
    public static function getObject()
    {
        return new ApplicationContext(self::getJson());
    }


    /**
     * Tests for Serialization and Deserialization Issues
     * @return ApplicationContext
     */
    public function testSerializationDeserialization()
    {
        $obj = new ApplicationContext(self::getJson());
        $this->assertNotNull($obj);
        $this->assertNotNull($obj->getBrandName());
        $this->assertNotNull($obj->getLocale());
        $this->assertNotNull($obj->getShippingPreference());
        $this->assertNotNull($obj->getUserAction());
        $this->assertNotNull($obj->getPaymentMethod());
        $this->assertNotNull($obj->getReturnUrl());
        $this->assertNotNull($obj->getCancelUrl());
        $this->assertEquals(self::getJson(), $obj->toJson());
        return $obj;
    }

    /**
     * @depends testSerializationDeserialization
     * @param ApplicationContext $obj
     */
    public function testGetters($obj)
    {
        $this->assertEquals($obj->getBrandName(), "BrandName");
        $this->assertEquals($obj->getLocale(), "Locale");
        $this->assertEquals($obj->getShippingPreference(), "ShippingPreference");
        $this->assertEquals($obj->getUserAction(), "UserAction");
        $this->assertEquals($obj->getPaymentMethod(), PaymentMethodTest::getObject());
        $this->assertEquals($obj->getReturnUrl(), "ReturnUrl");
        $this->assertEquals($obj->getCancelUrl(), "CancelUrl");
    }
}
