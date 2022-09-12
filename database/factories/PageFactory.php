<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'site_name' => 'testapi.test',
            'language' => 'ru_RU',

            'favicon' => 'https://via.placeholder.com/16',
            'slug' => ($slug = $this->faker->slug),
            'visible_name' => ($title = $this->faker->text(15)),

            'extra' => $this->faker->text(15),
            'common_head_styles' => '<style>*{ box-sizing: border-box;}</style>',
            'common_head_scripts' => '<script>console.log("common_head_scripts")</script>',
            'common_after_body_scripts' => '<script>console.log("common_after_body_scripts")</script>',
            'common_footer_scripts' => '<script>console.log("common_footer_scripts")</script>',

            'title' => $title, // password
            'description' => ($description = $this->faker->text(100)),
            'keywords' => preg_replace("/[ ]/", ', ', $this->faker->text(100)),
            'excerpt' => $this->faker->text(70),
            'og_title' => $title,
            'og_description' => $description,
            'og_type' => 'og_type',
            'og_image' => 'https://via.placeholder.com/600x400', // password
            'og_url' => 'testapi.test',
            'og_locale' => 'ru',
            'og_site_name' => 'testapi.test',
            'order' => rand(1, 100),
            'self_url' => '/api/pages/' . $slug
        ];
    }


}
