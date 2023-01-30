<?php

namespace Database\Seeders;

use App\Models\Students;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $students = 
            [
                'name' => 'John Doer',
                'email' => 'johndoer@example.com',
                'password' => bcrypt('password'),
                'school' => 'Harvard Bible College',
                'major' => 'Computer Science',
                'gpa' => '3.5',
                'resume' => 'resume.pdf',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            Students::insert($students);
        
    }
}
