<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'),
            'remember_token' => $this->faker->text(12),
        ];
    }
}
