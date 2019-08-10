<?php

namespace PayPal\Api;

use PayPal\Common\PayPalModel;
use PayPal\Common\PayPalResourceModel;
use PayPal\Rest\ApiContext;
use PayPal\Transport\PayPalRestCall;
use PayPal\Validation\ArgumentValidator;

/**
 * Class SubscriptionPlan
 *
 * Product
 *
 * @package PayPal\Api
 *
 * @property string id
 * @property string product_id
 * @property string name
 * @property string status
 * @property string description
 * @property BillingCycle[] billing_cycles
 * @property PaymentPreferences payment_preferences
 * @property Taxes taxes
 * @property string quantity_supported
 * @property string create_time
 * @property string update_time
 */
class SubscriptionPlan extends PayPalResourceModel{


    /**
     * Identifier of the subscription plan 128 characters max.
     *
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Identifier of the subscription plan. 128 characters max.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Product ID of the subscription plan 128 characters max.
     *
     * @param string $product_id
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
        return $this;
    }

    /**
     * Product ID of the subscription plan. 128 characters max.
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Name of the subscription plan. 128 characters max.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Name of the subscription plan. 128 characters max.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Status of the subscription plan. 128 characters max.
     *
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Status of the subscription plan. 128 characters max.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Description of the subscription plan. 128 characters max.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Description of the subscription plan. 128 characters max.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Array of billing cycles for this subscription plan.
     *
     * @param \PayPal\Api\BillingCycle[] $billing_cycles
     *
     * @return $this
     */
    public function setBillingCycles($billing_cycles)
    {
        $this->billing_cycles = $billing_cycles;
        return $this;
    }

    /**
     * Array of billing cycles for this subscription plan.
     *
     * @return \PayPal\Api\BillingCycle[]
     */
    public function getBillingCycles()
    {
        return $this->billing_cycles;
    }

    /**
     * Append BillingCycle to the list.
     *
     * @param \PayPal\Api\BillingCycle $billingCycle
     * @return $this
     */
    public function addBillingCycle($billingCycle)
    {
        if (!$this->getBillingCycles()) {
            return $this->setBillingCycles(array($billingCycle));
        } else {
            return $this->setBillingCycles(
                array_merge($this->getBillingCycles(), array($billingCycle))
            );
        }
    }

    /**
     * Remove BillingCycle from the list.
     *
     * @param \PayPal\Api\BillingCycle $paymentDefinition
     * @return $this
     */
    public function removePaymentDefinition($billingCycle)
    {
        return $this->setBillingCycles(
            array_diff($this->getBillingCycles(), array($billingCycle))
        );
    }

    /**
     * Payment Preferences for this subscription plan.
     *
     * @param \PayPal\Api\PaymentPreferences $payment_preferences
     *
     * @return $this
     */
    public function setPaymentPreferences($payment_preferences)
    {
        $this->payment_preferences = $payment_preferences;
        return $this;
    }

    /**
     * Payment Preferences for this subscription plan.
     *
     * @return \PayPal\Api\PaymentPreferences
     */
    public function getPaymentPreferences()
    {
        return $this->payment_preferences;
    }

    /**
     * Taxes for this subscription plan.
     *
     * @param \PayPal\Api\Taxes $taxes
     *
     * @return $this
     */
    public function setTaxes($taxes)
    {
        $this->taxes = $taxes;
        return $this;
    }

    /**
     * Taxes for this subscription plan.
     *
     * @return \PayPal\Api\Taxes
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Quantity Supported for this subscription plan.
     *
     * @param string $quantity_supported
     *
     * @return $this
     */
    public function setQuantitySupported($quantity_supported)
    {
        $this->quantity_supported = $quantity_supported;
        return $this;
    }

    /**
     * Quantity Supported  for this subscription plan.
     *
     * @return string
     */
    public function getQuantitySupported()
    {
        return $this->quantity_supported;
    }

