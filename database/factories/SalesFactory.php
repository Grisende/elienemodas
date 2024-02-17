<?php

namespace Database\Factories;

use App\Domain\Entity\Sales;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Domain\Entity\Sales>
 */
class SalesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Sales::class;
    public function definition(): array
    {
        return [
            'client_id' => rand(1, 5000),
            'sale_value' => fake()->randomFloat(2, 100, 5000),
            'sale_parcial_value' => fake()->randomFloat(2, 100, 5000),
            'sale_payment_type' => rand(1, 3),
            'sale_date' => Carbon::now()->format('Y-m-d H:i:s')
        ];
    }
}
