<?php

namespace App\Providers;

use App\Repositories\AttributeRepository;
use App\Repositories\DataTypesRepository;
use App\Repositories\EntityRepository;
use App\Repositories\Interfaces\AttributeRepositoryInterface;
use App\Repositories\Interfaces\EntityRepositoryInterface;
use App\Repositories\Interfaces\SystemsRepositoryInterface;
use App\Repositories\SystemsRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EntityRepositoryInterface::class, EntityRepository::class);
        $this->app->bind(AttributeRepositoryInterface::class, AttributeRepository::class);
        $this->app->bind(SystemsRepositoryInterface::class, SystemsRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
