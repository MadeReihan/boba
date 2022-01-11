<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'facility_id' =>  mt_rand(1,3),
            'user_id' =>  mt_rand(1,3),
            'date' => $this->faker->date(),
            'start_time' => $this->faker->time(),
            'end_time' => $this->faker->time()

        ];
    }
}
