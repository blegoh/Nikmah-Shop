<?php

use Illuminate\Database\Seeder;
use App\Models\Bank;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bank::create([
            'bank_name' => 'BRI',
            'bank_account_id' => '002101091908500',
            'bank_account_name' => 'SHOLIHATUN NIKMAH'
        ]);
        Bank::create([
            'bank_name' => 'BNI',
            'bank_account_id' => '0432763198',
            'bank_account_name' => 'SHOLIHATUN NIKMAH'
        ]);
    }
}
