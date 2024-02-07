<?php
// database/factories/BookFactory.php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Books;
use App\Models\User;
use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;

class BooksFactory extends Factory
{
    protected $model = Books::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'author' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'user_id' => Users::factory(),
        ];
    }
}
