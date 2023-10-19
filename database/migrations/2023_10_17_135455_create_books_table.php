<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 50);
            $table->string('author', 30);
            $table->float('price', 5, 2);
            $table->text('genre');
            $table->string('editor_house', 30);
            $table->smallInteger('pages');
            $table->tinyInteger('edition');
            $table->string('series_number')->unique();
            $table->tinyInteger('copies_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};