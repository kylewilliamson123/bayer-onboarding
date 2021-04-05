<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignColumnToNTTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('n_h_tickets', function ($table) {

            //add the foreign key of a new hire to the nh ticket
            $table->unsignedBigInteger('new_hire_id');
            $table->foreign('new_hire_id')->references('id')->on('new_hires');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('n_h_tickets', function ($table) {
            //not dropping any columns at this time
        });
    }
}
