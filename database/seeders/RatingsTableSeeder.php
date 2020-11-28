<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rating;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rating::truncate();
        Rating::create(array(
            'user_id' => 2,
            'document_id' => 1,
            'value' => 4,
            'review' => 'An excellent piece of African American Lit. I couldn"t stop gasping!' 
        ));
    }
}
