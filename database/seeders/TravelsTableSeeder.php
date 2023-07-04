<?php

namespace Database\Seeders;

use App\Models\Travel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $travels = config('travels');
            foreach ($travels as $travel) { 
               Travel::create([
                'date' => $travel['date'],
                'title' => $travel['title'],
                'text' => $travel['text'],
                'image' => $travel['image'],
                'country' => $travel['country'],
                'city' => $travel['city'],
               ]);
            }
                // Esegui l'operazione desiderata per ogni dato nel seeder
        }
    }
}
