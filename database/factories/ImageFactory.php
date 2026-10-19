<?php

namespace Database\Factories;

use App\Models\image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'path' => 'https://picsum.photos/seed/'. fake()->uuid() .'/1280/960',
        ];
    }
}
