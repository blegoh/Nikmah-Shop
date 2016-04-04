<?php

use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Supplier::create([
            'name' => 'Divishoes',
            'address' => 'Tangerang',
            'phone' => '087774837514',
            'website' => 'http://divishoes.com'
        ]);
        \App\Models\Supplier::create([
            'name' => 'Ginshashop',
            'address' => '',
            'phone' => '0857-1009-7162',
            'website' => 'http://ratuwedges.com'
        ]);
    }
}
