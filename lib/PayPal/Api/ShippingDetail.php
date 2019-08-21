<?php

namespace PayPal\Api;

use PayPal\Common\PayPalModel;
/**
 * Class ShippingDetail
 *
 * Shipping address
 *
 * @package PayPal\Api
 *
 * @property \PayPal\Api\Name name
 * @property \PayPal\Api\ShippingDetailAddress address
 */
class ShippingDetail extends PayPalModel{

    /**
     * The name.
     *
     * @param \PayPal\Api\Name $first_name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * The name.
     *
     * @return \PayPal\Api\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The address.
     *
     * @param \PayPal\Api\ShippingDetailAddress $address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * The address.
     *
     * @return \PayPal\Api\ShippingDetailAddress
     */
    public function getAddress()
    {
        return $this->address;
    }
}
