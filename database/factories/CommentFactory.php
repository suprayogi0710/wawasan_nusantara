<?php

namespace Database\Factories;

use App\Models\Province;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker::create('id_ID');

        return [
            'province_id' => Province::get(['id'])->random()->id,
            'user_name' => $faker->name($faker->randomElement(['Laki-laki', 'Perempuan'])),
            'parent_id' => $this->faker->optional(0.9)->randomDigitNotZero(),
            'comment' => $faker->paragraph(1),
            'like'  => $this->faker->numberBetween(0, 200),
            'dislike'   => $this->faker->numberBetween(0, 200),
        ];
    }
}
