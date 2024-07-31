<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\edukasi;

class EdukasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Edukasi::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'judul' => $this->faker->word(),
            'konten' => $this->faker->text(),
            'file_path' => $this->faker->regexify('[A-Za-z0-9]{nullable}'),
            'created_at' => $this->faker->word(),
            'updated_at' => $this->faker->word(),
        ];
    }
}
