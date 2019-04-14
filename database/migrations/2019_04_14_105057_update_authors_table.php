<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('authors', function (Blueprint $table) {
            $table->dropColumn('email');
        });

        Schema::table('authors', function (Blueprint $table) {
            $table->string('email')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('authors', function (Blueprint $table) {
            //
        });
    }
}
