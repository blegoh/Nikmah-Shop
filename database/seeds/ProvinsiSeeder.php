<?php

use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/provinsi.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            \App\Models\Provinsi::create([
                'id' => $obj->id,
                'name' => $obj->name
            ]);
        }
    }
}
