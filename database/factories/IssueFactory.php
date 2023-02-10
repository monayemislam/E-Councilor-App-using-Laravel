<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;


class IssueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::factory(),
            'title'=>$this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'description'=>$this->faker->text($maxNbChars = 200),
            'file_path'=>null
        ];
    }
}
