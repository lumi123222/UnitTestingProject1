<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\PcPartController;
use Illuminate\Http\Request;

class PcPartControllerTest extends TestCase
{
    public function testIndex()
    {
        $controller = new PcPartController();
        $response = $controller->index();

        $this->assertIsObject($response);
        // Additional assertions based on expected response
    }

    public function testStore()
    {
        $controller = new PcPartController();
        $request = new Request([
            'name' => 'Test Part',
            'category' => 'CPU',
            'price' => 50,
        ]);

        $response = $controller->store($request);

        $this->assertIsObject($response);
        // Additional assertions based on expected response
    }

    public function testStoreWithInvalidData()
    {
        $controller = new PcPartController();
        $request = new Request([
            'name' => '',  // Invalid input
            'category' => 'CPU',
            'price' => 50,
        ]);

        $response = $controller->store($request);

        $this->assertEquals(422, $response->getStatusCode()); // Assuming validation returns 422 status code
    }
}
