<?php

namespace App\Domain\Bills\Repository\Contracts;

use App\Domain\Shared\Repository\Contracts\BaseRepositoryInterface;

interface BillsRepositoryInterface extends BaseRepositoryInterface
{
    public function getMonthlyBills(): float;
}
