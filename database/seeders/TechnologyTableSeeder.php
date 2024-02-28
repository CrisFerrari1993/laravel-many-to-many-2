<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;
use App\Models\Technology;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = Technology :: factory() -> count(4) -> create();

        foreach ($technologies as $technology) {

            $projects = Project :: inRandomOrder() -> limit(rand(3, 10)) -> get();

            $technology->projects()->attach($projects);


        }
    }
}
