<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\CpuCoolerController;

class CpuCoolerControllerTest extends TestCase
{
    public function testIndex()
    {
        $controller = new CpuCoolerController();
        $response = $controller->index();

        $this->assertIsObject($response);
        // Additional assertions based on expected response
    }

    public function testShow()
    {
        $controller = new CpuCoolerController();
        $response = $controller->show(1);  // Assuming ID 1 exists

        $this->assertIsObject($response);
        // Additional assertions based on expected response
    }

    public function testIndexWithNoCoolers()
    {
        $controller = new CpuCoolerController();
        // Assume that there are no coolers in the database
        // You may need to mock the database call
        $response = $controller->index();

        $this->assertIsObject($response);
        $this->assertEmpty($response->getData()); // Assuming getData() method returns an array of coolers
    }
}
