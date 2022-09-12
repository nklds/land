<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Section;
use App\Models\Text;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    public function configure(): ImageFactory
    {
        return $this->afterCreating(function (Image $image){
            $image->update(['self_url' => "/api/v1/image/$image->id"]);
            Section::inRandomOrder()->first()->images()->save($image);
            $image->update(['bem_class' => $image->sections()->first()->bem_class . '__' .$image->bem_class]);
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
            'class_list' => $this->faker->word(),
            'bem_class' => $this->faker->word(),
            'visible_text' => $this->faker->realText(50),
            'title' => $this->faker->word(),
            'tag_name' => 'img',
            'extra' => $this->faker->realText(50),
            'alt' => $this->faker->realText(50),
            'image_url' => 'https://via.placeholder.com/' . rand(500, 700) . 'x' . rand(250,350),
            'visible_name' => $this->faker->word(),
            'data_attributes' => $this->faker->realText(50),
            'type' => 'image',
            'name' => 'image.png',
            'fragment_name' => $this->faker->word(),
            'order' => rand(3,60),
            'place' => $this->faker->md5(),
            'href' => $this->faker->url(),
        ];
    }
}
