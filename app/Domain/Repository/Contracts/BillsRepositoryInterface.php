<?php

namespace App\Domain\Repository\Contracts;

interface BillsRepositoryInterface extends BaseRepositoryInterface
{
    public function getMonthlyBills(): float;
}
