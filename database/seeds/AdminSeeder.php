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
        $member = new Member();
        $member->name = 'Yusuf Eka Sayogana';
        $member->save();
        \App\User::create([
            'email' => 'info@yusufeka.me',
            'password' => bcrypt('admincoeg'),
            'member_id' => $member->id
        ]);
    }
}
