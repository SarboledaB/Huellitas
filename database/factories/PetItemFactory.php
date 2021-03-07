<?php
/*
|--------------------------------------------------------------------------
| Author: Sebastian Arboleda Botero
| Email:  sarboledab@eafit.edu.co
|--------------------------------------------------------------------------
*/

namespace Database\Factories;

use App\Models\PetItem;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class PetItemFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PetItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {

        return [
            'name' => $this->faker->name,
            'details' => $this->faker->text,
            'value' => $this->faker->numberBetween($min = 200, $max = 9000),
            'rating' => $this->faker->numberBetween($min = 1, $max = 100),
        ];
    }
}
