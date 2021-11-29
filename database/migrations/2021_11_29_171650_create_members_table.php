<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('applicant_name')->nullable();
            $table->string('age')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('email')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('spouse_age')->nullable();
            $table->string('spouse_email')->nullable();
            $table->string('children_1_name')->nullable();
            $table->string('children_1_age')->nullable();
            $table->string('children_1_mobile')->nullable();
            $table->string('children_1_email')->nullable();
            $table->string('children_2_name')->nullable();
            $table->string('children_2_age')->nullable();
            $table->string('children_2_mobile')->nullable();
            $table->string('children_2_email')->nullable();
            $table->string('reference_name')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('members');
    }
}
