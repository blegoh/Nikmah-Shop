<?php

use Illuminate\Database\Seeder;
use App\Models\Member;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Admin::create([
            'username' => 'blegoh',
            'password' => bcrypt('blegoh'),
            'name' => 'Yusuf Eka Sayogana'
        ]);
    }
}
