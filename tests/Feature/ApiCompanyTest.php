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

    public function test_get_company(): void
    {
        $data =  [
            'name' => 'dmitry voloshin',
            'email' => 'dmitru@mail.com',
            'address' => 'dmitry addr',
            'website' => 'http://www.dmitry.com'
        ];

        $response = $this->postJson('api/companies', $data);

        $response = $this->getJson('api/companies', [1]);



        $response->assertStatus(200)
        ->assertJson([
            'data' =>
              ['0' => [
                'id'    => 2,
                'name' => 'dmitry voloshin',
                'email' => 'dmitru@mail.com',
                'address' => 'dmitry addr',
                'website' => 'http://www.dmitry.com'

              ]
            ]
        ]);

        $this->assertDatabaseHas('companies', $data);
    }


}
