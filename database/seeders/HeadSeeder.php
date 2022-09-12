<?php

namespace Database\Seeders;

use App\Models\Head;
use App\Models\Page;
use Illuminate\Database\Seeder;

class HeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Head::factory(25)->create();
    }
}
