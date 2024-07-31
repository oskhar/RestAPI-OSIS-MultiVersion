<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\jabatan;

class JabatanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Jabatan::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama_jabatan' => $this->faker->word(),
            'level' => $this->faker->word(),
            'created_at' => $this->faker->word(),
            'updated_at' => $this->faker->word(),
        ];
    }
}
