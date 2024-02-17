<?php

namespace App\Domain\Application\Dashboard;

use App\Domain\Repository\Contracts\BillsRepositoryInterface;
use App\Domain\Repository\Contracts\DebitsRepositoryInterface;
use App\Domain\Repository\Contracts\SalesRepositoryInterface;

class GetData
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
