<?php

namespace Database\Seeders;

use App\Domain\Bills\Entity\Bills;
use App\Domain\Clients\Entity\Clients;
use App\Domain\Debits\Entity\Debits;
use App\Domain\Entries\Entity\Entries;
use App\Domain\Sales\Entity\Installments;
use App\Domain\Sales\Entity\Sales;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Bills::factory(10)->create();
        Clients::factory(10)->create();
        Debits::factory(10)->create();
        Entries::factory(10)->create();
        Installments::factory(10)->create();
        Sales::factory(10)->create();
    }
}
