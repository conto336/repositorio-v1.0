<?php

namespace Database\Factories;

use App\Models\Document;
use App\Models\Electronic;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ElectronicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Electronic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       /*  $name =  $this->faker->sentence();
        $category = ['proyectos', 'monografias', 'seminarios'];
        $file = Storage::url('/electronica/monografias/1.pdf');
        $size = '2 MB';
        //$id = Document::where('carrer', 'Electronica')->get()->random()->id;

        foreach ( Document::where('carrer', 'Electronica')->orderBy('id')->get() as $item) {
            $electronica = Electronic::create([
                'url' => $file,
                'category' => $this->faker->randomElement($category),
                'authors' =>  $name,
                'description' => $this->faker->paragraph(),
                'size' => $size,
                'document_id' => $item->id,
            ]);
        }
        return $electronica; */
    }
}
