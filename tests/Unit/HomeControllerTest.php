<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\HomeController;

class HomeControllerTest extends TestCase
{
    public function testIndex()
    {
        $controller = new HomeController();
        $response = $controller->index();

        $this->assertIsObject($response);
        // Additional assertions based on expected response
    }

    public function testIndexContent()
    {
        $controller = new HomeController();
        $response = $controller->index();

        $this->assertStringContainsString('Welcome', $response->getContent());
    }
}
