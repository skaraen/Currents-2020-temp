<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('id');
            $table->string('c_id');
            $table->string('workshop');
            $table->string('rating_1');
            $table->string('rating_2');
            $table->string('rating_3');
            $table->string('rating_4');
            $table->string('rating_5');
            $table->string('rating_6');
            $table->string('aspect');
            $table->string('improvements');
            $table->string('howknow');
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
        Schema::dropIfExists('feedback');
    }
}
