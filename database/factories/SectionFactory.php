<?php

namespace Database\Factories;

use App\Models\Page;
use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

class SectionFactory extends Factory
{
    public function configure(): SectionFactory
    {
        return $this->afterCreating(function (Section $section){
           $section->update(['self_url' => "/api/v1/sections/$section->id"]);
        });
    }

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => ($name = $this->faker->word()),
            'visible_name' => $name,
            'bem_class' => $name,
            'class_list' => $this->faker->word(),
            'title' => $this->faker->word(),
            'page_id' => Page::inRandomOrder()->first()->id,
            'extra' => $this->faker->realText(50),
            'order' => rand(2,60)
        ];
    }

}
