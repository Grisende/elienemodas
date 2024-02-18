<?php

namespace App\Providers;

use App\Domain\Repository\BillsRepository;
use App\Domain\Repository\ClientsRepository;
use App\Domain\Repository\Contracts\BillsRepositoryInterface;
use App\Domain\Repository\Contracts\ClientsRepositoryInterface;
use App\Domain\Repository\Contracts\DebitsRepositoryInterface;
use App\Domain\Repository\Contracts\SalesRepositoryInterface;
use App\Domain\Repository\DebitsRepository;
use App\Domain\Repository\SalesRepository;
use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(BillsRepositoryInterface::class, BillsRepository::class);
        $this->app->bind(DebitsRepositoryInterface::class, DebitsRepository::class);
        $this->app->bind(SalesRepositoryInterface::class, SalesRepository::class);
        $this->app->bind(ClientsRepositoryInterface::class, ClientsRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
