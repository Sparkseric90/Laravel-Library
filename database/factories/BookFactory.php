<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
public function definition()
    {
        return [
            'title' => $this->faker->realText($this->faker->numberBetween(10, 20)),
            'excerpt' => $this->faker->text,
            'reviews' => $this->faker->text,
            'ISBN' => $this->faker->isbn13,
            'pages' => $this->faker->numberBetween(31, 200),
            'cost' => $this->faker->randomFloat(2, 5, 20),
            'published' => $this->faker->datetime()
        ];
    }
}
