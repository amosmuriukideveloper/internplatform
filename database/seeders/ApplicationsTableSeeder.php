<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = DB::table('students')->pluck('id')->toArray();
        $internships = DB::table('internships')->pluck('id')->toArray();
        $data = [];

        for ($i = 0; $i; $i++) {
            $studentId = $students;
            $internshipId =$internships;

            $data[] = [
                'student_id' => $studentId,
                'internship_id' => $internshipId,
                'cover_letter' => "Cover Letter $i",
                // 'status' => array_random(['pending', 'accepted', 'rejected']),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        DB::table('applications')->insert($data);
    
    }
}
