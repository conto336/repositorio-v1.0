<?php

namespace Database\Factories;

use App\Models\Document;
use App\Models\Industrial;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class IndustrialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Industrial::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name =  $this->faker->sentence();
        $category = ['proyectos', 'monografias', 'seminarios'];
        $file = Storage::url('/electronica/monografias/1.pdf');
        $size = '2 MB';
        //$id = Document::where('carrer', 'Electronica')->get()->random()->id;
        $id = Document::where('carrer', 'Industrial')->orderBy('id')->get();

        foreach ($id as $item) {
            return [
                'url' => $file,
                'category' => $this->faker->randomElement($category),
                'authors' =>  $name,
                'description' => $this->faker->paragraph(),
                'size' => $size,
                'document_id' => $item,
            ];
        }
    }
}
