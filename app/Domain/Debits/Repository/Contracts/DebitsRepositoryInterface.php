<?php

namespace App\Domain\Debits\Repository\Contracts;

use App\Domain\Shared\Repository\Contracts\BaseRepositoryInterface;

interface DebitsRepositoryInterface extends BaseRepositoryInterface
{
    public function getMonthlyDebits(): float;
}
