<?php
// database/seeders/BookSeeder.php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Books;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    public function run()
    {
        Books::factory()->count(10)->create();
    }
}
