<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQueuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('queues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('p_id');
            $table->string('first_name');
            $table->string('b_id');
            $table->string('branch_name');
            $table->string('s_id');
            $table->string('service_name');
            $table->string('status')->nullable();
            $table->string('visit')->nullable();
            $table->string('visit_no')->nullable();
            $table->dateTime('next_visit')->nullable();
            $table->dateTime('visit_date_1st')->nullable();
            $table->date('next_visit_date_2nd')->nullable();
            $table->string('reason_2nd')->nullable();
            $table->dateTime('visit_date_2nd')->nullable();
            $table->date('next_visit_date_3rd')->nullable();
            $table->string('reason_3rd')->nullable();
            $table->dateTime('visit_date_3rd')->nullable();
            $table->timestamps();
            $table->foreign('p_id')->references('nic')->on('people');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('queues');
    }
}
