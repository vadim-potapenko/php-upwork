<?php
namespace Upwork\API\Tests\Routers;

require_once __DIR__  . '/CommonTestRouter.php';

class SnapshotTest extends CommonTestRouter
{
    /**
     * Setup
     */
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     */
    public function testGetByContract()
    {
        $router = new \Upwork\API\Routers\Snapshot($this->_client);
        $response = $router->getByContract('1234', '1234567890');
        
        $this->_checkResponse($response);
    }

    /**
     * @test
     */
    public function testUpdateByContract()
    {
        $router = new \Upwork\API\Routers\Snapshot($this->_client);
        $response = $router->updateByContract('1234', '1234567890', array());
        
        $this->_checkResponse($response);
    }

    /**
     * @test
     */
    public function testDeleteByContract()
    {
        $router = new \Upwork\API\Routers\Snapshot($this->_client);
        $response = $router->deleteByContract('1234', '1234567890');
        
        $this->_checkResponse($response);
    }
}
