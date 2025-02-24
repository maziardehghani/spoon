<?php

namespace Tests\Feature;

use App\Trait\AdminTestable;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase, AdminTestable;
    /**
     * A basic feature test example.
     */
    public function test_admin_can_see_products(): void
    {
        $response = $this->getData(route('admin.products.index'));

        $response->assertStatus(200);
    }
}
