<?php

namespace Database\Factories;

use App\Models\Clothe;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClotheFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Clothe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $pr_name=$this->faker->unique()->words($nb=4,$astext=true);
        $slug=Str :: slug($pr_name);
        return [
            'libellep'=>$pr_name,
            'slug'=>$slug,
            'description'=>$this->faker->text(200),
            'prix'=>$this->faker->numberBetween(10,500),
            'SKU'=>$this->faker->unique()->numberBetween(100,500),
            'stock'=>'instock',
            'qte'=>$this->faker->numberBetween(100,200),
            'photo'=>$this->faker->unique()->numberBetween(1,50).'.jpg',
            'categori_id'=>$this->faker->numberBetween(1,5)


        ];
    }
}
