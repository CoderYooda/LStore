<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class SeedAdministrator extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Yooda',
            'email' => 'CoderYooda@gmail.com',
            'password' => bcrypt('senatorov616322')
        ]);
    }
}
