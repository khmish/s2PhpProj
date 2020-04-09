<?php

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
        $this->call(CitySeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(QualificationSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(JobSeeder::class);
        // $this->call(QualificationSeeder::class);
    }
}
