<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Project;
use App\Models\Type;



class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = Project :: factory() -> count(30) -> make();

        foreach ($projects as $project) {

            $user = User :: inRandomOrder() -> first();
            $type = Type :: inRandomOrder() -> first();

            $project->user_id = $user->id;
            $project->type_id = $type->id;
            $project -> save();
        }
    }
}
