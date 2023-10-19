<?php

namespace Database\Seeders;

/* 
 * mi aggaincio al model di books */
use App\Models\Book;
/* 
 * uso Faker per generare dei finti libri */
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
    {
        for ($i = 0; $i < 10; $i++) {
            $book = new Book();

            $book->title = $faker->words(3, true);
            $book->author = $faker->firstNameFemale();
            $book->price = $faker->randomFloat(2, 0, 150);
            $book->genre = $faker->words(3, true);
            $book->editor_house = $faker->company();
            $book->pages = $faker->randomNumber(3);
            $book->edition = $faker->randomDigit();
            $book->series_number = $faker->randomNumber(6);
            $book->copies_number = $faker->randomDigit();

            $book->save();
        }
    }
}