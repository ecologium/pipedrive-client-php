<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Tests;

use Pipedrive\APIException;
use Pipedrive\Exceptions;
use Pipedrive\APIHelper;
use Pipedrive\Models;
use Pipedrive\Utils\DateTimeHelper;

class ActivitiesControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Pipedrive\Controllers\ActivitiesController Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass()
    {
        $client = new \Pipedrive\Client();
        self::$controller = $client->getActivities();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Returns all activities assigned to a particular user.
     */
    public function testTestGetAllActivitiesAssignedToAParticularUser()
    {
        // Parameters for the API call
        $input = array();
        $input['userId'] = null;
        $input['filterId'] = null;
        $input['type'] = null;
        $input['start'] = 0;
        $input['limit'] = null;
        $input['startDate'] = null;
        $input['endDate'] = null;
        $input['done'] = null;

        // Set callback and perform API call
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            self::$controller->getAllActivitiesAssignedToAParticularUser($input);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }
}