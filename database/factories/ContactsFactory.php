<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Company;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contacts>
 */
class ContactsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'first_name' => fake()->first_name(),
            'last_name' => fake()->last_name(),
            'phone' => fake()->phone(),
            'email' => fake()->email(),
            'address' => fake()->address(),
            'company_id' => Company::pluck('id')->random() //return array contains id of the company
        ];
    }
}
