<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Register;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RegisterFactory extends Factory
{
    protected $model = Register::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Obtener todos los IDs de usuarios disponibles
        $userIds = User::pluck('id');

        return [
            'checkIn' => $this->faker->date,
            'checkOut' => $this->faker->optional($weight = 0.5)->date, // 50% de probabilidad de ser nulo
            'user_id' => $this->faker->randomElement($userIds),
        ];
    }
}
