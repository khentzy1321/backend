<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\computer>
 */
class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'item'=> $this->faker->userName,
            'manufacturer' => $this->faker->randomElement(["Apple","GXE","Shenzhen","Samsung","DELL","SONY","HP","Lenovo"]),
            'description'=>$this->faker->sentence(3),
            'price'=>$this->faker->numberBetween(500,100000),
            'quantity'=>$this->faker->numberBetween(0,100),
        ];
    }
}
