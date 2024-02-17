<?php

namespace App\Domain\Repository;

use App\Domain\Repository\Contracts\DebitsRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DebitsRepository extends BaseRepository implements DebitsRepositoryInterface
{
    public function getMonthlyDebits(): float
    {
        return (float)DB::table('debits')
            ->whereBetween('updated_at', [
                Carbon::now()->startOfMonth()->format('Y-m-d H:i:s'),
                Carbon::now()->endOfMonth()->format('Y-m-d H:i:s')
            ])
            ->sum('debit_value');
    }
}
