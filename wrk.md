 composer require laravel/breeze --dev
 artisan breeze:install blade


 artisan make:model Company -m

 artisan migrate

 artisan make:controller Api/CompanyController --resource --api --model=Company

 artisan make:resource CompanyResource

 artisan make:request CompanyRequest

