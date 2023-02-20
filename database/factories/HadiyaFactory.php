<?php

namespace Database\Factories;

use App\Models\Hadiya;
use Illuminate\Database\Eloquent\Factories\Factory;

class HadiyaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hadiya::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'amount' => $this->faker->randomDigitNotNull,
        'hadiya_type_id' => $this->faker->word,
        'member_id' => $this->faker->word,
        'payment_method_id' => $this->faker->word,
        'date' => $this->faker->date('Y-m-d H:i:s'),
        'description' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
