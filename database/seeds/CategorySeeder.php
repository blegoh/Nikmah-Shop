<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::create(['name' => 'boot']);
        \App\Models\Category::create(['name' => 'flat']);
        \App\Models\Category::create(['name' => 'hells']);
    }
}
