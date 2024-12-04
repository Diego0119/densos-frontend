<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Commune;
use App\Models\Category;
use App\Models\Highlighted;
use App\Models\User;
use App\Models\Notice;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notice>
 */
class NoticeFactory extends Factory
{
    protected $model = Notice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'commune_id' => Commune::inRandomOrder()->first()->id ?? Commune::factory(),
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory(),
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'highlighted_id' => Highlighted::inRandomOrder()->first()->id ?? Highlighted::factory(),
            'title' => $this->faker->sentence(6),
            'description' => $this->faker->paragraph(3),
            'price' => $this->faker->randomFloat(2, 100, 10000),
            'status' => $this->faker->randomElement(['EN_REVISION', 'ACTIVO', 'PAUSADO']),
        ];
    }
}