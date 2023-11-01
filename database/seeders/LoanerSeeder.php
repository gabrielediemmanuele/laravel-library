<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Loaner;

class LoanerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $loaner = new Loaner();

        $loaner->name = $faker->firstNameMale();
        $loaner->surname = $faker->lastName();
        $loaner->phone_number = $faker->phoneNumber();
        $loaner->loan_books = $faker->firstNameMale();

        $loaner->save();
    }
}
