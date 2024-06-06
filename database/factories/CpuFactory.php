<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cpu>
 */
class CpuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand' => $this->faker->name(),
            'name' => $this->faker->name(),
            'cores' => $this->faker->numberBetween($int1= 3, $int2= 99),
            'threads' => $this->faker->numberBetween($int1= 3, $int2= 99),
            'base_clock' => $this->faker->numberBetween($int1= 3, $int2= 99),
            'turbo' => $this->faker->numberBetween($int1= 3, $int2= 99),
            'ram_type' => $this->faker->name(),
            'ram_speed' => $this->faker->name(),
            'tdp' => $this->faker->name(),
            'socket' => $this->faker->name(),
            'price' => $this->faker->numberBetween($int1= 3, $int2= 99),
            

        ];
    }
}
