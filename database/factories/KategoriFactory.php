<?php

namespace Database\Factories;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class KategoriFactory extends Factory
{
    /**
     * The names of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kategori::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kategori' => $this->faker->name(),
        ];
    }
}