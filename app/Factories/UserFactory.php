<?php

namespace App\Factories;

use App\Models\User;

class UserFactory
{
    public static function create(array $attributes = []): User
    {
        return User::factory()->create($attributes);
    }

    public static function make(array $attributes = []): User
    {
        return User::factory()->make($attributes);
    }
}

