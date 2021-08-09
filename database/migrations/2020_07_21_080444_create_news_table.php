<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('headline')->nullable();
            $table->string('slug')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('source')->nullable();
            $table->string('image')->nullable();
            $table->string('image_alt')->nullable();
            $table->text('summary')->nullable();
            $table->text('description')->nullable();
            $table->integer('so');
            $table->integer('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
