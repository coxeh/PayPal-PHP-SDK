<?php

namespace PayPal\Api;

use PayPal\Common\PayPalModel;

/**
 * Class PricingScheme
 *
 * Resource representing payment definition scheduling information.
 *
 * @package PayPal\Api
 *
 * @property string version
 * @property \PayPal\Api\Money fixed_price
 * @property string create_time
 * @property string update_time
 */
class PricingScheme extends PayPalModel
{

    public function __toString()
    {
        return parent::__toString(); // TODO: Change the autogenerated stub
    }

    /**
     * @param string $version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param \PayPal\Api\Money $fixed_price
     *
     * @return $this
     */
    public function setFixedPrice($fixed_price)
    {
        $this->fixed_price = $fixed_price;
        return $this;
    }

    /**
     * @return \PayPal\Api\Money
     */
    public function getFixedPrice()
    {
        return $this->fixed_price;
    }

    /**
     * Time when the pricing scheme was created. Format YYYY-MM-DDTimeTimezone, as defined in [ISO8601](http://tools.ietf.org/html/rfc3339#section-5.6).
     *
     * @param string $create_time
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->create_time = $create_time;
        return $this;
    }

    /**
     * Time when the pricing scheme was created. Format YYYY-MM-DDTimeTimezone, as defined in [ISO8601](http://tools.ietf.org/html/rfc3339#section-5.6).
     *
     * @return string
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Time when this pricing scheme was updated. Format YYYY-MM-DDTimeTimezone, as defined in [ISO8601](http://tools.ietf.org/html/rfc3339#section-5.6).
     *
     * @param string $update_time
     *
     * @return $this
     */
    public function setUpdateTime($update_time)
    {
        $this->update_time = $update_time;
        return $this;
    }

    /**
     * Time when this pricing scheme was updated. Format YYYY-MM-DDTimeTimezone, as defined in [ISO8601](http://tools.ietf.org/html/rfc3339#section-5.6).
     *
     * @return string
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }
}
