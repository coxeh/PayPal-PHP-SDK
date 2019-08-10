<?php

namespace PayPal\Test\Api;

use PayPal\Api\PlanList;
use PayPal\Api\ProductList;
use PHPUnit\Framework\TestCase;

/**
 * Class ProductList
 *
 * @package PayPal\Test\Api
 */
class ProductListTest extends TestCase
{
    /**
     * Gets Json String of Object PlanList
     * @return string
     */
    public static function getJson()
    {
        return '{"products":' .ProductTest::getJson() . ',"total_items":"TestSample","total_pages":"TestSample","links":' .LinksTest::getJson() . '}';
    }

    /**
     * Gets Object Instance with Json data filled in
     * @return ProductList
     */
    public static function getObject()
    {
        return new ProductList(self::getJson());
    }


    /**
     * Tests for Serialization and Deserialization Issues
     * @return ProductList
     */
    public function testSerializationDeserialization()
    {
        $obj = new ProductList(self::getJson());
        $this->assertNotNull($obj);
        $this->assertNotNull($obj->getProducts());
        $this->assertNotNull($obj->getTotalItems());
        $this->assertNotNull($obj->getTotalPages());
        $this->assertNotNull($obj->getLinks());
        $this->assertEquals(self::getJson(), $obj->toJson());
        return $obj;
    }

    /**
     * @depends testSerializationDeserialization
     * @param ProductList $obj
     */
    public function testGetters($obj)
    {
        $this->assertEquals($obj->getProducts(), ProductTest::getObject());
        $this->assertEquals($obj->getTotalItems(), "TestSample");
        $this->assertEquals($obj->getTotalPages(), "TestSample");
        $this->assertEquals($obj->getLinks(), LinksTest::getObject());
    }
}
