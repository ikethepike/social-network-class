<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('avatar')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
