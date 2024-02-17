<?php

namespace Database\Factories;

use App\Domain\Entity\Bills;
use App\Domain\Entity\Entries;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Domain\Entity\Entries>
 */
class EntriesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Entries::class;

    public function definition(): array
    {
        return [
            'client_id' => rand(1, 5000),
            'entry_value' => fake()->randomFloat(2, 100, 5000),
            'entry_payment_type' => rand(1, 3),
            'entry_payment_date' => Carbon::now()->format('Y-m-d H:i:s')
        ];
    }
}
