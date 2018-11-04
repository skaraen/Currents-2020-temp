<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterndetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interndetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('roll');
            $table->string('email_id');
            $table->string('phone');
            $table->string('year');
            $table->string('project_one');
            $table->string('project_two');
            $table->string('project_three');
            $table->text('sop');
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
        Schema::dropIfExists('interndetails');
    }
}
