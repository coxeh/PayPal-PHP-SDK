<?php
namespace PayPal\Api;

use PayPal\Common\PayPalModel;
use PayPal\Common\PayPalResourceModel;
use PayPal\Rest\ApiContext;
use PayPal\Transport\PayPalRestCall;
use PayPal\Validation\ArgumentValidator;

/**
 * Class Subscription
 *
 * @package PayPal\Api
 *
 * @property string id
 * @property string status
 * @property string status_change_note
 * @property string status_update_time
 * @property string plan_id
 * @property string start_time
 * @property string quantity
 * @property Money shipping_amount
 * @property Subscriber subscriber
 * @property boolean auto_renewal
 * @property ApplicationContext application_context
 * @property string create_time
 * @property string update_time
 */

class Subscription extends PayPalResourceModel{

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
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $statusChangeNote
     * @return $this
     */
    public function setStatusChangeNote($statusChangeNote)
    {
        $this->status_change_note = $statusChangeNote;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusChangeNote()
    {
        return $this->status_change_note;
    }

    /**
     * @param string $statusUpdateTime
     * @return $this
     */
    public function setStatusUpdateTime($statusUpdateTime)
    {
        $this->status_update_time = $statusUpdateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusUpdateTime()
    {
        return $this->status_update_time;
    }

    /**
     * @param string $planId
     * @return $this
     */
    public function setPlanId($planId)
    {
        $this->plan_id = $planId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlanId()
    {
        return $this->plan_id;
    }

    /**
     * @param string $startTime
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->start_time = $startTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * @param string $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param \PayPal\Api\Money $shippingAmount
     * @return $this
     */
    public function setShippingAmount($shippingAmount)
    {
        $this->shipping_amount = $shippingAmount;
        return $this;
    }

    /**
     * @return \PayPal\Api\Money
     */
    public function getShippingAmount()
    {
        return $this->shipping_amount;
    }

    /**
     * @param \PayPal\Api\Subscriber $subscriber
     * @return $this
     */
    public function setSubscriber($subscriber)
    {
        $this->subscriber = $subscriber;
        return $this;
    }

    /**
     * @return \PayPal\Api\Subscriber
     */
    public function getSubscriber()
    {
        return $this->subscriber;
    }

    /**
     * @param boolean $autoRenewal
     * @return $this
     */
    public function setAutoRenewal($autoRenewal)
    {
        $this->auto_renewal = $autoRenewal;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoRenewal()
    {
        return $this->auto_renewal;
    }

    /**
     * @param \PayPal\Api\ApplicationContext $applicationContext
     * @return $this
     */
    public function setApplicationContext($applicationContext)
    {
        $this->application_context = $applicationContext;
        return $this;
    }

    /**
     * @return \PayPal\Api\ApplicationContext
     */
    public function getApplicationContext()
    {
        return $this->application_context;
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
     * Retrieve the details for a particular Subscription by passing the subscription plan ID to the request URI.
     *
     * @param string $subscriptionId
     * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
     * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
     * @return Subscription
     */
    public static function get($subscriptionId, $apiContext = null, $restCall = null)
    {
        ArgumentValidator::validate($subscriptionId, 'planId');
        $payLoad = "";
        $json = self::executeCall(
            "/v1/billing/subscriptions/$subscriptionId",
            "GET",
            $payLoad,
            null,
            $apiContext,
            $restCall
        );
        $ret = new Subscription();
        $ret->fromJson($json);
        return $ret;
    }

    /**
     * Create a new Subscription by passing the details for the subscription
     *
     * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
     * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
     * @return Subscription
     */
    public function create($apiContext = null, $restCall = null)
    {
        $payLoad = $this->toJSON();
        $json = self::executeCall(
            "/v1/billing/subscriptions",
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
     * Replace specific fields within a Subscription by passing the ID of the Subscription to the request URI. In addition, pass a patch object in the request JSON that specifies the operation to perform, field to update, and new value for each update.
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
            "/v1/billing/subscriptions/{$this->getId()}",
            "PATCH",
            $payLoad,
            null,
            $apiContext,
            $restCall
        );
        return true;
    }

    /**
     * Delete a subscription by passing the ID of the billing plan to the request URI.
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
     * List subscriptions according to optional query string parameters specified.
     *
     * @param array $params
     * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
     * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
     * @return SubscriptionList
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
            "/v1/billing/subscriptions/" . "?" . http_build_query(array_intersect_key($params, $allowedParams)),
            "GET",
            $payLoad,
            null,
            $apiContext,
            $restCall
        );
        $ret = new SubscriptionList();
        $ret->fromJson($json);
        return $ret;
    }
}
