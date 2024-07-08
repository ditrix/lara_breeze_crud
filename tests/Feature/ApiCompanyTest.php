<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiCompanyTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function get_companies(): void
    {
        $response = $this->get('api/companies');

        $response->assertStatus(200);
    }

}
