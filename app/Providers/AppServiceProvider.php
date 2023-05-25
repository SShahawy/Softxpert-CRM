<?php

namespace App\Providers;

use App\Repositories\AttributeDataRepository;
use App\Repositories\AttributeRepository;
use App\Repositories\DataTypesRepository;
use App\Repositories\EntityDataRepository;
use App\Repositories\EntityRepository;
use App\Repositories\Interfaces\AttributeDataRepositoryInterface;
use App\Repositories\Interfaces\AttributeRepositoryInterface;
use App\Repositories\Interfaces\EntityDataRepositoryInterface;
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
        $this->app->bind(AttributeDataRepositoryInterface::class, AttributeDataRepository::class);
        $this->app->bind(EntityDataRepositoryInterface::class, EntityDataRepository::class);
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
