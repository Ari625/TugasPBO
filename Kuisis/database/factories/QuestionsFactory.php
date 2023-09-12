<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\questions>
 */
class QuestionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'quiz_id' => fake(),
            'question' => fake(),
            'option_a' => fake(),
            'option_b' => fake(),
            'option_c' => fake(),
            'option_d' => fake(),
            'answer' => fake()
        ];
    }
}
