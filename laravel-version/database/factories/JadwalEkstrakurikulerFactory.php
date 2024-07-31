<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\jadwal_ekstrakurikuler;

class JadwalEkstrakurikulerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JadwalEkstrakurikuler::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'ekstrakurikuler_id' => $this->faker->word(),
            'hari' => $this->faker->randomElement(["'Senin'",""]),
            'waktu_mulai' => $this->faker->time(),
            'waktu_selesai' => $this->faker->time(),
            'lokasi' => $this->faker->word(),
            'created_at' => $this->faker->word(),
            'updated_at' => $this->faker->word(),
        ];
    }
}
