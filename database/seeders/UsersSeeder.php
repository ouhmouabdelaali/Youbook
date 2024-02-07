<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users;

class UsersSeeder extends Seeder
{
    public function run()
    {
        Users::factory()->count(10)->create(); 
    }
}
