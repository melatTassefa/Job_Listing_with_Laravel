<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\job_type;

class job_type_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        job_type::insert([
            ['job_type'=>'remote'],
            ['job_type'=>'in_person']
        ]);
    }
}
