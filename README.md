# installation

composer create-project laravel/laravel:^10.0 my-laravel-project

cp .env.example .env

nano .env  

composer require laravel/sail --dev

php artisan sail:install

./vendor/bin/sail up -dev

./vendor/bin/sail artisan key:generate

./vendor/bin/sail artisan storage:link

./vendor/bin/sail artisan migrate

--------------------------------------------------

# ui (breeze)

 composer require laravel/breeze --dev

 artisan breeze:install blade

------------------------------------------------

# backend

 artisan make:model Company -m

 artisan migrate

 artisan make:controller Api/CompanyController --resource --api --model=Company

 artisan make:resource CompanyResource

 artisan make:request CompanyRequest


# test

php artisan make:test MyTests

ex.

class MyTest extends TestCase
{
   use RefreshDatabase;

    public function test_get_companies(): void
    {
        $response = $this->get('api/companies');

        // $response->dump(); for debug and more information

        $response->assertStatus(200);

    }
}



# frontend

npm install vue@latest vue-router@4

npm install --save-dev @vitejs/plugin-vue

https://laravel.com/docs/11.x/vite#vue


# frontend structure

js

    components

        compaines

            CompaniesIndex.vue

            CompaniesCreate.vue

            CompaniesEdit.vue

    composables

        companies.js   // mb is modern Composition API for vue

    router

        index.js 

    app.js        

#
