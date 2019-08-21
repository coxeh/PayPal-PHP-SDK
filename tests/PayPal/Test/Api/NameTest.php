<?php

namespace PayPal\Test\Api;

use PayPal\Api\Amount;
use PayPal\Api\Name;
use PHPUnit\Framework\TestCase;

/**
 * Class Name
 *
 * @package PayPal\Test\Api
 */
class NameTest extends TestCase
{
    /**
     * Gets Json String of Object Amount
     * @return string
     */
    public static function getJson()
    {
        return '{"prefix":"Prefix","given_name":"GivenName","surname":"Surname","middle_name":"MiddleName","suffix":"Suffix","alternate_full_name":"AlternateFullName","full_name":"FullName"}';
    }

    /**
     * Gets Object Instance with Json data filled in
     * @return Name
     */
    public static function getObject()
    {
        return new Name(self::getJson());
    }


    /**
     * Tests for Serialization and Deserialization Issues
     * @return Name
     */
    public function testSerializationDeserialization()
    {
        $obj = new Name(self::getJson());
        $this->assertNotNull($obj);
        $this->assertNotNull($obj->getPrefix());
        $this->assertNotNull($obj->getGivenName());
        $this->assertNotNull($obj->getSurname());
        $this->assertNotNull($obj->getMiddleName());
        $this->assertNotNull($obj->getSuffix());
        $this->assertNotNull($obj->getAlternateFullName());
        $this->assertNotNull($obj->getFullName());
        $this->assertEquals(self::getJson(), $obj->toJson());
        return $obj;
    }

    /**
     * @depends testSerializationDeserialization
     * @param Name $obj
     */
    public function testGetters($obj)
    {
        $this->assertEquals($obj->getPrefix(), "Prefix");
        $this->assertEquals($obj->getGivenName(), "GivenName");
        $this->assertEquals($obj->getMiddleName(), "MiddleName");
        $this->assertEquals($obj->getSurname(), "Surname");
        $this->assertEquals($obj->getSuffix(), "Suffix");
        $this->assertEquals($obj->getAlternateFullName(), "AlternateFullName");
        $this->assertEquals($obj->getFullName(), "FullName");
    }
}
