<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('com_tickets', function (Blueprint $table)
        {
            //standard ID of the computer ticket in the database
            $table->id();

            //The mac ticket of the computer ticket for the computer request
            $table->bigInteger('MAC Ticket');

            //timestamp of the date entered the computer ticket
            $table->timestamp('DateEntered');

            //timestamp of the date of the laptop
            $table->timestamp('LaptopDate');

            //the type of PC being recieved in the ticket
            $table->char('PcType', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('com_tickets');
    }
}
