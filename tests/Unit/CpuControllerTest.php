<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\CpuController;
use Illuminate\Http\Request;
use App\Models\Cpu;

class CpuControllerTest extends TestCase
{
    public function testIndex()
    {
        $controller = new CpuController();
        $response = $controller->index();

        $this->assertIsObject($response);
        // Additional assertions based on expected response
    }

    public function testShow()
    {
        $controller = new CpuController();
        $response = $controller->show(1);  // Assuming ID 1 exists

        $this->assertIsObject($response);
        // Additional assertions based on expected response
    }

    public function testStore()
    {
        $controller = new CpuController();
        $request = new Request([
            'name' => 'Test CPU',
            'manufacturer' => 'Test Manufacturer',
            'price' => 100,
            'speed' => 3.5,
        ]);

        $response = $controller->store($request);

        $this->assertIsObject($response);
        // Additional assertions based on expected response
    }

    public function testUpdate()
    {
        $controller = new CpuController();
        $request = new Request([
            'name' => 'Updated CPU',
            'manufacturer' => 'Updated Manufacturer',
            'price' => 200,
            'speed' => 4.0,
        ]);

        $response = $controller->update($request, 1);  // Assuming ID 1 exists

        $this->assertIsObject($response);
        // Additional assertions based on expected response
    }

    public function testDestroy()
    {
        $controller = new CpuController();
        $response = $controller->destroy(1);  // Assuming ID 1 exists

        $this->assertIsObject($response);
        // Additional assertions based on expected response
    }

    public function testStoreValidationFails()
    {
        $controller = new CpuController();
        $request = new Request([
            'name' => '',  // Invalid input
            'manufacturer' => 'Test Manufacturer',
            'price' => 100,
            'speed' => 3.5,
        ]);

        $response = $controller->store($request);

        $this->assertEquals(422, $response->getStatusCode()); // Assuming validation returns 422 status code
    }

    public function testUpdateValidationFails()
    {
        $controller = new CpuController();
        $request = new Request([
            'name' => '',  // Invalid input
            'manufacturer' => 'Updated Manufacturer',
            'price' => 200,
            'speed' => 4.0,
        ]);

        $response = $controller->update($request, 1);  // Assuming ID 1 exists

        $this->assertEquals(422, $response->getStatusCode()); // Assuming validation returns 422 status code
    }
}