    /**
     * Time when the subscription plan was created. Format YYYY-MM-DDTimeTimezone, as defined in [ISO8601](http://tools.ietf.org/html/rfc3339#section-5.6).
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
     * Time when the subscription plan was created. Format YYYY-MM-DDTimeTimezone, as defined in [ISO8601](http://tools.ietf.org/html/rfc3339#section-5.6).
     *
     * @return string
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Time when this subscription plan was updated. Format YYYY-MM-DDTimeTimezone, as defined in [ISO8601](http://tools.ietf.org/html/rfc3339#section-5.6).
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
     * Time when this subscription plan was updated. Format YYYY-MM-DDTimeTimezone, as defined in [ISO8601](http://tools.ietf.org/html/rfc3339#section-5.6).
     *
     * @return string
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }


    /**
     * Retrieve the details for a particular Subscription Plan by passing the subscription plan ID to the request URI.
     *
     * @param string $planId
     * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
     * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
     * @return SubscriptionPlan
     */
    public static function get($planId, $apiContext = null, $restCall = null)
    {
        ArgumentValidator::validate($planId, 'planId');
        $payLoad = "";
        $json = self::executeCall(
            "/v1/billing/plans/$planId",
            "GET",
            $payLoad,
            null,
            $apiContext,
            $restCall
        );
        $ret = new SubscriptionPlan();
        $ret->fromJson($json);
        return $ret;
    }

    /**
     * Create a new Subscription Plan by passing the details for the plan, including the plan name, description, and type, to the request URI.
     *
     * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
     * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
     * @return SubscriptionPlan
     */
    public function create($apiContext = null, $restCall = null)
    {
        $payLoad = $this->toJSON();
        $json = self::executeCall(
            "/v1/billing/plans",
            "POST",
            $payLoad,
            null,
            $apiContext,
            $restCall
        );
        $this->fromJson($json);
        return $this;
    }

    /**
     * Replace specific fields within a Subscription plan by passing the ID of the Subscription plan to the request URI. In addition, pass a patch object in the request JSON that specifies the operation to perform, field to update, and new value for each update.
     *
     * @param PatchRequest $patchRequest
     * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
     * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
     * @return bool
     */
    public function update($patchRequest, $apiContext = null, $restCall = null)
    {
        ArgumentValidator::validate($this->getId(), "Id");
        ArgumentValidator::validate($patchRequest, 'patchRequest');
        $payLoad = $patchRequest->toJSON();
        self::executeCall(
            "/v1/billing/plans/{$this->getId()}",
            "PATCH",
            $payLoad,
            null,
            $apiContext,
            $restCall
        );
        return true;
    }

    /**
     * Delete a subscription plan by passing the ID of the billing plan to the request URI.
     *
     * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
     * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
     * @return bool
     */
    public function delete($apiContext = null, $restCall = null)
    {
        ArgumentValidator::validate($this->getId(), "Id");
        $patchRequest = new PatchRequest();
        $patch = new Patch();
        $value = new PayPalModel('{
            "state":"DELETED"
        }');
        $patch->setOp('replace')
            ->setPath('/')
            ->setValue($value);
        $patchRequest->addPatch($patch);
        return $this->update($patchRequest, $apiContext, $restCall);
    }

    /**
     * List subscription plans according to optional query string parameters specified.
     *
     * @param array $params
     * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
     * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
     * @return SubscriptionPlanList
     */
    public static function all($params, $apiContext = null, $restCall = null)
    {
        ArgumentValidator::validate($params, 'params');
        $payLoad = "";
        $allowedParams = array(
            'page_size' => 1,
            'status' => 1,
            'page' => 1,
            'total_required' => 1
        );
        $json = self::executeCall(
            "/v1/billing/plans/" . "?" . http_build_query(array_intersect_key($params, $allowedParams)),
            "GET",
            $payLoad,
            null,
            $apiContext,
            $restCall
        );
        $ret = new SubscriptionPlanList();
        $ret->fromJson($json);
        return $ret;
    }
}
