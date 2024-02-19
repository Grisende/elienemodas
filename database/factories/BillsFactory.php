<?php

namespace Database\Factories;

use App\Domain\Bills\Entity\Bills;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Domain\Bills\Entity\Bills>
 */
class BillsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Bills::class;

    public function definition(): array
    {
        return [
            'bill_account_type' => rand(1, 3),
            'bill_bank_slip_code' => fake()->randomNumber(),
            'bill_value' => fake()->randomFloat('2', 1000, 5000),
            'paid' => fake()->boolean(),
            'due_date' => Carbon::now()->endOfMonth()->format('Y-m-d H:i:s')
        ];
    }
}
