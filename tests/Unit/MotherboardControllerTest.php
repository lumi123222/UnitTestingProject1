<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\MotherboardController;

class MotherboardControllerTest extends TestCase
{
    public function testIndex()
    {
        $controller = new MotherboardController();
        $response = $controller->index();

        $this->assertIsObject($response);
        // Additional assertions based on expected response
    }

    public function testShow()
    {
        $controller = new MotherboardController();
        $response = $controller->show(1);  // Assuming ID 1 exists

        $this->assertIsObject($response);
        // Additional assertions based on expected response
    }

    public function testShowInvalidID()
    {
        $controller = new MotherboardController();
        $response = $controller->show(999);  // Assuming ID 999 does not exist

        $this->assertEquals(404, $response->getStatusCode()); // Assuming non-existent ID returns 404 status code
    }
}
