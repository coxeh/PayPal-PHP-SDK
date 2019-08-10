<?php

namespace PayPal\Api;

use PayPal\Common\PayPalModel;

/**
 * Class Frequency
 *
 * Amount of money for currency
 *
 * @package PayPal\Api
 *
 * @property string interval_unit
 * @property integer interval_count
 */
class Frequency extends PayPalModel
{
    /**
     * @param string $interval_unit
     *
     * @return $this
     */
    public function setIntervalUnit($interval_unit)
    {
        $this->interval_unit = $interval_unit;
        return $this;
    }

    /**
     * @return string
     */
    public function getIntervalUnit()
    {
        return $this->interval_unit;
    }
    /**
     * @param integer $interval_count
     *
     * @return $this
     */
    public function setIntervalCount($interval_count)
    {
        $this->interval_count = $interval_count;
        return $this;
    }

    /**
     * @return string
     */
    public function getIntervalCount()
    {
        return $this->interval_count;
    }
}
