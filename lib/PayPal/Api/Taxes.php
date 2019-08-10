<?php

namespace PayPal\Api;

use PayPal\Common\PayPalModel;
use PayPal\Common\PayPalResourceModel;
use PayPal\Rest\ApiContext;
use PayPal\Transport\PayPalRestCall;
use PayPal\Validation\ArgumentValidator;

/**
 * Class Product
 *
 * Product
 *
 * @package PayPal\Api
 *
 * @property string percentage
 * @property boolean inclusive
 */
class Taxes extends PayPalModel{

    /**
     * Percentage for this Tax
     *
     * @param string $percentage
     *
     * @return $this
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
        return $this;
    }

    /**
     * Percentage for this Tax
     *
     * @return string
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Inclusive for this Tax
     *
     * @param boolean $inclusive
     *
     * @return $this
     */
    public function setInclusive($inclusive)
    {
        $this->inclusive = $inclusive;
        return $this;
    }

    /**
     * Inclusive for this Tax
     *
     * @return boolean
     */
    public function getInclusive()
    {
        return $this->inclusive;
    }
}
