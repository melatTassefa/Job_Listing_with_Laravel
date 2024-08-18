<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\job_field;
class job_fields_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        job_field::insert([
            ['field_name'=>'Computer Science'],
            ['field_name'=>'Engineering'],
            ['field_name'=>'Health'],
            ['field_name'=>'Architecture'],
            ['field_name'=>'Business'],
            ['field_name'=>'Education'],
            ['field_name'=>'Art'],
            ['field_name'=>'Law'],
            ['field_name'=>'Science'],
            ['field_name'=>'Finance']
        ]);
    }
}
