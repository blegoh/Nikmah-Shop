<?php

use Illuminate\Database\Seeder;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/kabupaten.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            \App\Models\Kabupaten::create([
                'id' => $obj->id,
                'name' => $obj->name,
                'prov_id' => $obj->prov_id
            ]);
        }
    }
}
