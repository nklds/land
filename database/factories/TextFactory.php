<?php

namespace Database\Factories;

use App\Models\Section;
use App\Models\Text;
use Illuminate\Database\Eloquent\Factories\Factory;

class TextFactory extends Factory
{
    /**
     * Makes self_url and bem_class as parent bem_class as block and self bem_class as element
     * @return TextFactory
     */
    public function configure(): TextFactory
    {
        return $this->afterCreating(function (Text $text){
            $text->update(['self_url' => "/api/v1/text/$text->id"]);
            $text->update(['bem_class' => Section::find($text->textable_id)->first()->bem_class . '__' .$text->bem_class]);
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

            'fragment_name' => ($fragment_name = $this->faker->word()),
            'visible_name' => $this->faker->word(),
            'class_list' => $this->faker->text(50),
            'bem_class' => $fragment_name,
            'visible_text' => $this->faker->realText(150),
            'title' => $this->faker->realText(50),
            'tag_name' =>  'p',
            'extra' => $this->faker->realText(100),
            'data_attributes' => 'data-type="data-type"',
            'name' => $this->faker->word(),
            'value' => $this->faker->word(),
            'type' => 'text',
            'textable_type' => '\App\Models\Section',
            'textable_id' => Section::inRandomOrder()->first()->id,
            'place' => $this->faker->word(),
            'order' => rand(3,60),
            'placeholder' => $this->faker->words(3,true)
        ];
    }
}
