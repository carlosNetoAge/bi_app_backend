<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Psy\Util\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ativo' => 1,
            'nome' => fake()->firstName(),
            'sobrenome' => fake()->lastName(),
            'email' => fake()->email(),
            'setor_id' => 1,
            'privilegio' => 0,
            'personal_token' => Hash::make(\Illuminate\Support\Str::random(40))
        ];
    }
}
