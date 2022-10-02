<?php

namespace Database\Factories;

use App\Models\category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class categoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $cat_name=$this->faker->unique()->words($nb=2,$astext=true);
        $slug=Str :: slug($cat_name);
        return [
            'libelle'=>$cat_name,
            'slug'=>$slug
        ];
    }
}
