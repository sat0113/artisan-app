<?php

namespace Database\Factories;

use App\Models\Dedura;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeduraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */


    protected $model = Dedura::class;

    static $i = 0;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween($min = 1, $max = 3),
            'genba_id' => $this->faker->numberBetween($min = 1, $max = 2),
            'date' => function () { 
                return date('Y-m-d', strtotime(self::$i++ . ' day', strtotime('2021-05-01')));
            },
            'shift' => $this->faker->randomElement(['0','1']),
        ];
        
    }
}