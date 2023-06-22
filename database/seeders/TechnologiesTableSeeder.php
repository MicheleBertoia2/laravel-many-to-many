<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['Laravel', 'Vue', 'React', 'Bootstrap', 'TailwindCSS', '.NET',];

        foreach ($data as $technology) {
            $new_technology  = new Technology();
            $new_technology->name = $technology;
            $new_technology->slug = Technology::generateSlug($new_technology->name);
            $new_technology->save();
        }
    }
}
