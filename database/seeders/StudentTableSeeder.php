<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student; 


class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create( [
            'name' => 'jhon',
            'course' => 'MCA',
            'roll_number' => 23,
            'stream' => 'Computer Application',
            'age' => 23,
            'enrollment_number' => 'ABC123'
        ]);
    }
}
