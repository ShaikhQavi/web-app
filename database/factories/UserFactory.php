<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);

        return [
            'name'               => $this->faker->name(),
            'email'              => $this->faker->unique()->safeEmail(),
            'bio'                => $this->faker->realText($maxNbChars = 50, $indexSize = 2),
            'email_verified_at'  => now(),
            'gender'             => $gender,
            'type'               => 'user',
            'date_of_birth'      => $this->faker->date('Y-m-d', $max = 'now'),
            'active_since'       => $this->faker->date('Y-m-d', $max = 'now'),
            'status'             => 1,
            'password'           => Hash::make('password'),
            'remember_token'     => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
