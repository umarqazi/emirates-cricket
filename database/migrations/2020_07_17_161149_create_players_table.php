<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob');
            $table->string('email');
            $table->string('mobile');
            $table->string('nationality');
            $table->string('living_in');
            $table->boolean('visa_status')->default(false);
            $table->string('playing_with');
            $table->text('message');
            $table->string('photo');
            $table->boolean('status');
            $table->boolean('id_type');
            $table->string('passport_page');
            $table->string('emirates_id_front');
            $table->string('emirates_id_back');
            $table->string('visa_page');
            $table->date('passport_expiry');
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
        Schema::dropIfExists('players');
    }
}
