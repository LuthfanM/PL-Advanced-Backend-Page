<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surfers', function (Blueprint $table) {
            $table->increments('surfer_id');
            $table->string('name', 100);
            $table->string('country', 100);
            $table->string('email', 100)->unique();
            $table->string('phone_number', 15);
            $table->text('id_card');
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
        Schema::dropIfExists('surfers');
    }
}
