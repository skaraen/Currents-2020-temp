<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCcadetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ccadetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('dob');
            $table->string('college');
            $table->string('branch');
            $table->string('year');
            $table->string('por');
            $table->string('mobile');
            $table->string('perma_phone');
            $table->text('curr_addr');
            $table->text('perm_addr');
            $table->text('ref_id');
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
        Schema::dropIfExists('ccadetails');
    }
}
