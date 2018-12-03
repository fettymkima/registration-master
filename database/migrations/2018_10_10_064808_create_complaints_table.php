<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('complaint_type_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('postal');
            $table->string('residence');
            $table->string('phone_number');
            $table->string('email');
            $table->string('social_security_status');
            $table->string('mfuko');
            $table->string('membership_number');
            $table->string('employer');
            $table->string('complaint_type');
            $table->string('complaints');
            $table->string('status');
            $table->string('validator');
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
        Schema::dropIfExists('complaints');
    }
}
