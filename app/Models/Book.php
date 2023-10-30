<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'price',
        'editor_house',
        'pages',
        'edition',
        'series_number',
        'copies_number',
        'genre_id'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function getGenre()
    {
        return $this->genre ? $this->genre->name : 'Untyped';
    }
}
