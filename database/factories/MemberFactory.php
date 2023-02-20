<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->word,
        'cni' => $this->faker->word,
        'firstname' => $this->faker->word,
        'lastname' => $this->faker->word,
        'address' => $this->faker->word,
        'email' => $this->faker->word,
        'phone' => $this->faker->word,
        'sex' => $this->faker->word,
        'date_membership' => $this->faker->date('Y-m-d H:i:s'),
        'member_function_id' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
