<?php

namespace App\Domain\Bills\Repository;

use App\Domain\Bills\Repository\Contracts\BillsRepositoryInterface;
use App\Domain\Shared\Repository\BaseRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BillsRepository extends BaseRepository implements BillsRepositoryInterface
{
    public function getMonthlyBills(): float
    {
        return (float)DB::table('bills')
            ->whereBetween('due_date', [
                Carbon::now()->startOfMonth()->format('Y-m-d H:i:s'),
                Carbon::now()->endOfMonth()->format('Y-m-d H:i:s')
            ])
            ->sum('bill_value');
    }
}
