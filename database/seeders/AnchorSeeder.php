<?php

namespace Database\Seeders;

use App\Models\Anchor;
use Illuminate\Database\Seeder;

class AnchorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Anchor::factory(50)->create();
    }
}
