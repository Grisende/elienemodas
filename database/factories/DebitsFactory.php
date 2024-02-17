<?php

namespace Database\Factories;

use App\Domain\Entity\Debits;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Domain\Entity\Debits>
 */
class DebitsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Debits::class;
    public function definition(): array
    {
        return [
            'client_id' => rand(1, 5000),
            'debit_value' => fake()->randomFloat(2, 100, 5000),
            'debit_installments' => rand(1, 12),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
    }
}
