<?php

namespace Database\Factories;

use App\Models\Resumes;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResumesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Resumes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $names = [
            'MAROD CATAP',
            'THRISTAN REYNA',
            'JAYSON BANTOG',
            'LOUIE TOLENTINO',
            'CLINT FERNANDO',
            'LACER LAZARO',
            'GABRIEL ROXAS',
            'NARRY CASTRO',
            'ELLARD GARCIA'
        ];

        return [
            'name' => $this->faker->randomElement($names),
            'title' => $this->faker->word,
            'status' => $this->faker->randomElement(['Active', 'Inactive']),
            'role' => $this->faker->jobTitle,
            'email' => $this->faker->unique()->safeEmail,
            'experience' => $this->faker->paragraph(),
            'skills' => $this->faker->words(5, true),
            'education' => $this->faker->sentence(),
        ];
    }
}
