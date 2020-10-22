<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       \App\Course::create([
            'courseCode'=> 'ENG112',
            'courseDesc'=> 'ENGLISH FOR IT STUDENTS 1',
            'degree'=> 'BSIT',
       ]);
        \App\Course::create([
            'courseCode'=> 'IT1',
            'courseDesc'=> 'INTRODUCTION TO INFORMATION TECHNOLOGY	',
            'degree'=> 'BSIT',
       ]);
       \App\Course::create([
            'courseCode'=> 'IT2',
            'courseDesc'=> 'INTRODUCTION TO PROGRAMMING',
            'degree'=> 'BSIT',
       ]);
       \App\Course::create([
            'courseCode'=> 'IT3',
            'courseDesc'=> 'APPLICATION SOFTWARE',
            'degree'=> 'BSIT',
       ]);
       \App\Course::create([
            'courseCode'=> 'MATH112',
            'courseDesc'=> 'ALGEBRA WITH TRIGONOMETRY',
            'degree'=> 'BSIT',
       ]);
       \App\Course::create([
            'courseCode'=> 'NSTP1',
            'courseDesc'=> 'NATIONAL SERVICE TRAINING PROGRAM 1',
            'degree'=> 'BSIT',
       ]);
       \App\Course::create([
            'courseCode'=> 'PE1',
            'courseDesc'=> 'PHYSICAL FITNESS',
            'degree'=> 'BSIT',
       ]);
       \App\Course::create([
            'courseCode'=> 'SOC111',
            'courseDesc'=> 'GENERAL PSYCHOLOGY WITH DRUG EDUCATION',
            'degree'=> 'BSIT',
       ]);
       
    }
}
