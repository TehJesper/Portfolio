<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Course;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('courses')->insert([
            [
                'name' => 'Programming basics',
                'ecs' => 5
            ],
            [
                'name' => 'Computer science',
                'ecs' => 7.5
            ],
            [
                'name' => 'OOP',
                'ecs' => 10
            ],
            [
                'name' => 'professional skills 2',
                'esc' => 5
            ]
        ]);
    }
}
