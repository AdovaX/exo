<?php

use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
         'name' => 'Exoadmin',
         'email' => 'deepak.dev@adova.in',
         'password' => Hash::make('password'),
     ]);
    }
}
