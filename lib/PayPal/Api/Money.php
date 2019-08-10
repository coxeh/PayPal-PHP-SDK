<?php

namespace PayPal\Api;

use PayPal\Common\PayPalModel;

/**
 * Class Money
 *
 * Amount of money for currency
 *
 * @package PayPal\Api
 *
 * @property string currency_code
 * @property string value
 */
class Money extends PayPalModel
{
    /**
     * @param string $currency_code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->currency_code = $currency_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
