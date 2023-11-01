<?php

namespace Database\Seeders;

/* 
 ! Models */
use App\Models\Book;
use App\Models\Genre;
/* 
 ! Faker */
use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    { /* creo un ciclo for per dire quanti elementi voglio generare  */

        $book_ids = Genre::all()->pluck("id")->toArray();

        for ($i = 0; $i < 10; $i++) {
            $book = new Book();

            $book->title = $faker->words(3, true);
            $book->author = $faker->firstNameFemale() . " " . $faker->lastName();
            $book->price = $faker->randomFloat(2, 0, 150);
            $book->editor_house = $faker->company();
            $book->pages = $faker->randomNumber(3);
            $book->edition = $faker->randomDigit();
            $book->series_number = $faker->randomNumber(6);
            $book->copies_number = $faker->randomDigit();

            $book->genre_id = $faker->randomElement($book_ids);

            $book->save();
        }
    }
}