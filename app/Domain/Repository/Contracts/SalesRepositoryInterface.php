<?php

namespace App\Domain\Repository\Contracts;

interface SalesRepositoryInterface extends BaseRepositoryInterface
{
    public function getMonthlySales(): float;
}
