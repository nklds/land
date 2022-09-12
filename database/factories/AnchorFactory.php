<?php

namespace Database\Factories;

use App\Models\Anchor;
use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnchorFactory extends Factory
{
    /**
     * Makes self_url and bem_class    block__element
     * @return AnchorFactory
     */
    public function configure(): AnchorFactory
    {
        return $this->afterCreating(function (Anchor $anchor){
            $anchor->update(['self_url' => "/api/v1/anchors/$anchor->id"]);
            $anchor->update(['bem_class' => Section::find($anchor->anchorable_id)->first()->bem_class . '__' .$anchor->bem_class]);
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
            'anchorable_id' => Section::inRandomOrder()->first()->id,
            'anchorable_type' => 'Section',
            'class_list' => 'h2 text-center text-primary',
            'bem_class' => $this->faker->word(),
            'visible_text' => $this->faker->realText(50),
            'title' => $this->faker->word(),
            'tag_name' => 'a',
            'extra' => $this->faker->realText(50),
            'visible_name' => $this->faker->word(),
            'data_attributes' => '',
            'type' => 'button',
            'name' => $this->faker->word(),
            'fragment_name' => $this->faker->word(),
            'order' => rand(3,60),
            'place' => $this->faker->md5(),
            'href' => $this->faker->url(),
        ];
    }
}
