<?php

use Illuminate\Database\Seeder;

class PlacesTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('places_types')->insert([
            'name' => '510',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('places_types')->insert([
            'name' => '612',
            'created_at' => date('Y-m-d H:i:s')
        ]);


    }
}
