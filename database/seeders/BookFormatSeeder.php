<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Book;
use App\Models\Format;

class BookFormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    { {
            $books = Book::all(); // object Post
            $formats = Format::all()->pluck('id')->toArray(); // array  [1, 2, ... n]

            foreach ($books as $book) {
                $book
                    ->formats()
                    ->attach($faker->randomElements($formats, random_int(0, 3)));
            }
        }
    }
}