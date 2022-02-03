<?php

namespace Database\Factories;

use App\Models\Document;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Document::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name =  $this->faker->sentence();
        $carrer = ['Electronica', 'Geologia', 'Industrial'];
        $date =  date('m, Y');

        return [
          'name' => $name,
          'original_name' => $name,
          'carrer' => $this->faker->randomElement($carrer),
          'type' => 'pdf',
          'date' => $date,
        ];
    }
}
