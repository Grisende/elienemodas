<?php

namespace App\Providers;

use App\Domain\Bills\Repository\BillsRepository;
use App\Domain\Bills\Repository\Contracts\BillsRepositoryInterface;
use App\Domain\Clients\Repository\ClientsRepository;
use App\Domain\Clients\Repository\Contracts\ClientsRepositoryInterface;
use App\Domain\Debits\Repository\Contracts\DebitsRepositoryInterface;
use App\Domain\Debits\Repository\DebitsRepository;
use App\Domain\Sales\Repository\Contracts\SalesRepositoryInterface;
use App\Domain\Sales\Repository\SalesRepository;
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
