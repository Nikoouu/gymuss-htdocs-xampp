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
        DB::table('users')->insert([
            'name' => "Administrador",
            'email' => "admin@uss.cl",
            'is_admin' => 1,
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'name' => "usuario",
            'email' => "usuario@uss.cl",
            'is_admin' => 0,
            'password' => bcrypt('123456'),
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
