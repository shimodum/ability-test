<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => \App\Models\Category::factory(),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->randomElement([1, 2, 3]),
            'email' => $this->faker->safeEmail,
            'tel' => $this->faker->numerify('080#######'),
            'address' => $this->faker->address,
            'building' => $this->faker->optional()->secondaryAddress,
            'detail' => $this->faker->text(120),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
