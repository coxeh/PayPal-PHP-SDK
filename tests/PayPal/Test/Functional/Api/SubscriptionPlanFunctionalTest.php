<?php

namespace PayPal\Test\Functional\Api;

use PayPal\Api\Product;
use PayPal\Api\SubscriptionPlan;
use PayPal\Test\Functional\Setup;
use PHPUnit\Framework\TestCase;

/**
 * Class SubscriptionPlanFunctionalTest
 *
 * @package PayPal\Test\Api
 */
class SubscriptionPlanFunctionalTest extends TestCase
{

    public static $obj;

    public $operation;

    public $response;

    public $mode = 'mock';

    public $mockPayPalRestCall;

    public $apiContext;

    public function setUp()
    {
        $className = $this->getClassName();
        $testName = $this->getName();
        $this->setupTest($className, $testName);
    }

    public function setupTest($className, $testName)
    {
        $operationString = file_get_contents(__DIR__ . "/../resources/$className/$testName.json");
        $this->operation = json_decode($operationString, true);
        $this->response = json_encode($this->operation);

        Setup::SetUpForFunctionalTests($this);
    }

    public function testCreate()
    {
        $request = $this->operation;
        $obj = new SubscriptionPlan($request);
        $result = $obj->create($this->apiContext, $this->mockPayPalRestCall);
        $this->assertNotNull($result);
        self::$obj = $result;
        return $result;
    }
    /**
     * @depends testCreate
     * @param $subscriptionPlan SubscriptionPlan
     * @return SubscriptionPlan
     */
    public function testGet($subscriptionPlan)
    {
        $result = SubscriptionPlan::get($subscriptionPlan->getId(), $this->apiContext, $this->mockPayPalRestCall);
        $this->assertNotNull($result);
        $this->assertEquals($subscriptionPlan->getId(), $result->getId());
        $this->assertEquals($subscriptionPlan->toJSON(), $result->toJSON(), "", 0, 10, true);
        return $result;
    }

    /**
     * @depends testGet
     * @param $subscriptionPlan SubscriptionPlan
     */
    public function testGetList($subscriptionPlan)
    {
        $result = SubscriptionPlan::all(array('page_size' => '20', 'total_required' => 'yes'), $this->apiContext, $this->mockPayPalRestCall);
        $this->assertNotNull($result);
        $totalPages = $result->getTotalPages();
        $found = false;
        $foundObject = null;
        do {
            foreach ($result->getPlans() as $obj) {
                if ($obj->getId() == $subscriptionPlan->getId()) {
                    $found = true;
                    $foundObject = $obj;
                    break;
                }
            }
            if (!$found) {
                $result = Product::all(array('page' => --$totalPages, 'page_size' => '20', 'total_required' => 'yes'), $this->apiContext, $this->mockPayPalRestCall);
            }
        } while ($totalPages > 0 && $found == false);
        $this->assertTrue($found, "The Created Subscription Plan was not found in the get list");
        $this->assertEquals($subscriptionPlan->getId(), $foundObject->getId());
    }



    /**
     * Returns just the classname of the test you are executing. It removes the namespaces.
     * @return string
     */
    public function getClassName()
    {
        return join('', array_slice(explode('\\', get_class($this)), -1));
    }
}
