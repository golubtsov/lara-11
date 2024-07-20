<?php

namespace Domain\Users;

use App\Database\BaseFactory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UserFactory extends BaseFactory
{
    protected $model = User::class;

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
