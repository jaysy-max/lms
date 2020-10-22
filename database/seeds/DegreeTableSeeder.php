<?php

use Illuminate\Database\Seeder;

class DegreeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Degree::create([
            'name'=> 'Bachelor of Science in Information Technology',
            'acronym'=> 'BSIT',
       ]);

       \App\Degree::create([
            'name'=> 'Bachelor of Science in Computer Science',
            'acronym'=> 'BSCS',
       ]);

       \App\Degree::create([
            'name'=> 'Bachelor of Science in Accountancy',
            'acronym'=> 'BSA',
       ]);
       
       \App\Degree::create([
            'name'=> 'Bachelor of Science in Business Administration',
            'acronym'=> 'BSBA',
       ]);

       \App\Degree::create([
            'name'=> 'Bachelor of Science in Hotel and Restaurant Management',
            'acronym'=> 'BSHRM',
       ]);
       
       \App\Degree::create([
            'name'=> 'Bachelor of Science in Tourism Management',
            'acronym'=> 'BSHRM',
       ]);

       \App\Degree::create([
            'name'=> 'Bachelor of Science in Criminology',
            'acronym'=> 'BSC',
       ]);

       \App\Degree::create([
            'name'=> 'Bachelor of Science in Electronics Engineering',
            'acronym'=> 'BSEC',
       ]);

       \App\Degree::create([
            'name'=> 'Bachelor of Science in Computer Engineeringnt',
            'acronym'=> 'BSCPE',
       ]);

       \App\Degree::create([
            'name'=> 'Bachelor of Science in Mechanical Engineering',
            'acronym'=> 'BSME',
       ]);

       \App\Degree::create([
            'name'=> 'Bachelor of Science in Electrical Engineering',
            'acronym'=> 'BSEE',
       ]);

       \App\Degree::create([
            'name'=> 'Bachelor of Science in Civil Engineering',
            'acronym'=> 'BSCE',
       ]);

       \App\Degree::create([
            'name'=> 'Bachelor of Science in Psychology',
            'acronym'=> 'BSP',
       ]);

       \App\Degree::create([
            'name'=> 'Bachelor of Arts in Communication',
            'acronym'=> 'BAC',
       ]);

       \App\Degree::create([
            'name'=> 'Bachelor of Science in Nursing',
            'acronym'=> 'BSN',
       ]);

       \App\Degree::create([
            'name'=> 'Bachelor of Science in Hotel and Restaurant Management',
            'acronym'=> 'BSHRM',
       ]);

       \App\Degree::create([
            'name'=> 'Bachelor of Science in Tourism Management',
            'acronym'=> 'BSTM',
       ]);

    
    }
}
