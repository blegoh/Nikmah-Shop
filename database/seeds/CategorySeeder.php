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
        \App\Models\Category::create([
            'name' => 'boot & kets',
            'site1' => 'http://ratuwedges.com/main/product_category_ready/3/category_ready',
            'site2' => 'http://divishoes.com/main/product_category_ready/6/category_ready'
        ]);
        \App\Models\Category::create([
            'name' => 'flat',
            'site1' => 'http://ratuwedges.com/main/product_category_ready/1/category_ready',
            'site2' => 'http://divishoes.com/main/product_category_ready/7/category_ready'
        ]);
        \App\Models\Category::create([
            'name' => 'heel',
            'site1' => 'http://ratuwedges.com/main/product_category_ready/4/category_ready',
            'site2' => 'http://divishoes.com/main/product_category_ready/8/category_ready'
        ]);
        \App\Models\Category::create([
            'name' => 'wedges',
            'site1' => 'http://ratuwedges.com/main/product_category_ready/2/category_ready',
            'site2' => 'http://divishoes.com/main/product_category_ready/5/category_ready'
        ]);
    }
}
