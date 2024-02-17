<?php

namespace App\Domain\Repository\Contracts;

interface DebitsRepositoryInterface extends BaseRepositoryInterface
{
    public function getMonthlyDebits(): float;
}
