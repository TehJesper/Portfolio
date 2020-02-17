<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssignmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assignments')->insert([
            [
                'course_id' => 1,
                'name' => 'casustoets',
                'weight' => 100,
                'grade' => 6
            ],
            [
                'course_id' => 2,
                'name' => 'toets',
                'weight' => 100,
                'grade' => 7
            ],
            [
                'course_id' => 3,
                'name' => 'toets',
                'weight' => 100,
                'grade' => 7.5
            ],
            [
                'course_id' => 3,
                'name' => 'project',
                'weight' => 50,
                'grade' => 6
            ],
            [
                'course_id' => 4,
                'name' => 'agile',
                'weight' => 50,
                'grade' => 7
            ],
            [
                'course_id' => 4,
                'name' => 'engels',
                'weight' => 50,
                'grade' => 7
            ]
            ]);
    }
}
