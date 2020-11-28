<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Document;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Document::truncate();
        Document::create(array(
            'name' => 'The Underground Railroad',
            'description' => 'The story of a black young woman travelling the underground railroad through time and space.',
            'price_per_day' => 15,
            'price_per_week' => 50,
            'price_per_month' => 100, 
            'user_id' => 1 ,
            'doctype_id' => 1 ,
            'genre_id' => 1 
        ));
    }
}
