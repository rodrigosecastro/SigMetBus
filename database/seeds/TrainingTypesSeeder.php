<?php

use Illuminate\Database\Seeder;

class TrainingTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('training_types')->insert([
            'name' => 'Interna',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('training_types')->insert([
            'name' => 'Externa',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
