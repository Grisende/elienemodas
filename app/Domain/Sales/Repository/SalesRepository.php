<?php

namespace App\Domain\Sales\Repository;

use App\Domain\Sales\Repository\Contracts\SalesRepositoryInterface;
use App\Domain\Shared\Repository\BaseRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SalesRepository extends BaseRepository implements SalesRepositoryInterface
{
    public function getMonthlySales(): float
    {
        return (float)DB::table('sales')
            ->whereBetween('sale_date', [
                Carbon::now()->startOfMonth()->format('Y-m-d H:i:s'),
                Carbon::now()->endOfMonth()->format('Y-m-d H:i:s')
            ])
            ->sum('sale_value');
    }
}
