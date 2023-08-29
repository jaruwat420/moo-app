<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_title' => $this->faker->sentence,
            'post_date' => Carbon::now(), // ใช้ Carbon::now() ให้เป็นค่าเริ่มต้น
            'post_at' => $this->faker->city,
            'post_price' => $this->faker->randomNumber(2),
            'post_ticket' => $this->faker->word,
            'post_detail' => $this->faker->paragraph,
            'post_image' => $this->faker->imageUrl(),
        ];
    }
}

