<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\kandida_wakil;

class KandidaWakilFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = KandidaWakil::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'kandida_ketua_id' => $this->faker->word(),
            'user_id' => $this->faker->word(),
            'created_at' => $this->faker->word(),
            'updated_at' => $this->faker->word(),
        ];
    }
}
