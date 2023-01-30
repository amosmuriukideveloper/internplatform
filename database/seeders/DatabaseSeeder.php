<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StudentsTableSeeder::class);
        $this->call(BusinessesTableSeeder::class);
        $this->call(InternshipsTableSeeder::class);
        $this->call(ApplicationsTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
}
}