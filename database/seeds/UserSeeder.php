<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
        $member->city = '160';
        $member->phone = '087751750878';
        $member->address = 'Jl Brantas XIV 184';
        $member->save();

        return User::create([
            'email' => 'yusufblegoh@gmail.com',
            'member_id' => $member->id,
            'password' => bcrypt('justkamu')
        ]);
    }
}
