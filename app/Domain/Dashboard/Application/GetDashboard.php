<?php

namespace App\Domain\Dashboard\Application;

use App\Domain\Bills\Repository\Contracts\BillsRepositoryInterface;
use App\Domain\Debits\Repository\Contracts\DebitsRepositoryInterface;
use App\Domain\Sales\Repository\Contracts\SalesRepositoryInterface;

class GetDashboard
{
    public function __construct(
        protected readonly BillsRepositoryInterface $billsRepository,
        protected readonly DebitsRepositoryInterface $debitsRepository,
        protected readonly SalesRepositoryInterface $salesRepository
    )
    {
    }

    public function getData(): array
    {
        return [
            'bills' => $this->billsRepository->getMonthlyBills(),
            'sales' => $this->salesRepository->getMonthlySales(),
            'debits' => $this->debitsRepository->getMonthlyDebits()
        ];
    }
}
