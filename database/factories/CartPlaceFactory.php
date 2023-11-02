<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\StudentCart;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CartPlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'city' => fake()->city(),
            'student_cart_id' => StudentCart::query()->inRandomOrder()->value('id')
        ];
    }
}
