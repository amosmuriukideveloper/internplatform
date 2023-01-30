<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InternshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $businesses = DB::table('businesses')->pluck('id');

        $titles = [
            'Marketing Intern',
            'Software Development Intern',
            'Product Management Intern',
            'Design Intern',
            'Data Science Intern',
        ];

        $descriptions = [
            'Join our marketing team and help with various campaigns and initiatives.',
            'Develop new features and work on bug fixing in a fast-paced environment.',
            'Assist with product development and research in the tech industry.',
            'Collaborate with designers and contribute to the creation of beautiful designs.',
            'Apply your data analysis skills to real-world problems and drive meaningful insights.',
        ];

        for ($i = 0; $i < count($titles); $i++) {
            DB::table('internships')->insert([
                'title' => $titles[$i],
                'description' => $descriptions[$i],
                'business_id' => $businesses[rand(0, count($businesses) - 1)],
                'start_date' => '2022-07-01',
                'end_date' => '2022-09-30',
                'stipend' => '',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    
    }
}
