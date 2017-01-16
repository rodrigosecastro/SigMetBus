<?php

use Illuminate\Database\Seeder;

class SessionsStagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sessions_stages')->insert([
            'name' => 'Creada',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('sessions_stages')->insert([
            'name' => 'Programada',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('sessions_stages')->insert([
            'name' => 'Realizada',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('sessions_stages')->insert([
            'name' => 'Realizada',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('sessions_stages')->insert([
            'name' => 'Pendiente',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('sessions_stages')->insert([
            'name' => 'Terminada',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
