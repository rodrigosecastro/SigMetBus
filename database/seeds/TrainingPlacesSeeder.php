<?php

use Illuminate\Database\Seeder;

class TrainingPlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('training_places')->insert([
            'place_type_id' => 1,
            'name' => '501',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('training_places')->insert([
            'place_type_id' => 1,
            'name' => '510',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('training_places')->insert([
            'place_type_id' => 2,
            'name' => 'Oficina #100',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('training_places')->insert([
            'place_type_id' => 2,
            'name' => 'Oficina #110',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('training_places')->insert([
            'place_type_id' => 2,
            'name' => 'Oficina #88',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
