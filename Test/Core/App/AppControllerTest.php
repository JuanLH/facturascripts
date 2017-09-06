<?php

namespace FacturaScripts\Core\App;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-07-19 at 11:58:01.
 */
class AppControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AppController
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new AppController(PHPUNIT_PATH);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    public function testConnect()
    {
        $this->assertTrue($this->object->connect());
    }

    /**
     * @covers \FacturaScripts\Core\App\AppController::run
     */
    public function testRun()
    {
        // Remove the following lines when you implement this test.
        $this->assertTrue($this->object->run());
    }
}
