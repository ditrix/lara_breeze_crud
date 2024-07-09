<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiCompanyTest extends TestCase
{

    public function test_get_companies(): void
    {
        $response = $this->get('api/companies');

        $response->assertStatus(200);
        // ->assertJsonStructure([
        //     '*' => [
        //         'id',
        //         'name',
        //         'email',
        //         'address',
        //         'website',
        //         'created_at',
        //         'updated_at',
        //     ]
        // ]);
    }

}
