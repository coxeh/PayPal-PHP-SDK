<?php

namespace PayPal\Api;

use PayPal\Common\PayPalModel;

/**
 * Class Subscriber
 *
 * Shipping information for the invoice recipient.
 *
 * @package PayPal\Api
 *
 * @property \PayPal\Api\Name name
 * @property string email_address
 * @property \PayPal\Api\ShippingDetail shipping_address
 */
class Subscriber extends PayPalModel
{
    /**
     * The recipient name.
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
     * The invoice recipient name.
     *
     * @return \PayPal\Api\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The subscribers email address
     *
     * @param string $emailAddress
     * 
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->email_address = $emailAddress;
        return $this;
    }

    /**
     * The subscribers email address
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->email_address;
    }

    /**
     * The Subscribers Shipping Address
     *
     * @param \PayPal\Api\ShippingDetail $shipping_address
     * 
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->shipping_address = $shipping_address;
        return $this;
    }

    /**
     * The Subscribers Shipping Address
     *
     * @return \PayPal\Api\ShippingDetail
     */
    public function getShippingAddress()
    {
        return $this->shipping_address;
    }

}
