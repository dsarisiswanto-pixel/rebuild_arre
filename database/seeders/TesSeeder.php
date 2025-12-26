<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::created([
            'name' => 'Tes User',
            'email' => 'dellasarisiswanto2244@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}
