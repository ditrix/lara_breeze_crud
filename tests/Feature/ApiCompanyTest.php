<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Company;


class ApiCompanyTest extends TestCase
{


    use RefreshDatabase;

    public function test_get_companies(): void
    {
        $response = $this->get('api/companies');

        $response->assertStatus(200);

    }

    public function test_create_company(): void
    {

        $data =  [
            'name' => 'dmitry',
            'email' => 'dmitru@mail.com',
            'address' => 'dmitry addr',
            'website' => 'http://www.dmitry.com'
        ];

        $response = $this->postJson('api/companies', $data);
       // $response->dump();


        $response->assertStatus(201) // или другой статус, который вы ожидаете
            ->assertJson([
                'data' => [
                    'name' => 'dmitry',
                    'email' => 'dmitru@mail.com',
                    'address' => 'dmitry addr',
                    'website' => 'http://www.dmitry.com'
                ]
            ]);

        $this->assertDatabaseHas('companies', $data);
    }

}
