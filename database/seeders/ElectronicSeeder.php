<?php

namespace Database\Seeders;

use App\Models\Document;
use App\Models\Electronic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;
class ElectronicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $name =  'Juan Jóse Perez, Pepito Juanito Gonzáles';
        $category = ['proyectos', 'monografias', 'seminarios'];
        $file = Storage::url('/electronica/monografias/1.pdf');
        $size = '2 MB';

        foreach (Document::where('carrer', 'Electronica')->get() as $item) {
            Electronic::create([
                'url' => $file,
                'category' => Arr::random($category),
                'authors' =>  $name,
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod sint est odio numquam eum recusandae unde harum vitae qui laboriosam corporis dolor magnam
                 incidunt reprehenderit id, eos inventore delectus repudiandae!',
                'size' => $size,
                'document_id' => $item->id,
            ]);
        }
        //Electronic::factory(25)->create();
    }
}
