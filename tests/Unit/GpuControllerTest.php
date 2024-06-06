<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\GpuController;

class GpuControllerTest extends TestCase
{
    public function testIndex()
    {
        $controller = new GpuController();
        $response = $controller->index();

        $this->assertIsObject($response);
        // Additional assertions based on expected response
    }

    public function testShow()
    {
        $controller = new GpuController();
        $response = $controller->show(1);  // Assuming ID 1 exists

        $this->assertIsObject($response);
        // Additional assertions based on expected response
    }

    public function testShowNonExistent()
    {
        $controller = new GpuController();
        $response = $controller->show(999);  // Assuming ID 999 does not exist

        $this->assertEquals(404, $response->getStatusCode()); // Assuming non-existent ID returns 404 status code
    }
}
