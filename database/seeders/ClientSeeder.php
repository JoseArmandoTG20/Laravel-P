<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name'=> 'Armando',
            'lastname'=> 'Torres',
            'email'=> 'armandopromx@gmail.com',
            'phone_number'=> '6121356944',
        ]);
    }
}
