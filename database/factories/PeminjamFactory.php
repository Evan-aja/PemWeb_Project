<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peminjam>
 */
class PeminjamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'nik' => $this->faker->randomNumber(4),
            'alamat' => $this->faker->address(),
            'pekerjaan' => $this->faker->jobTitle()
        ];
    }
}
