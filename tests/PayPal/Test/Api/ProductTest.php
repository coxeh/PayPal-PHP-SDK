<?php

namespace PayPal\Test\Api;

use PayPal\Api\Product;
use PHPUnit\Framework\TestCase;

/**
 * Class Prodcut
 *
 * @package PayPal\Test\Api
 */
class ProductTest extends TestCase
{
    /**
     * Gets Json String of Object Plan
     * @return string
     */
    public static function getJson()
    {
        return '{"id":"TestSample","name":"TestSample","description":"TestSample","type":"TestSample","category":"TestCategory","image_url":"TestUrl","home_url":"TestHomeUrl","create_time":"TestSample","update_time":"TestSample","links":' .LinksTest::getJson() . '}';
    }

    /**
     * Gets Object Instance with Json data filled in
     * @return Product
     */
    public static function getObject()
    {
        return new Product(self::getJson());
    }


    /**
     * Tests for Serialization and Deserialization Issues
     * @return Product
     */
    public function testSerializationDeserialization()
    {
        $obj = new Product(self::getJson());
        $this->assertNotNull($obj);
        $this->assertNotNull($obj->getId());
        $this->assertNotNull($obj->getName());
        $this->assertNotNull($obj->getDescription());
        $this->assertNotNull($obj->getType());
        $this->assertNotNull($obj->getCategory());
        $this->assertNotNull($obj->getImageUrl());
        $this->assertNotNull($obj->getHomeUrl());
        $this->assertNotNull($obj->getCreateTime());
        $this->assertNotNull($obj->getUpdateTime());
        $this->assertNotNull($obj->getLinks());
        $this->assertEquals(self::getJson(), $obj->toJson());
        return $obj;
    }

    /**
     * @depends testSerializationDeserialization
     * @param Product $obj
     */
    public function testGetters($obj)
    {
        $this->assertEquals($obj->getId(), "TestSample");
        $this->assertEquals($obj->getName(), "TestSample");
        $this->assertEquals($obj->getDescription(), "TestSample");
        $this->assertEquals($obj->getType(), "TestSample");
        $this->assertEquals($obj->getCategory(), "TestCategory");
        $this->assertEquals($obj->getImageUrl(), "TestUrl");
        $this->assertEquals($obj->getHomeUrl(), "TestHomeUrl");
        $this->assertEquals($obj->getCreateTime(), "TestSample");
        $this->assertEquals($obj->getUpdateTime(), "TestSample");
        $this->assertEquals($obj->getLinks(), LinksTest::getObject());
    }

}
