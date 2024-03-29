<?php

namespace Database\Factories;

use App\Domain\Clients\Entity\Clients;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Domain\Clients\Entity\Clients>
 */
class ClientsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Clients::class;

    public function definition(): array
    {
        return [
            'client_name' => fake()->name(),
            'client_phone' => fake('pt_BR')->phoneNumber(),
        ];
    }
}
