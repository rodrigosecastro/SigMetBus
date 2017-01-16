<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PlacesTypesSeeder::class);
        $this->call(SessionsStagesSeeder::class);
        $this->call(TrainingTypesSeeder::class);
        $this->call(TrainingPlacesSeeder::class);
    }
}
