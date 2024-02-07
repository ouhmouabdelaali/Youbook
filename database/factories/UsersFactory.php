<?php

namespace Database\Factories;


use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsersFactory extends Factory
{
    protected $model = Users::class;

    public function definition()
    {
        return [
            'username' => $this->faker->userName,
            'password' => 'password', // Don't bcrypt the password
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->phoneNumber,
            'role' => $this->faker->randomElement(['admin', 'student']),
            'is_active' => true,
        ];
    }
}
