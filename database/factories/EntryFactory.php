<?php

namespace Database\Factories;

use App\Models\Mood;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entry>
 */
class EntryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'notes' => $this->faker->realText(maxNbChars: 300),
            'mood_id' => Mood::inRandomOrder()->value('id'),
        ];
    }
}
