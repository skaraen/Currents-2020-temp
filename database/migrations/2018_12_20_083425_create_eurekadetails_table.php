<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEurekadetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eurekadetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_1');
            $table->string('class_1');
            $table->string('contact_1')->nullable();
            $table->string('name_2');
            $table->string('class_2');
            $table->string('contact_2')->nullable();
            $table->string('coordinator');
            $table->string('phone');
            $table->string('school');
            $table->string('school_address');
            $table->string('email')->nullable();
            $table->string('theme');
            $table->text('abstract');
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
        Schema::dropIfExists('eurekadetails');
    }
}
