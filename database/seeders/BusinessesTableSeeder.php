<?php

namespace Database\Seeders;

use App\Models\Businesses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $businesses = [
          
            [
                'name' => 'GBS',
                'email' => 'gbs@example.com',
                'password' => bcrypt('password'),
                'location' => 'Redmond, WA',
                'industry' => 'Technology',
                'website' => 'https://www.gbs.com',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Businesses::insert($businesses);
    }

    }

