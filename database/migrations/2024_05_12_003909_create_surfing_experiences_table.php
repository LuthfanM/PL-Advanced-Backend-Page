<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurfingExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surfing_experiences', function (Blueprint $table) {
            $table->increments('experience_id');
            $table->unsignedInteger('surfer_id');
            $table->date('visit_date');
            $table->unsignedInteger('experience');
            $table->string('desired_board', 100);
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('surfer_id')->references('surfer_id')->on('surfers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surfing_experiences');
    }
}
