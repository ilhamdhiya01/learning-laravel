<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'nim' => 'G.231.18.00' . rand(10,60),
            'email' =>$this->faker->email(),
            'no_wa' => '085803135909',
            'status' => rand(0,1)
        ];
    }
}
