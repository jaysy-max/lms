<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $teacherRole = Role::where('name', 'teacher')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
        	'name' => 'Administrator User',
        	'email' => 'admin@admin.com',
        	'password' => Hash::make('password')
        ]);

        $teacher = User::create([
        	'name' => 'Teacher User',
        	'email' => 'teacher@teacher.com',
        	'password' => Hash::make('password')
        ]);

        $user = User::create([
        	'name' => 'Student User',
        	'email' => 'student@student.com',
        	'password' => Hash::make('password')
        ]);

        $admin->roles()->attach($adminRole);
        $teacher->roles()->attach($teacherRole);
        $user->roles()->attach($userRole);
    }
}
