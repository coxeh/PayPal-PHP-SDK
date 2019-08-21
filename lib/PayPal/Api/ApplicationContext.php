<?php

namespace PayPal\Api;

use PayPal\Common\PayPalModel;
/**
 * Class ApplicationContext
 *
 * Application Context
 *
 * @package PayPal\Api
 *
 * @property string brand_name
 * @property string locale
 * @property string shipping_preference
 * @property string user_action
 * @property PaymentMethod payment_method
 * @property string return_url
 * @property string cancel_url
 */
class ApplicationContext extends PayPalModel{

    /**
     * The brand name
     *
     * @param string $brandName
     *
     * @return $this
     */
    public function setBrandName($brandName)
    {
        $this->brand_name = $brandName;
        return $this;
    }

    /**
     * The brand name
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->brand_name;
    }

    /**
     * The locale
     *
     * @param string $locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * The locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * The locale
     *
     * @param string $shippingPreference
     *
     * @return $this
     */
    public function setShippingPreference($shippingPreference)
    {
        $this->shipping_preference = $shippingPreference;
        return $this;
    }

    /**
     * The locale
     *
     * @return string
     */
    public function getShippingPreference()
    {
        return $this->shipping_preference;
    }

    /**
     * The user action
     *
     * @param string $userAction
     *
     * @return $this
     */
    public function setUserAction($userAction)
    {
        $this->user_action = $userAction;
        return $this;
    }

    /**
     * The user action
     *
     * @return string
     */
    public function getUserAction()
    {
        return $this->user_action;
    }

    /**
     * The payment method
     *
     * @param \PayPal\Api\PaymentMethod $paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->payment_method = $paymentMethod;
        return $this;
    }

    /**
     * The payment method
     *
     * @return \PayPal\Api\PaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->payment_method;
    }

    /**
     * The return url
     *
     * @param string $returnUrl
     *
     * @return $this
     */
    public function setReturnUrl($returnUrl)
    {
        $this->return_url = $returnUrl;
        return $this;
    }

    /**
     * The return url
     *
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->return_url;
    }


    /**
     * The cancel url
     *
     * @param string $cancelUrl
     *
     * @return $this
     */
    public function setCancelUrl($cancelUrl)
    {
        $this->cancel_url = $cancelUrl;
        return $this;
    }

    /**
     * The cancel url
     *
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->cancel_url;
    }
}
