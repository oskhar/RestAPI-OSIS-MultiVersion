<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\pemilihan_ketua;

class PemilihanKetuaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PemilihanKetua::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'periode' => $this->faker->word(),
            'tanggal_mulai' => $this->faker->date(),
            'tanggal_selesai' => $this->faker->date(),
            'created_at' => $this->faker->word(),
            'updated_at' => $this->faker->word(),
        ];
    }
}
