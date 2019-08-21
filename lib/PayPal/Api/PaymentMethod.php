<?php

namespace PayPal\Api;

use PayPal\Common\PayPalModel;


/**
 * Class PaymentMethod
 *
 * Payment method
 *
 * @package PayPal\Api
 *
 * @property string payer_selected
 * @property string payee_preferred
 =
 */
class PaymentMethod extends PayPalModel
{
    /**
     * The customer-selected payment method on the merchant site.
     *
     * @param string $payerSelected
     *
     * @return $this
     */
    public function setPayerSelected($payerSelected)
    {
        $this->payer_selected = $payerSelected;
        return $this;
    }
    /**
     * The customer-selected payment method on the merchant site.
     * @return string
     */
    public function getPayerSelected()
    {
        return $this->payer_selected;
    }

    /**
     * The merchant-preferred payment sources.
     *
     * @param string $payeePreferred
     *
     * @return $this
     */
    public function setPayeePreferred($payeePreferred)
    {
        $this->payee_preferred = $payeePreferred;
        return $this;
    }
    /**
     * The merchant-preferred payment sources.
     * @return string
     */
    public function getPayeePreferred()
    {
        return $this->payee_preferred;
    }


}
