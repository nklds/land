<?php

namespace Database\Seeders;

use App\Models\Anchor;
use App\Models\Head;
use App\Models\Image;
use App\Models\Page;
use App\Models\Section;
use App\Models\Text;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Page::factory(10)->create();
        Head::factory(15)->create();
        Section::factory(35)->create();
        Text::factory(50)->create();
        Anchor::factory(50)->create();
        Image::factory(50)->create();
        User::factory(30)->create();
    }
}
