<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNHTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('n_h_tickets', function (Blueprint $table)
        {
            //default id for the NewHireTicket creation
            $table->id();

            //the ticket reference number in the creation of a new hire
            $table->bigInteger('HTicketNumber');

            //The date that the form was created
            $table->timestamp('Date')->nullable();


            //The date the newhire ticket was created
            $table->timestamp('created_at')->nullable();


            //the last time the new hire table was updated
            $table->timestamp('updated_at')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('n_h_tickets');
    }
}
