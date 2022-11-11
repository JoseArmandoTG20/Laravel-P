<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        $user = new User();
        $user -> name = 'Armando ';
        $user -> lastname = 'Torres';
        $user -> email = 'armandopromx@gmail.com';
        $user -> password = 'armando12345';
        $user -> save();

        $user = new User();
        $user -> name = 'Dinah';
        $user -> lastname = 'Carpenter';
        $user -> email = 'dinahG@gmail.com';
        $user -> password = '123456789';
        $user -> save();
    }
}
