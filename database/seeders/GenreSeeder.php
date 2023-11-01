<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $_genres = [
            'Horror',
            'Giallo',
            'Drammatico',
            'Fantasy',
            'Romantico',
        ];

        foreach ($_genres as $_genre) {
            $genre = new Genre();
            $genre->name = $_genre;
            $genre->save();
        }

    }
}
