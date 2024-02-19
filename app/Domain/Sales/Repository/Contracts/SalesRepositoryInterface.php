<?php

namespace App\Domain\Sales\Repository\Contracts;

use App\Domain\Shared\Repository\Contracts\BaseRepositoryInterface;

interface SalesRepositoryInterface extends BaseRepositoryInterface
{
    public function getMonthlySales(): float;
}
