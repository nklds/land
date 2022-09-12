<?php

namespace Database\Factories;

use App\Models\Head;
use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;

class HeadFactory extends Factory
{
    public function configure(): HeadFactory
    {
        return $this->afterCreating(function (Head $head) {
            $head->update(['self_url' => '/api/v1/heads/' . $head->id]);
        });
    }
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'page_id' => Page::inRandomOrder()->first()->id,
            'visible_name' => $this->faker->realTextBetween(10, 22),
            'tag_manager_id' => 'TM3345677',
            'google_analytics_id' => 'TM3345677',
            'yandex_metrika_id' => 'TM3345677',
            'vk_pixel_id' => 'TM3345677',
            'facebook_pixel_id' => 'TM3345677',
            'my_target_id' => 'TM3345677',
            'main' => false,
            'extra' => 'TM3345677',
            'order' => rand(1, 60),

        ];
    }
}
