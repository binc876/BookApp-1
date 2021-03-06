<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Genre;
use App\Models\Document;
use App\Models\Rating;
use App\Models\Docs_Rented;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        /*$this->call([
            UsersTableSeeder::class,
            DoctypesTableSeeder::class,
            GenresTableSeeder::class,
            DocumentsTableSeeder::class,
            RatingsTableSeeder::class,
        ]);*/

        $this->call(BookAppSeeder::class);
    }
}

class BookAppSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $tami = User::create(array(
            'name'         => 'Tami',
            'email'         => 'tami24tami@gmail.com',
            'password' =>  Hash::make('testing'),
            'phone_number' => '+260966567855',
            'role' => 'author'
        ));
        $mutaminwa = User::create(array(
            'name'         => 'Mutaminwa',
            'email'         => 'mutaminwac@gmail.com',
            'password' =>  Hash::make('password'),
            'phone_number' => '+260966567855',
            'role' => 'reader'
        ));
        User::create(array(
            'name'         => Str::random(10),
            'email'         => Str::random(10).'@gmail.com',
            'password' =>  'password',
            'phone_number' => Str::random(10),
            'role' => 'reader'
        ));
    
    
        Genre::truncate();
        $fiction = Genre::create(['name' => 'Fiction']);
        $non_fiction = Genre::create(['name' => 'Non-Fiction']);
    
        Document::truncate();
        $railroad = Document::create(array(
            'name' => 'The Underground Railroad',
            'description' => 'The story of a black young woman travelling the underground railroad through time and space.',
            'price_per_day' => 15,
            'price_per_week' => 50,
            'price_per_month' => 100, 
            'user_id' => $tami->id ,
            'genre_id' => $fiction->id ,
            'path' => 'lololol'
        ));
        $testing = Document::create(array(
            'name' => 'Testing Methods',
            'description' => 'I am tired',
            'price_per_day' => 5,
            'price_per_week' => 20,
            'price_per_month' => 50, 
            'user_id' => $mutaminwa->id ,
            'genre_id' => $non_fiction->id ,
            'path' => 'lololol'
        ));

        Rating::truncate();
        $firstrating = Rating::create(array(
            'user_id' => $mutaminwa->id,
            'document_id' => $railroad->id,
            'value' => 4,
            'review' => 'An excellent piece of African American Lit. I couldn"t stop gasping!' 
        ));

        Docs_Rented::truncate();
        $firstrental = Docs_Rented::create(array(
            'user_id' => $mutaminwa->id,
            'document_id' => $railroad->id,
            'status' => 'pending',
            'price' => 400,
            'payment_status' => false,
            'payment_method' => null,
            'expiry_date' => '2020/05/02'
        ));

        $railroad->genre($fiction->id);
        $railroad->author($tami->id);

        //$tami->document()->attach($railroad->id);
        $firstrating->user($mutaminwa->id);
        $firstrating->document($railroad->id);

        $firstrental->user($mutaminwa->id);
        $firstrental->document($railroad->id);

    }
}