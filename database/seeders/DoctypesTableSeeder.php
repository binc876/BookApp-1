<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctype;
use Illuminate\Support\Str;

class DoctypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doctype::truncate();
        Doctype::create(['name' => 'Book']);
        Doctype::create(['name' => 'Journal']);
        Doctype::create(['name' => 'Research Paper']);
    }
}
