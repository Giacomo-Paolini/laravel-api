<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ["html", "css", "vue", "laravel"];

        for ($i=0; $i < count($technologies); $i++) { 
            $technology = new Technology();

            $technology->name = $technologies[$i];

            $technology->save();
        }
    }
}
