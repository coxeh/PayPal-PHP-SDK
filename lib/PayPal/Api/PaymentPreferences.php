<?php

namespace PayPal\Api;

use PayPal\Common\PayPalModel;

/**
 * Class PaymentPreferences
 *
 * @package PayPal\Api
 *
 * @property boolean auto_bill_outstanding
 * @property \PayPal\Api\Money setup_fee
 * @property string setup_fee_failure_action
 * @property integer payment_failure_threshold
 */
class PaymentPreferences extends PayPalModel
{
    /**
     * @param boolean $auto_bill_outstanding
     *
     * @return $this
     */
    public function setAutoBillOutstanding($auto_bill_outstanding)
    {
        $this->auto_bill_outstanding = $auto_bill_outstanding;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoBillOutstanding()
    {
        return $this->auto_bill_outstanding;
    }

    /**
     * @param string $setup_fee_failure_action
     *
     * @return $this
     */
    public function setSetupFeeFailureAction($setup_fee_failure_action)
    {
        $this->setup_fee_failure_action = $setup_fee_failure_action;
        return $this;
    }

    /**
     * @return string
     */
    public function getSetupFeeFailureAction()
    {
        return $this->setup_fee_failure_action;
    }

    /**
     * @param \PayPal\Api\Money $setup_fee
     *
     * @return $this
     */
    public function setSetupFee($setup_fee)
    {
        $this->setup_fee = $setup_fee;
        return $this;
    }

    /**
     * @return \PayPal\Api\Money
     */
    public function getSetupFee()
    {
        return $this->setup_fee;
    }

    /**
     * @param integer $payment_failure_threshold
     *
     * @return $this
     */
    public function setPaymentFailureThreshold($payment_failure_threshold)
    {
        $this->payment_failure_threshold = $payment_failure_threshold;
        return $this;
    }

    /**
     * @return integer
     */
    public function getPaymentFailureThreshold()
    {
        return $this->payment_failure_threshold;
    }

}
