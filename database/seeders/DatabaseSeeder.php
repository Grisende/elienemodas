<?php

namespace Database\Seeders;

use App\Domain\Entity\Bills;
use App\Domain\Entity\Clients;
use \App\Domain\Entity\Debits;
use App\Domain\Entity\Entries;
use App\Domain\Entity\Installments;
use App\Domain\Entity\Sales;
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
