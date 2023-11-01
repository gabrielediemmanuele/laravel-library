<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Book;
use App\Models\Loaner;

use Faker\Generator as Faker;

class BookLoanerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        $books = Book::all();
        $loaners = Loaner::all()->pluck('id')->toArray();

        foreach ($books as $book) {
            $book
                ->loaners()
                ->attach($faker->randomElements($loaners, random_int(0, 3)));
        }
    }
}
