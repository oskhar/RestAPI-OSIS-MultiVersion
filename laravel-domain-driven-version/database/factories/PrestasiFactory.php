<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\prestasi;

class PrestasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Prestasi::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'ekstrakurikuler_id' => $this->faker->word(),
            'nama_prestasi' => $this->faker->word(),
            'tanggal' => $this->faker->date(),
            'deskripsi' => $this->faker->text(),
            'created_at' => $this->faker->word(),
            'updated_at' => $this->faker->word(),
        ];
    }
}
