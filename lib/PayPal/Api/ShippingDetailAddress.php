<?php

namespace PayPal\Api;

use PayPal\Common\PayPalModel;
/**
 * Class ShippingDetailAddress
 *
 * Shipping address
 *
 * @package PayPal\Api
 *
 * @property string address_line_1
 * @property string address_line_2
 * @property string admin_area_1
 * @property string admin_area_2
 * @property string postal_code
 * @property string country_code
 */
class ShippingDetailAddress extends PayPalModel{

    /**
     * The address line 1.
     *
     * @param string $address_line_1
     *
     * @return $this
     */
    public function setAddressLine1($address_line_1)
    {
        $this->address_line_1 = $address_line_1;
        return $this;
    }

    /**
     * The address line 2.
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->address_line_1;
    }

    /**
     * The address line 1.
     *
     * @param string $address_line_1
     *
     * @return $this
     */
    public function setAddressLine2($address_line_2)
    {
        $this->address_line_2 = $address_line_2;
        return $this;
    }

    /**
     * The address line 2.
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->address_line_2;
    }

    /**
     * The admin area 1.
     *
     * @param string $admin_area_1
     *
     * @return $this
     */
    public function setAdminArea1($admin_area_1)
    {
        $this->admin_area_1 = $admin_area_1;
        return $this;
    }

    /**
     * The admin area 1.
     *
     * @return string
     */
    public function getAdminArea1()
    {
        return $this->admin_area_1;
    }

    /**
     * The admin area 2.
     *
     * @param string $admin_area_2
     *
     * @return $this
     */
    public function setAdminArea2($admin_area_2)
    {
        $this->admin_area_2 = $admin_area_2;
        return $this;
    }

    /**
     * The admin area 2.
     *
     * @return string
     */
    public function getAdminArea2()
    {
        return $this->admin_area_2;
    }

    /**
     * The postal code
     *
     * @param string $postal_code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->postal_code = $postal_code;
        return $this;
    }

    /**
     * The postal code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * The country code
     *
     * @param string $country_code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->country_code = $country_code;
        return $this;
    }

    /**
     * The country code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }
}
