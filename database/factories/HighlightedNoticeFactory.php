<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Highlighted;
use App\Models\Notice;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HighlightedNoticeFactory extends Factory
{
    protected $model = \App\Models\HighlightedNotice::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'highlighted_id' => 3,
            'notice_id' => Notice::inRandomOrder()->first()->id ?? Notice::factory(),
            'start_date' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'end_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'amount_paid' => $this->faker->randomFloat(2, 100, 10000),
        ];
    }
}
