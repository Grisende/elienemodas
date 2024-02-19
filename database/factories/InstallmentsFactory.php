<?php

namespace Database\Factories;

use App\Domain\Sales\Entity\Installments;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Domain\Sales\Entity\Installments>
 */
class InstallmentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Installments::class;
    public function definition(): array
    {
        return [
            'debit_id' => rand(1, 5000),
            'installment_value' => fake()->randomFloat(2, 100, 5000),
            'paid' => fake()->boolean(),
            'due_date' => Carbon::now()->endOfMonth()->format('Y-m-d H:i:s')
        ];
    }
}
