<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Format;

class FormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $labels = ["Flexible cover", "Pdf", "Kindle", "Ebook", "Audio book"];

        foreach ($labels as $label) {

            $format = new Format();
            $format->label = $label;
            $format->save();
        }
    }
}