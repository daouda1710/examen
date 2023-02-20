<?php

namespace Database\Factories;

use App\Models\Output;
use Illuminate\Database\Eloquent\Factories\Factory;

class OutputFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Output::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'label' => $this->faker->word,
        'description' => $this->faker->text,
        'amount' => $this->faker->randomDigitNotNull,
        'date' => $this->faker->date('Y-m-d H:i:s'),
        'output_types' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
