<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\suara;

class SuaraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Suara::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'pemilihan_id' => $this->faker->word(),
            'kandidat_id' => $this->faker->word(),
            'pemilih_id' => $this->faker->word(),
            'created_at' => $this->faker->word(),
            'updated_at' => $this->faker->word(),
        ];
    }
}
